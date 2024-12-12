<x-app-layout>
    <div class="container mt-4">
        <h3 class="mb-4">Subfolders for {{ $folder->name }}</h3>

        <!-- Display Subfolders for the selected Folder -->
        <div class="row">
    @foreach($subfolders as $subfolder)
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ route('admin.showUserFolders', ['userId' => $user->id, 'folderId' => $folder->id, 'subfolderId' => $subfolder->id]) }}" class="text-decoration-none text-dark">
                            <i class="bi bi-folder"></i> {{ $subfolder->name }}
                        </a>
                    </h5>

                    <!-- Display total sub-subfolders and files count -->
                    <p class="text-muted">
                        Total Sub-Subfolders: {{ $subfolder->subfolders()->count() }} | Total Files: {{ $subfolder->files()->count() }}
                    </p>

                    <!-- Sub-Subfolder Creation Form -->
                    <form action="{{ route('admin.createSubFolderForUser', ['userId' => $user->id, 'parentFolderId' => $subfolder->id]) }}" method="POST" class="mt-3">
                        @csrf
                        <div class="mb-3">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Sub-Subfolder Name" required>
                        </div>

                        <div class="mb-3 form-check" hidden>
                            <input type="checkbox" id="is_subfolder" name="is_subfolder" class="form-check-input" checked>
                            <label class="form-check-label" for="is_subfolder">Check if this is a subfolder</label>
                        </div>
                        
                        <div class="form-check mb-3" hidden>
                            <input type="checkbox" id="by_id" name="by_id" value="1" class="form-check-input" checked>
                            <label for="by_id" class="form-check-label">By ID</label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Create Sub-Subfolder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>


        <!-- Create a New Subfolder under the Current Folder -->
        <div class="mt-4">
            <h5>Create a New Subfolder</h5>
            <form action="{{ route('admin.createSubFolderForUser', ['userId' => $user->id, 'parentFolderId' => $folder->id]) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Subfolder Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Create Subfolder</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
