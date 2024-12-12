<x-app-layout>
    <div class="container mt-4">
        <!-- Title -->
        <h3 class="mb-4">Files and Subfolders for {{ $subfolder->name }}</h3>

        <!-- Files Section -->
        <div class="row mb-4">
            <div class="col-12">
                <h5 class="fw-bold">Files:</h5>
                @if($files->isEmpty())
                    <p class="text-muted">No files found in this folder.</p>
                @else
                    <ul class="list-group">
                        @foreach($files as $file)
                            <li class="list-group-item">
                                <i class="bi bi-file-earmark"></i> {{ $file->name }}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>

        <!-- Sub-Subfolders Section -->
        <div class="row">
            @if($subfolders->isEmpty())
                <div class="col-12">
                    <p class="text-muted">No subfolders found.</p>
                </div>
            @else
            @foreach($subfolders as $nestedSubfolder)
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <!-- Subfolder Name -->
                <h5 class="card-title">
                    <a href="{{ route('admin.showUserFolders', ['userId' => $user->id, 'folderId' => $folder->id, 'subfolderId' => $nestedSubfolder->id, 'subSubfolderId' => $nestedSubfolder->id]) }}" class="text-decoration-none text-dark">
                        <i class="bi bi-folder"></i> {{ $nestedSubfolder->name }}
                    </a>
                </h5>

                <!-- Display total sub-subfolders and files count -->
                <p class="text-muted">
                    Total Sub-Subfolders: {{ $nestedSubfolder->subfolders()->count() }} | Total Files: {{ $nestedSubfolder->files()->count() }}
                </p>

                <!-- Sub-Subfolder Creation Form -->
                <form action="{{ route('admin.createSubFolderForUser', ['userId' => $user->id, 'parentFolderId' => $nestedSubfolder->id]) }}" method="POST" class="mt-3">
                    @csrf
                    <div class="mb-3">
                        <label for="name_{{ $nestedSubfolder->id }}" class="form-label">Sub-Subfolder Name:</label>
                        <input type="text" id="name_{{ $nestedSubfolder->id }}" name="name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="mb-3 form-check" hidden>
                        <input type="checkbox" id="is_subfolder_{{ $nestedSubfolder->id }}" name="is_subfolder" class="form-check-input" checked>
                        <label for="is_subfolder_{{ $nestedSubfolder->id }}" class="form-check-label">Check if this is a subfolder</label>
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

            @endif
        </div>

        <!-- Create a New Subfolder under the Current Folder -->
        <div class="mt-4">
            <h5>Create a New Subfolder</h5>
            <form action="{{ route('admin.createSubFolderForUser', ['userId' => $user->id, 'parentFolderId' => $subfolder->id]) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Subfolder Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3 form-check" hidden>
                                        <input type="checkbox" id="" name="is_subfolder" class="form-check-input" checked>
                                        <label for="" class="form-check-label">Check if this is a subfolder</label>
                                    </div>
                <div class="form-check mb-3" hidden>
                                    <input type="checkbox" id="by_id" name="by_id" value="1" class="form-check-input" checked>
                                    <label for="by_id" class="form-check-label">By ID</label>
                                    </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Create Subfolder</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
