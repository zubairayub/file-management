<x-app-layout>


<div class="container-fluid content-inner pb-0" id="page_layout">
    <div class="row">
        <div class="col-lg-12">
            <!-- Page Title -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="page-header-title">Packages</h1>
                <a href="{{ route('packages.create') }}" class="btn btn-primary">Create Package</a>
            </div>

            <!-- Table for displaying packages -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Package Name</th>
                            <th>Quota</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($packages as $package)
                            <tr>
                                <td>{{ $package->id }}</td>
                                <td>{{ $package->package_name }}</td>
                                @php
                                    $quota = $package->quota; // assuming the quota is in KB
                                    if ($quota < 1024) {
                                        $quotaDisplay = $quota . ' KB';
                                    } elseif ($quota < 1048576) {
                                        $quotaDisplay = round($quota / 1024, 2) . ' MB';
                                    } elseif ($quota < 1073741824) {
                                        $quotaDisplay = round($quota / 1048576, 2) . ' GB';
                                    } else {
                                        $quotaDisplay = round($quota / 1073741824, 2) . ' TB';
                                    }
                                @endphp

                                <td>{{ $quotaDisplay }}</td>

                                <td>{{ $package->price }}</td>
                                <td>
                                    <!-- Edit Button -->
                                    <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



</x-app-layout>
