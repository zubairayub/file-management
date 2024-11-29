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
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $package->package_name }}</h5>
                                @php
                                if (!function_exists('formatBytes')) {
                                    function formatBytes($kb, $precision = 2) {
                                    // Define the units starting from KB
                                    $units = ['KB', 'MB', 'GB', 'TB', 'PB'];
                                    
                                    // Make sure the value is not less than 0
                                    $kb = max($kb, 0);

                                    // Calculate the power (which determines the unit to use)
                                    $pow = floor(log($kb) / log(1024));  // log base 1024

                                    // Ensure the unit does not exceed the array length
                                    $pow = min($pow, count($units) - 1);

                                    // Convert the value to the appropriate unit
                                    $kb /= pow(1024, $pow);

                                    // Return the formatted value with the selected precision
                                    return round($kb, $precision) . ' ' . $units[$pow];
                                }
                                }
                                    // Assuming $package->quota is in bytes
                                    $formattedQuota = formatBytes($package->quota);
                                @endphp

                                <p class="card-text">Quota: {{ $formattedQuota }}</p>

                                <p class="card-text">Price: ${{ $package->price }} / month</p>
                                 <!-- Check if the user is using the current package -->
                                @if(auth()->user()->package_id == $package->id)
                                    <!-- If the user is already using this package -->
                                    <button class="btn btn-secondary" disabled>Current Plan</button>
                                @else
                                    <!-- If the user is not using this package -->
                                    <a href="{{  $package->id }}" class="btn btn-primary">Upgrade Now</a>
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



@section('styles')
<style>
   .card {
    max-width: 350px;  /* Adjust max width of cards */
    margin: 0 auto;    /* Centers the cards if needed */
}
</style>
@endsection

</x-app-layout>