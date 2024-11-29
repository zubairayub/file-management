<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use net\authorize\api\contract\v1\TransactionRequestType;
use net\authorize\api\contract\v1\OrderType;
use net\authorize\api\contract\v1\PaymentType;
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

        $creditCard = new CreditCardType();
        $creditCard->setCardNumber($request->input('card_number'));
        $creditCard->setExpirationDate($request->input('expiry_date'));
        $creditCard->setCardCode($request->input('card_code'));

        $payment = new PaymentType();
        $payment->setCreditCard($creditCard);

        $order = new OrderType();
        $order->setInvoiceNumber(rand(1, 1000));
        $order->setDescription('Sample Payment Transaction');

        $transactionRequest = new TransactionRequestType();
        $transactionRequest->setTransactionType('authCaptureTransaction');
        $transactionRequest->setAmount($request->input('amount'));
        $transactionRequest->setPayment($payment);
        $transactionRequest->setOrder($order);

        $merchantAuthentication = new MerchantAuthenticationType();
        $merchantAuthentication->setName($apiLoginId);
        $merchantAuthentication->setTransactionKey($transactionKey);

        $createTransactionRequest = new CreateTransactionRequest();
        $createTransactionRequest->setMerchantAuthentication($merchantAuthentication);
        $createTransactionRequest->setTransactionRequest($transactionRequest);

        $controller = new CreateTransactionController($createTransactionRequest);
        $response = $controller->executeWithApiResponse(ANetEnvironment::SANDBOX);

        if ($response && $response->getMessages()->getResultCode() === 'Ok') {
            $transactionResponse = $response->getTransactionResponse();
            if ($transactionResponse && $transactionResponse->getResponseCode() == '1') {

                 // Save order details to the database
                 $order = Order::create([
                    'user_id' => $request->user()->id,
                    //'package_id' => $request->input('package_id'),
                    'package_id' => 3,
                    'order_number' => uniqid('ORD-'),
                    'amount' => $request->input('amount'),
                    'payment_status' => 'completed',
                    'payment_method' => 'credit_card',
                    'transaction_id' => $transactionResponse->getTransId(),
                    'auth_code' => $transactionResponse->getAuthCode(),
                ]);

                return response()->json([
                    'success' => 'Transaction successful',
                    'transaction_id' => $transactionResponse->getTransId(),
                    'auth_code' => $transactionResponse->getAuthCode(),
                    'description' => $transactionResponse->getMessages()[0]->getDescription(),
                ]);
            } else {
                // Transaction was not successful
                $errors = $transactionResponse->getErrors();
                return response()->json([
                    'error' => 'Transaction declined',
                    'response_code' => $transactionResponse->getResponseCode(),
                    'error_code' => $errors ? $errors[0]->getErrorCode() : 'Unknown',
                    'error_message' => $errors ? $errors[0]->getErrorText() : 'No error message returned',
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
        }
        
    }
}
