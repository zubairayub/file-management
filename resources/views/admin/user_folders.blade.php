<x-app-layout>
    <div class="container mt-4">
        <h3 class="mb-4">Folders for {{ $user->name }}</h3>
        
        <!-- List of Folders -->
<div class="row">
    @foreach($folders as $folder)
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ route('admin.showUserFolders', ['userId' => $user->id, 'folderId' => $folder->id]) }}" class="text-decoration-none text-dark">
                            <i class="bi bi-folder"></i> {{ $folder->name }}
                        </a>
                    </h5>

                    <!-- Display total subfolders and files count -->
                    <p class="text-muted">
                        Total Subfolders: {{ $folder->subfolders()->count() }} | Total Files: {{ $folder->files()->count() }}
                    </p>
                    
                    <!-- Create Subfolder Form -->
                    <form action="{{ route('admin.createSubFolderForUser', ['userId' => $user->id, 'parentFolderId' => $folder->id]) }}" method="POST" class="mt-3">
                        @csrf
                        <div class="mb-3">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Subfolder Name" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Create Folder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>

    </div>
</x-app-layout>
