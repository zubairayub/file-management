<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use net\authorize\api\contract\v1\TransactionRequestType;
use net\authorize\api\contract\v1\OrderType;
use net\authorize\api\contract\v1\PaymentType;
use App\Models\UserPackage;
use App\Models\UserField;
use App\Models\User;
use net\authorize\api\contract\v1\CreateTransactionRequest;
use net\authorize\api\contract\v1\MerchantAuthenticationType;
use net\authorize\api\contract\v1\CreditCardType;
use net\authorize\api\controller\CreateTransactionController;
use net\authorize\api\constants\ANetEnvironment;

class PaymentController extends Controller
{
    public function createTransaction(Request $request)
    {
        
        $apiLoginId = config('authorize.api_login_id');
        $transactionKey = config('authorize.transaction_key');
        $amount = $request->input('amount');
        $isFreePackage = ($amount == 0); // Check if the package is free
        if(!$isFreePackage){
        // Prepare Credit Card Information
        $creditCard = new CreditCardType();
        $creditCard->setCardNumber($request->input('card_number'));
        $creditCard->setExpirationDate($request->input('expiry_date'));
        $creditCard->setCardCode($request->input('card_code'));

        // Create Payment Object
        $payment = new PaymentType();
        $payment->setCreditCard($creditCard);

        // Create Order Object
        $order = new OrderType();
        $order->setInvoiceNumber(rand(1, 1000));
        $order->setDescription('Sample Payment Transaction');

        // Create Transaction Request
        $transactionRequest = new TransactionRequestType();
        $transactionRequest->setTransactionType('authCaptureTransaction');
        $transactionRequest->setAmount($request->input('amount'));
        $transactionRequest->setPayment($payment);
        $transactionRequest->setOrder($order);

        // Merchant Authentication
        $merchantAuthentication = new MerchantAuthenticationType();
        $merchantAuthentication->setName($apiLoginId);
        $merchantAuthentication->setTransactionKey($transactionKey);

        // Create the Transaction Request
        $createTransactionRequest = new CreateTransactionRequest();
        $createTransactionRequest->setMerchantAuthentication($merchantAuthentication);
        $createTransactionRequest->setTransactionRequest($transactionRequest);

        // Execute the API Request
        $controller = new CreateTransactionController($createTransactionRequest);
        $response = $controller->executeWithApiResponse(ANetEnvironment::SANDBOX);
    }

                if ($isFreePackage || ($response && $response->getMessages()->getResultCode() === 'Ok')) {
                    if(!$isFreePackage){
                        $transactionResponse = $response->getTransactionResponse() ;
                        //$transactionResponse =  $transactionResponse->getTransId();
                        //$transactionResponseauth = $transactionResponse->getAuthCode();
                    }else{
                        $transactionResponse =  null;
                    $transactionResponseauth = null;
                    }
                 
                    if ($isFreePackage || ($transactionResponse && $transactionResponse->getResponseCode() == '1')) {

                        // Save order details to the database
                        $order = Order::create([
                            'user_id' => $request->user()->id,
                            'package_id' => $request->input('package_id'),
                            //'package_id' => 3,
                            'order_number' => uniqid('ORD-'),
                            'amount' => $request->input('amount'),
                            'payment_status' => 'completed',
                            'payment_method' => 'credit_card',
                            'transaction_id' => $isFreePackage ? $transactionResponse : $transactionResponse->getTransId(),
                            'auth_code' => $isFreePackage ? $transactionResponseauth : $transactionResponse->getAuthCode(),
                        ]);

                        $userField = UserField::updateOrCreate(
                            [
                                'user_id' => $request->user()->id, // Match on user_id and field_name
                            ],
                            [
                                
                                'billing_address' => $request->billing_address,
                                'billing_city' => $request->billing_city,
                                'billing_country' => $request->billing_country,
                                'billing_zip_code' => $request->billing_zip,
                            ]
                        );
                        
                                // Find the user
                        $user = User::findOrFail($request->user()->id);

                        // Update the package_id
                        $user->package_id = $request->input('package_id');
                        $user->save();
                        // Step 2: Insert into the user_packages table
                        $expiryDate = null; // Initialize expiry date

                        // Check if the package is monthly or one-time
                        if ($request->input('package_type') === 'monthly') {
                            $package_type = $request->input('package_type');
                            $expiryDate = now()->addMonth(); // Set expiry date for monthly packages
                        } else {
                            $package_type = 'one_time';
                            $expiryDate = now(); // For one-time packages, set expiry date to the current date or set as null (no expiry)
                        }

                        UserPackage::create([
                            'user_id' => $request->user()->id, // User ID from the request
                            'package_id' => $request->input('package_id'), // Package ID from the request
                            'package_type' => $package_type, // Package type, could be 'one_time' or 'monthly'
                            'expiry_date' => $expiryDate, // Set expiry date dynamically
                        ]);
                        $paymentSuccess = true;
                        $packageName = $request->input('package_name'); // Get package name
                        $paymentAmount = $request->input('amount'); // Get payment amount
                    
                        // Store the success flag and other data in the session
                        session()->flash('payment_success', $paymentSuccess);
                        session()->flash('package_name', $packageName);
                        session()->flash('payment_amount', $paymentAmount);

                        // return response()->json([
                        //     'success' => 'Transaction successful',
                        //     'transaction_id' => $transactionResponse->getTransId(),
                        //     'auth_code' => $transactionResponse->getAuthCode(),
                        //     'description' => $transactionResponse->getMessages()[0]->getDescription(),
                        // ]);
                        // You can pass these details to the view
                        return view('Models.paymentsuccess', [
                            'packageName' => $packageName,
                            'paymentAmount' => $paymentAmount,
                        ]);
                    } else {
                        // Transaction was not successful
                    // If the transaction failed, get error details
                        $errors = $transactionResponse->getErrors();

                        // Return the error message to the view
                        return view('Models.paymentfailed', [
                            'errorCode' => $errors ? $errors[0]->getErrorCode() : 'Unknown',
                            'errorMessage' => $errors ? $errors[0]->getErrorText() : 'No error message returned',
                        ]);
                    }
                } else {
                    // General failure
                    $errorMessages = $response->getMessages()->getMessage();
                    return response()->json([
                        'error' => 'Transaction failed',
                        'error_code' => $errorMessages[0]->getCode(),
                        'error_message' => $errorMessages[0]->getText(),
                    ]);
                    // Return the error message to the view
                    // return view('Models.paymentfailed', [
                    //     'errorCode' => $errorMessages[0]->getCode(),
                    //     'errorMessage' => $errorMessages[0]->getText(),
                    // ]);


        }
        
    }
}
