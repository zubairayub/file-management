
<div class="container py-5">
    <h2 class="text-center mb-4">Payment Information</h2>
    <form action="{{ route('payment.create') }}" method="POST" class="mx-auto" style="max-width: 600px;">
        @csrf
        
        <!-- Payment Details Section -->
        <fieldset class="border p-4 mb-4">
            <legend class="text-primary fw-bold px-2">Payment Details</legend>

            <div class="mb-3">
                <label for="card_number" class="form-label">Card Number</label>
                <input type="text" id="card_number" name="card_number" class="form-control" required placeholder="1234 5678 9012 3456">
            </div>

            <div class="mb-3 row">
                <div class="col">
                    <label for="expiry_date" class="form-label">Expiry Date</label>
                    <input type="text" id="expiry_date" name="expiry_date" class="form-control" required placeholder="MM/YY">
                </div>
                <div class="col">
                    <label for="card_code" class="form-label">Card Code (CVV)</label>
                    <input type="text" id="card_code" name="card_code" class="form-control" required placeholder="123">
                </div>
            </div>

            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" id="amount" name="amount" class="form-control" required placeholder="Enter amount">
            </div>
        </fieldset>
 

        <!-- Shipping Information Section -->
        <fieldset class="border p-4 mb-4">
            <legend class="text-primary fw-bold px-2">Shipping Information</legend>

            <div class="mb-3">
                <label for="shipping_address" class="form-label">Address</label>
                <input type="text" id="shipping_address" name="shipping_address" class="form-control" required placeholder="123 Main Street">
            </div>

            <div class="mb-3 row">
                <div class="col">
                    <label for="shipping_city" class="form-label">City</label>
                    <input type="text" id="shipping_city" name="shipping_city" class="form-control" required placeholder="City">
                </div>
                <div class="col">
                    <label for="shipping_zip" class="form-label">ZIP/Postal Code</label>
                    <input type="text" id="shipping_zip" name="shipping_zip" class="form-control" required placeholder="ZIP Code">
                </div>
            </div>

            <div class="mb-3">
                <label for="shipping_country" class="form-label">Country</label>
                <input type="text" id="shipping_country" name="shipping_country" class="form-control" required placeholder="Country">
            </div>
        </fieldset>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Pay Now</button>
        </div>
    </form>
</div>

