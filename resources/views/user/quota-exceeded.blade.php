<x-app-layout>
<!--sheikh-->
<div class="container-fluid content-inner pb-0" id="page_layout">
    <div class="row">
        <div class="border-bottom pb-3 d-flex align-items-center justify-content-between">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Upgrade Plan</li>
                </ol>
            </nav>
           
        </div>
        
        @if($quotaExceeded)
        <div class="alert alert-warning mt-4" role="alert">
            <strong>Quota exceeded!</strong> Please upgrade your plan to continue using the service.
        </div>
    @endif

        <!-- Package List Section -->
        <div class="mt-4">
            <h4>Choose Your Plan</h4>
            <div class="row">
            @foreach($packages as $package)
            <div class="col-md-4 col-sm-6 mb-4">
    <div class="card shadow-lg border-0 rounded-3 overflow-hidden h-100">
        <div class="card-header text-center bg-gradient-primary text-white py-4">
            <h5 class="card-title mb-0 fs-5 fw-bold">{{ $package->package_name }}</h5>
        </div>
        <div class="card-body">
            @php
                // Assuming quota is in KB, format it appropriately
                if (!function_exists('formatBytes')) {
                function formatBytes($kb, $precision = 2) {
                    $units = ['KB', 'MB', 'GB', 'TB', 'PB'];
                    $kb = max($kb, 0);
                    $pow = floor(log($kb) / log(1024)); 
                    $pow = min($pow, count($units) - 1);
                    $kb /= pow(1024, $pow);
                    return round($kb, $precision) . ' ' . $units[$pow];
                }
            }
                $formattedQuota = formatBytes($package->quota);
                // Check if 'services' is a string before decoding
                $services = is_string($package->services) ? json_decode($package->services, true) : $package->services;

                // Check if 'features' is a string before decoding
                $features = is_string($package->features) ? json_decode($package->features, true) : $package->features;

            @endphp

            <div class="d-flex justify-content-between mb-3">
                <p class="mb-0 text-muted"><strong>Quota:</strong> {{ $formattedQuota }}</p>
                <p class="mb-0 text-muted"><strong>Price:</strong> ${{ $package->price }} / month</p>
            </div>

            <!-- Services List -->
            @if(is_array($services) && count($services) > 0)
                <ul class="list-unstyled mb-3">
                    <li class="fw-bold text-dark">Included Services:</li>
                    @foreach($services as $service)
                        <li><i class="fas fa-check-circle text-success me-2"></i> {{ $service }}</li>
                    @endforeach
                </ul>
            @endif

            <!-- Features List -->
            @if(is_array($features) && count($features) > 0)
                <ul class="list-unstyled mb-3">
                    <li class="fw-bold text-dark">Features:</li>
                    @foreach($features as $feature)
                        <li><i class="fas fa-arrow-right text-info me-2"></i> {{ $feature }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="card-footer text-center">
            <!-- Check if the user is using the current package -->
            @if(auth()->user()->userPackages->contains('package_id', $package->id))
                <button class="btn btn-secondary btn-lg w-100" disabled>Current Plan</button>
            @else
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#upgradeModal" 
                data-package-id="{{ $package->id }}" 
                data-package-name="{{ $package->package_name }}"
                data-package-price="{{ $package->price }}" 
                class="btn btn-primary btn-lg w-100">Upgrade Now</a>
            @endif
        </div>
    </div>
</div>

@endforeach


                <!---here--->
            </div>
        </div>

    </div>
</div>

<!-- Modal for Payment -->
<div class="modal fade" id="upgradeModal" tabindex="-1" aria-labelledby="upgradeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="upgradeModalLabel">Complete Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <!-- Package Details -->
                <h4 id="packageNameDisplay" class="text-center mb-4 text-info">
                    Package: <span id="dynamicPackageName">{{ $package->package_name }}</span>
                </h4>

                <!-- Payment Form -->
                <form action="{{ route('payment.create') }}" method="POST">
                    @csrf
                    <!-- Hidden Fields -->
                    <input type="hidden" id="package_id" name="package_id" value="{{ $package->id }}">
                    <input type="hidden" id="package_name" name="package_name" value="{{ $package->package_name }}">
                    <input type="hidden" id="package_type" name="package_type" value="{{ $package->validity }}">

                    <!-- Card Details -->
                    <fieldset class="border p-3 mb-4">
                        <legend class="text-primary fw-bold px-2">Payment Details</legend>

                        <div class="mb-3">
                            <label for="card_number" class="form-label">Card Number</label>
                            <input type="text" class="form-control" id="card_number" name="card_number" placeholder="1234 5678 9012 3456" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="expiry_date" class="form-label">Expiry Date</label>
                                <input type="text" class="form-control" id="expiry_date" name="expiry_date" placeholder="MM/YY" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="card_code" class="form-label">Card Code (CVV)</label>
                                <input type="text" class="form-control" id="card_code" name="card_code" placeholder="123" required>
                            </div>
                        </div>
                    </fieldset>

                    <!-- Billing Information -->
                    <fieldset class="border p-3 mb-4">
                        <legend class="text-primary fw-bold px-2">Billing Information</legend>

                        <div class="mb-3">
                            <label for="billing_address" class="form-label">Billing Address</label>
                            <input type="text" class="form-control" id="billing_address" name="billing_address" placeholder="123 Main Street" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="billing_city" class="form-label">City</label>
                                <input type="text" class="form-control" id="billing_city" name="billing_city" placeholder="City" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="billing_zip" class="form-label">ZIP/Postal Code</label>
                                <input type="text" class="form-control" id="billing_zip" name="billing_zip" placeholder="ZIP Code" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="billing_country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="billing_country" name="billing_country" placeholder="Country" required>
                        </div>
                    </fieldset>

                    <!-- Amount -->
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount" value="{{ $package->price }}" readonly>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Pay Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('styles')
<style>
   .card {
    max-width: 350px;  /* Adjust max width of cards */
    margin: 0 auto;    /* Centers the cards if needed */
}
.modal-content {
    border-radius: 8px;
}

.modal-header {
    background-color: #f8f9fa;
}

.modal-body {
    padding: 30px;
}

.form-control {
    border-radius: 5px;
    box-shadow: none;
    border: 1px solid #ced4da;
}

.form-label {
    font-weight: bold;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}

</style>
@endsection


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const upgradeButtons = document.querySelectorAll('[data-bs-toggle="modal"]');

        upgradeButtons.forEach(button => {
            button.addEventListener('click', function () {
                const packageId = this.getAttribute('data-package-id');
                const packageName = this.getAttribute('data-package-name');
                const packagePrice = this.getAttribute('data-package-price'); // Price from data attribute

                // Update the modal with the correct package information
                document.getElementById('package_id').value = packageId;
                document.getElementById('packageNameDisplay').innerText = `Package: ${packageName}`;
                
                // Set the amount to the package price and make it readonly
                const amountField = document.getElementById('amount');
                amountField.value = packagePrice; // Set the price dynamically
                amountField.setAttribute('readonly', true); // Prevent editing
            });
        });
    });
</script>

</x-app-layout>