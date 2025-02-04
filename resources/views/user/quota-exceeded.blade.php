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
            <h4>Affordable pricing tailored to your needs</h4>
            <p>Choose the package that best suits your business or personal tax requirements, and get started with expert assistance today.</p>
            <div class="row mt-4">
            @foreach($packages as $package)
            <div class="col-md-4  col-sm-6 mb-4" >
                <div class="pricebox card text-center shadow-lg rounded-3">  
                <div class="price-header">
                <h5 class="packagename text-bold ">{{ $package->package_name }}</h5>
                    <small class="text-bold text-dark">As low as</small>
                    <h2 class="display-3 packageprice"><small>$</small>{{ $package->price }}</h2>
                    </div>
                    <div class="price-body text-center">
                    <div class="pricedata">
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
            <!-- Services List -->
            @if(is_array($services) && count($services) > 0)
                <ul class="list-unstyled mb-3 services">
                    @foreach($services as $service)
                        <li>{{ $service }}, </li>
                    @endforeach
                </ul>
            @endif

            <!-- Features List -->
            @if(is_array($features) && count($features) > 0)
                <ul class="list-unstyled mb-3 features">
                    <li><p class="mb-0 text-dark"><strong>E-Filing:</strong> {{ $formattedQuota }}</p></li>
                    <li class="fw-bold text-dark">Included Services:</li>
                    @foreach($features as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach
                </ul>
            @endif
                    </div>
        
                </div>
                <div class="text-center">
            <!-- Check if the user is using the current package -->
            <!-- @if(auth()->user()->userPackages->contains('package_id', $package->id))
                <button class="btn btn-secondary btn-lg w-100" disabled>Current Plan</button>
            @else
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#upgradeModal" 
                data-package-id="{{ $package->id }}" 
                data-package-name="{{ $package->package_name }}"
                data-package-price="{{ $package->price }}" 
                class="btn btn-primary btn-lg w-100">Buy Now!</a>
            @endif -->
            @if(auth()->user()->userPackages->contains('package_id', $package->id))
    <button class="btn btn-secondary btn-lg w-100" disabled>Current Plan</button>
@else
    @if($package->price == 0)
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#freePackageModal" 
           data-package-id="{{ $package->id }}" 
           data-package-name="{{ $package->package_name }}"
           class="btn btn-success btn-lg w-100">Get for Free</a>
    @else
        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#upgradeModal" 
           data-package-id="{{ $package->id }}" 
           data-package-name="{{ $package->package_name }}"
           data-package-price="{{ $package->price }}" 
           class="btn btn-primary btn-lg w-100">Buy Now!</a>
    @endif
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

<div class="modal fade formarea" id="upgradeModal" tabindex="-1" aria-labelledby="upgradeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-body">
            <div class="d-flex align-items-start justify-content-start">

            <div class="col-md-5 cardside">
              <small>You'll Pay</small>
            <h4  class="payamount" id="amount2" name="amount2"></h4>
            <p><small>Pay with Credit/Debit Card Fee "3.5% plus 10c" (a non-refundable portal processing fee applies)</small></p>
            <div class="d-table bg-white p-3 text-center secureimg">
                    <img src="https://promptfilings.com/wp-content/uploads/2024/04/secure.png" width="80%" alt="secure">
                    </div>
          </div>
                <div class="formareacontent col-md-7">
                    <form action="{{ route('payment.create') }}" method="POST" class="d-flex align-items-center justify-content-between flex-wrap">  
                    <div class="packgename" id="packageNameDisplay">Service: </div>
                    @csrf
                    <!-- Hidden Field for Package ID -->
                    <input type="hidden" id="package_id" name="package_id" value="9">
                    <input type="hidden" id="package_name" name="package_name" value="BOI Reporting">
                    <input type="hidden" id="package_type" name="package_type" value="one-time">
                    <div class="mb-3 col-md-12">
                        <label for="card_name" class="form-label">Card Holder Name</label>
                        <input type="text" class="form-control" id="card_name" name="card_name" required>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="card_number" class="form-label">Card Number</label>
                        <input type="text" class="form-control" id="card_number" name="card_number" required maxlength="16">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="expiry_date" class="form-label">Expiry Date</label>
                        <input type="text" class="form-control" id="expiry_date" name="expiry_date" required placeholder="MM/YY">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="card_code" class="form-label">Card Code (CVV)</label>
                        <input type="password" class="form-control" id="card_code" name="card_code" required maxlength="3">
                    </div>
                    <hr>
                    <div class="mb-3 col-md-12">
                        <label for="card_address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="card_address" name="card_address" required>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="card_city" class="form-label">City</label>
                        <input type="text" class="form-control" id="card_city" name="card_city" required>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="card_state" class="form-label">State</label>
                        <input type="text" class="form-control" id="card_state" name="card_state" required>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="card_zipcode" class="form-label">Zipcode</label>
                        <input type="text" class="form-control" id="card_zipcode" name="card_zipcode" required>
                    </div>

                    <div class="mb-3" style="display:none">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount" value="{{ $package->price }}" readonly>
                    </div>
                    <div class="col-md-12">
                <button type="submit" class="btn btn-primary w-100">Pay Now!</button>
                </div>
                </form>
                
                </div> 
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade formarea" id="freePackageModal" tabindex="-1" aria-labelledby="upgradeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-body">
            <div class="d-flex align-items-start justify-content-start">

            <div class="col-md-5 cardside">
              <small>You'll Pay</small>
            <h4  class="payamount" id="amount2" name="amount2"></h4>
            <p><small>Pay with Credit/Debit Card Fee "3.5% plus 10c" (a non-refundable portal processing fee applies)</small></p>
            <div class="d-table bg-white p-3 text-center secureimg">
                    <img src="https://promptfilings.com/wp-content/uploads/2024/04/secure.png" width="80%" alt="secure">
                    </div>
          </div>
                <div class="formareacontent col-md-7">
                    <form action="{{ route('payment.create') }}" method="POST" class="d-flex align-items-center justify-content-between flex-wrap">  
                    <div class="packgename" id="packageNameDisplay">Service: </div>
                    @csrf
                    <!-- Hidden Field for Package ID -->
                    <input type="hidden" id="package_id" name="package_id" value="1">
                    <input type="hidden" id="package_name" name="package_name" value="BOI Reporting">
                    <input type="hidden" id="package_type" name="package_type" value="one-time">
                    <!-- <div class="mb-3 col-md-12">
                        <label for="card_name" class="form-label">Card Holder Name</label>
                        <input type="text" class="form-control" id="card_name" name="card_name" required>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="card_number" class="form-label">Card Number</label>
                        <input type="text" class="form-control" id="card_number" name="card_number" required maxlength="16">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="expiry_date" class="form-label">Expiry Date</label>
                        <input type="text" class="form-control" id="expiry_date" name="expiry_date" required placeholder="MM/YY">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="card_code" class="form-label">Card Code (CVV)</label>
                        <input type="password" class="form-control" id="card_code" name="card_code" required maxlength="3">
                    </div> -->
                    <hr>
                    <div class="mb-3 col-md-12">
                        <label for="card_address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="card_address" name="card_address" required>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="card_city" class="form-label">City</label>
                        <input type="text" class="form-control" id="card_city" name="card_city" required>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="card_state" class="form-label">State</label>
                        <input type="text" class="form-control" id="card_state" name="card_state" required>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="card_zipcode" class="form-label">Zipcode</label>
                        <input type="text" class="form-control" id="card_zipcode" name="card_zipcode" required>
                    </div>

                    <div class="mb-3" style="display:none">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount" value="0" readonly>
                    </div>
                    <div class="col-md-12">
                <button type="submit" class="btn btn-primary w-100">Pay Now!</button>
                </div>
                </form>
                </div> 
                </div>
                </div>
            </div>
        </div>
    </div>

@section('styles')
<style>
    

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
                 const amountField2 = document.getElementById('amount2');
                const amountField = document.getElementById('amount');
                amountField2.textContent = "$" + packagePrice; // Set the price dynamically
                amountField.value = packagePrice; // Set the price dynamically
                amountField.setAttribute('readonly', true); // Prevent editing

//amountField.setAttribute('readonly', true); // Prevent editing
            });
        });
    });
    document.querySelectorAll("li").forEach(li => {
    if (li.textContent.trim() === "space") {
        li.classList.add("space-item");
    }
});


document.getElementById('expiry_date').addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, ''); // Remove non-numeric characters
    if (value.length > 2) {
        value = value.substring(0, 2) + '/' + value.substring(2, 4);
    }
    e.target.value = value;
});
</script>

</x-app-layout>
