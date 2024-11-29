<x-app-layout>
<!-- Error Modal -->
<div class="modal fade" id="paymentErrorModal" tabindex="-1" aria-labelledby="paymentErrorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="paymentErrorModalLabel">Payment Failed!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <i class="fas fa-times-circle fa-3x text-danger"></i>
          <h4 class="mt-3">Your payment could not be processed.</h4>
          <p><strong>Error Code:</strong> <span id="errorCode"></span></p>
          <p><strong>Error Message:</strong> <span id="errorMessage"></span></p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <a href="{{ route('quota.exceeded')  }}" class="btn btn-warning">Try Again</a>
      </div>
    </div>
  </div>
</div>

@if(isset($errorCode) && isset($errorMessage))
    <script>
       document.addEventListener("DOMContentLoaded", function() {
    // Check if errorCode and errorMessage are set
    @if(isset($errorCode) && isset($errorMessage))
        // Ensure Bootstrap Modal is correctly initialized
        var myModal = new bootstrap.Modal(document.getElementById('paymentErrorModal'), {
            keyboard: false
        });
        myModal.show();
    @endif
});
    </script>
@endif

</x-app-layout>
