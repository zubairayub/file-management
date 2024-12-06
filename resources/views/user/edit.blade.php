<x-app-layout>



<style>
    .custom-control.custom-radio {
    margin-right: 20px;  /* Adjust the spacing as needed */
}

    </style>



    <div class="container">
        <h1>Edit User</h1>

        <form action="{{ route('users.update', $user->id) }}" method="POST" class="p-4 bg-white rounded shadow-sm">
    @csrf
    @method('PUT')

    <h2 class="mb-4 text-center font-weight-bold">Edit User Details</h2>

    <!-- Name Field -->
    <div class="form-group">
        <label for="name" class="font-weight-bold">Full Name <span class="text-danger">*</span></label>
        <input type="text" 
               class="form-control rounded-pill px-3" 
               id="name" 
               name="name" 
               value="{{ old('name', $user->name) }}" 
               placeholder="Enter full name"
               required>
    </div>

    <!-- Email Field -->
    <div class="form-group">
        <label for="email" class="font-weight-bold">Email Address <span class="text-danger">*</span></label>
        <input type="email" 
               class="form-control rounded-pill px-3" 
               id="email" 
               name="email" 
               value="{{ old('email', $user->email) }}" 
               placeholder="Enter email address"
               required>
    </div>

    <!-- Packages -->
    <div class="form-group">
        <label class="font-weight-bold">Select Packages</label>
        <div class="form-check">
            @foreach($allPackages as $package)
                <div class="custom-control custom-checkbox my-2">
                    <input type="checkbox" 
                           class="custom-control-input" 
                           id="package_{{ $package->id }}" 
                           name="packages[]" 
                           value="{{ $package->id }}"
                           {{ in_array($package->id, old('packages', $user->userPackages->pluck('package_id')->toArray())) ? 'checked' : '' }}>
                    <label class="custom-control-label" for="package_{{ $package->id }}">
                        {{ $package->package_name }}
                    </label>
                </div>
            @endforeach
        </div>
        <small class="form-text text-muted">Select one or more packages for the user.</small>
    </div>

    <!-- Role Field as Radio Buttons -->
    <div class="form-group">
        <label class="font-weight-bold">User Role <span class="text-danger">*</span></label>
        <div class="d-flex justify-content-start my-2">
            <div class="custom-control custom-radio mr-4">
                <input type="radio" 
                       class="custom-control-input" 
                       id="role_admin" 
                       name="role" 
                       value="admin" 
                       {{ old('role', $user->role) == 'admin' ? 'checked' : '' }}>
                <label class="custom-control-label" for="role_admin">Admin</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" 
                       class="custom-control-input" 
                       id="role_user" 
                       name="role" 
                       value="customer" 
                       {{ old('role', $user->role) == 'customer' ? 'checked' : '' }}>
                <label class="custom-control-label" for="role_user">User</label>
            </div>
        </div>
    </div>

     <!-- Status Field as Radio Buttons -->
     <div class="form-group">
        <label class="font-weight-bold">User Status <span class="text-danger">*</span></label>
        <div class="d-flex justify-content-start my-2">
            <div class="custom-control custom-radio mr-4">
                <input type="radio" 
                       class="custom-control-input" 
                       id="status_active" 
                       name="status" 
                       value="active" 
                       {{ $user->status == 'active' ? 'checked' : '' }}>
                <label class="custom-control-label" for="status_active">Active</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" 
                       class="custom-control-input" 
                       id="status_inactive" 
                       name="status" 
                       value="inactive" 
                       {{ $user->status == 'inactive' ? 'checked' : '' }}>
                <label class="custom-control-label" for="status_inactive">Inactive</label>
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="text-center">
        <button type="submit" class="btn btn-primary btn-block rounded-pill px-4 py-2">
            Update User
        </button>
    </div>
</form>

    </div>

   
</x-app-layout>
