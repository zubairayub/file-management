<x-app-layout>


<div class="container-fluid content-inner pb-0" id="page_layout">
    <div class="row">
        <div class="col-lg-12">
            <!-- Page Title -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="page-header-title">Create Package</h1>
                <a href="{{ route('packages.index') }}" class="btn btn-secondary">Back to Packages</a>
            </div>

            <!-- Create Package Form -->
            <div class="card">
    <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('packages.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="package_name" class="form-label">Package Name</label>
        <input type="text" name="package_name" id="package_name" class="form-control" value="{{ old('package_name') }}" required>
        @error('package_name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="quota" class="form-label">Quota (in KB)</label>
        <input type="number" name="quota" id="quota" class="form-control" value="{{ old('quota') }}" placeholder="Enter quota in KB" required>
        <small class="form-text text-muted">
            Enter the quota in KB. If entered in MB or GB, it will be converted to KB (1 MB = 1024 KB, 1 GB = 1024 * 1024 KB).
        </small>
        @error('quota')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
        @error('price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Services Checkboxes -->
    <div class="mb-3">
        <label class="form-label">Services</label><br>
        <div class="form-check">
            <input type="checkbox" name="services[]" value="Bookkeeping" class="form-check-input" id="bookkeeping">
            <label class="form-check-label" for="bookkeeping">Bookkeeping</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="services[]" value="Taxes" class="form-check-input" id="taxes">
            <label class="form-check-label" for="taxes">Taxes</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="services[]" value="Payroll" class="form-check-input" id="payroll">
            <label class="form-check-label" for="payroll">Payroll</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="services[]" value="Business Formation" class="form-check-input" id="business_formation">
            <label class="form-check-label" for="business_formation">Business Formation</label>
        </div>
        @error('services')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Features Text Area -->
    <div class="mb-3">
        <label for="features" class="form-label">List of Features</label>
        <textarea name="features" id="features" class="form-control" rows="5" placeholder="Enter each feature on a new line" required>{{ old('features') }}</textarea>
        <small class="form-text text-muted">Add each feature on a new line.</small>
        @error('features')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Description Text Area -->
    <div class="mb-3">
        <label for="desc" class="form-label">Description</label>
        <textarea name="desc" id="desc" class="form-control" rows="4" placeholder="Provide a brief description of the package">{{ old('desc') }}</textarea>
        @error('desc')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Validity Select -->
    <div class="mb-3">
        <label for="validity" class="form-label">Validity</label>
        <select name="validity" id="validity" class="form-select" required>
            <option value="one-time" {{ old('validity') == 'one-time' ? 'selected' : '' }}>One-Time</option>
            <option value="monthly" {{ old('validity') == 'monthly' ? 'selected' : '' }}>Monthly</option>
        </select>
        <small class="form-text text-muted">Choose the validity period of the package.</small>
        @error('validity')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Create Package</button>
    </div>
   
</form>


    </div>
</div>

        </div>
    </div>
</div>


<script>
    // Initialize Bootstrap tooltips
document.addEventListener('DOMContentLoaded', function () {
    var tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    var tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
});
</script>
</x-app-layout>
