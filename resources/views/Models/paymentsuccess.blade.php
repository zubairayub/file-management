<x-app-layout>
<style>
    /* Example of custom styling for the modal */
#paymentSuccessModal .modal-content {
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

#paymentSuccessModal .modal-header {
    background-color: #28a745;
    color: #fff;
}

#paymentSuccessModal .modal-footer .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

    </style>
   
<!-- Payment Success Modal -->
<div class="modal fade" id="paymentSuccessModal" tabindex="-1" aria-labelledby="paymentSuccessModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="paymentSuccessModalLabel">Payment Successful!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      <div class="modal-body">
        <div class="text-center">
          <i class="fas fa-check-circle fa-3x text-success"></i>
          <h4 class="mt-3">Your payment was successful!</h4>
          <p>You have successfully upgraded to the <b><span id="successPackageName"></span></b>.</p>
          <p>Your payment amount was: <b><span id="successAmount"></span></b></p>
        </div>
      </div>
      <div class="modal-footer text-center">
      <!--button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button-->
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Get Started</a>
      </div>
    </div>
  </div>
</div>

<script>
 document.addEventListener('DOMContentLoaded', function () {
                const success = {{ session('payment_success') ? 'true' : 'false' }}; // Check if success is true

                if (success) {
                    // Get payment details from session
                    const packageName = '{{ session('package_name') }}';
                    const amount = '{{ session('payment_amount') }}';

                    // Populate the success modal with details
                    document.getElementById('successPackageName').innerText = packageName;
                    document.getElementById('successAmount').innerText = `$${amount}`;

                    // Show the success modal
                    var myModal = new bootstrap.Modal(document.getElementById('paymentSuccessModal'), {});
                    myModal.show();
                }
            });

    </script>
    </x-app-layout>
