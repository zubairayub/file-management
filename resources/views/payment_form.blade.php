<!-- resources/views/payment_form.blade.php -->

<form action="{{ route('payment.create') }}" method="POST">
    @csrf
    <div>
        <label for="card_number">Card Number</label>
        <input type="text" id="card_number" name="card_number" required>
    </div>

    <div>
        <label for="expiry_date">Expiry Date</label>
        <input type="text" id="expiry_date" name="expiry_date" required placeholder="MM/YY">
    </div>

    <div>
        <label for="card_code">Card Code (CVV)</label>
        <input type="text" id="card_code" name="card_code" required>
    </div>

    <div>
        <label for="amount">Amount</label>
        <input type="number" id="amount" name="amount" required>
    </div>

    <button type="submit">Pay</button>
</form>
