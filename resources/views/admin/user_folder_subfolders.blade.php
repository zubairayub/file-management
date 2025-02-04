<x-app-layout>
    <div class="container mt-4">
        <h3 class="mb-4">Folder for {{ $folder->name }}</h3>
        @php
        $current_folder_id = $folder->id;
        @endphp

        <!-- Display Subfolders for the selected Folder -->
        <div class="row">
    @foreach($subfolders as $subfolder)
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <!-- <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ route('admin.showUserFolders', ['userId' => $user->id, 'folderId' => $folder->id, 'subfolderId' => $subfolder->id]) }}" class="text-decoration-none text-dark">
                            <i class="bi bi-folder"></i> {{ $subfolder->name }}
                        </a>
                    </h5>

                    <!-- Display total sub-subfolders and files count -->
                    <!-- <p class="text-muted">
                        Total Sub-Subfolders: {{ $subfolder->subfolders()->count() }} | Total Files: {{ $subfolder->files()->count() }}
                    </p>

                    <!-- Sub-Subfolder Creation Form -->
                    <!-- <form action="{{ route('admin.createSubFolderForUser', ['userId' => $user->id, 'parentFolderId' => $subfolder->id]) }}" method="POST" class="mt-3">
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
                    </form> -->     
                <!-- </div>  -->

<div class="card-body">
    <h5 class="card-title">
        <a href="{{ route('admin.showUserFolders', ['userId' => $user->id, 'folderId' => $folder->id, 'subfolderId' => $subfolder->id]) }}" class="text-decoration-none text-dark">
            <i class="bi bi-folder"></i> {{ $subfolder->name }}
        </a>
    </h5>

    <!-- Display total sub-subfolders and files count -->
    <p class="text-muted">
        Total Folders: {{ $subfolder->subfolders()->count() }} | Total Files: {{ $subfolder->files()->count() }}
    </p>

    <!-- Sub-Subfolder Creation Form -->
    <form action="{{ route('admin.createSubFolderForUser', ['userId' => $user->id, 'parentFolderId' => $subfolder->id]) }}" method="POST" class="mt-3">
        @csrf
        <!-- <div class="mb-3">
            <input type="text" id="name" name="name" class="form-control" placeholder="Sub-Subfolder Name" required>
        </div> -->

        <div class="mb-3 form-check" hidden>
            <input type="checkbox" id="is_subfolder" name="is_subfolder" class="form-check-input" checked>
            <label class="form-check-label" for="is_subfolder">Check if this is a subfolder</label>
        </div>

        <div class="form-check mb-3" hidden>
            <input type="checkbox" id="by_id" name="by_id" value="1" class="form-check-input" checked>
            <label for="by_id" class="form-check-label">By ID</label>
        </div>

        <!-- <div class="d-grid">
            <button type="submit" class="btn btn-primary">Create folder</button>
        </div> -->
    </form>
    <div class="mt-4">
    <button class="btn btn-primary ms-1" data-bs-toggle="modal" data-bs-target="#uploadModal" type="button" 
        data-folder-id="{{ isset($subfolder) ? $subfolder->id : $folder->id }}">
        <span class="d-flex justify-content-center">
        <svg class="icon-22" width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z" fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07996 6.6499V6.6599C7.64896 6.6599 7.29996 7.0099 7.29996 7.4399C7.29996 7.8699 7.64896 8.2199 8.07996 8.2199H11.069C11.5 8.2199 11.85 7.8699 11.85 7.4289C11.85 6.9999 11.5 6.6499 11.069 6.6499H8.07996ZM15.92 12.7399H8.07996C7.64896 12.7399 7.29996 12.3899 7.29996 11.9599C7.29996 11.5299 7.64896 11.1789 8.07996 11.1789H15.92C16.35 11.1789 16.7 11.5299 16.7 11.9599C16.7 12.3899 16.35 12.7399 15.92 12.7399ZM15.92 17.3099H8.07996C7.77996 17.3499 7.48996 17.1999 7.32996 16.9499C7.16996 16.6899 7.16996 16.3599 7.32996 16.1099C7.48996 15.8499 7.77996 15.7099 8.07996 15.7399H15.92C16.319 15.7799 16.62 16.1199 16.62 16.5299C16.62 16.9289 16.319 17.2699 15.92 17.3099Z" fill="currentColor"></path>
        </svg>
        <span class="ms-3 mb-0">Upload Files</span>
        </span>
    </button>
</div>
   
</div>

            </div>
        </div>
    @endforeach
</div>

    <!-- Modal -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Upload File</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Upload Form -->
                    <form method="POST" action="{{ route('file-manager.upload-file') }}" enctype="multipart/form-data" id="uploadForm">
                        @csrf
                        <div class="mb-3">
                            <label for="file" class="form-label">Choose File</label>
                            <input type="file" name="file" id="file" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{ $subfolder->user->id ?? $folder->user->id }}">
                        </div>

                        <div class="mb-3">
                            <label for="folder_id" class="form-label">Select Folder</label>
                            <select name="subfolder_id" id="folder_id" class="form-select" required>
                                                    <option value="">Select Folder</option>
                                                    
                                                

                            @php
                                // Ensure $subfolders and $nestedSubfolders are always set as collections
                                $subfolders = isset($subfolders) ? $subfolders : collect();
                                $nestedSubfolders = isset($nestedSubfolders) ? $nestedSubfolders : collect();
                                // Merge both collections (subfolders and nestedSubfolders) into one collection
                                $mergedFolders = $subfolders->merge($nestedSubfolders);
                            @endphp

                            @if(!empty($mergedFolders) && is_iterable($mergedFolders) && count($mergedFolders) > 0)
                                @foreach($mergedFolders as $folder)
                                    <option value="{{ $folder->id }}">{{ $folder->name }}</option>
                                @endforeach
                            @else
                                
                                @if(isset($subfolder) && $subfolder->id)
                                    <option value="{{ $subfolder->id }}">{{ $subfolder->name }}</option>
                                
                                @else 
                                <option value="">No folders available</option>
                            @endif
                            @endif

                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload File</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


        <!-- Create a New Subfolder under the Current Folder -->
        <div class="mt-4">
            <h5>Create a New Folder</h5>
            <form action="{{ route('admin.createSubFolderForUser', ['userId' => $user->id, 'parentFolderId' => $current_folder_id]) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Folder Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-check mb-3" hidden>
            <input type="checkbox" id="by_id" name="by_id" value="2" class="form-check-input" checked>
            <label for="by_id" class="form-check-label">By ID</label>
        </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Create Folder</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
