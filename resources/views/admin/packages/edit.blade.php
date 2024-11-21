<x-app-layout>


<div class="container-fluid content-inner pb-0" id="page_layout">
    <div class="row">
        <div class="col-lg-12">
            <!-- Page Title -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="page-header-title">Edit Package</h1>
                <a href="{{ route('packages.index') }}" class="btn btn-secondary">Back to Packages</a>
            </div>

            <!-- Edit Package Form -->
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('packages.update', $package->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="package_name" class="form-label">Package Name</label>
                            <input type="text" name="package_name" id="package_name" class="form-control" value="{{ old('package_name', $package->package_name) }}" required>
                            @error('package_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="quota" class="form-label">Quota</label>
                            <input type="number" name="quota" id="quota" class="form-control" value="{{ old('quota', $package->quota) }}" required 
                                data-bs-toggle="tooltip" data-bs-placement="top" 
                                title="Enter the quota in KB. The system will automatically convert if entered in MB or GB (1 MB = 1024 KB, 1 GB = 1024 * 1024 KB).">
                            <small class="form-text text-muted">Enter the quota in KB. If you want to enter in MB or GB, the system will convert it to KB automatically (1 MB = 1024 KB, 1 GB = 1024 * 1024 KB).</small>
                            @error('quota')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $package->price) }}" required>
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update Package</button>
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
