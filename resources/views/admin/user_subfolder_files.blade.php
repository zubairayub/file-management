<x-app-layout>
    <div class="container mt-4">
        <!-- Title -->
        <!-- <h3 class="mb-4">Files and Subfolders for {{ $subfolder->name }}</h3> -->

        <!-- Files Section -->
        <!-- <div class="row mb-4">
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
        </div> -->
        
        

        <div class="container">
    {{-- If we are displaying a specific subfolder --}}
    @isset($subfolder)
        <div class="row">
            <div class="col-12">
                <h2 class="text-uppercase mb-4">Folder: {{ $subfolder->name }}</h2>

                {{-- Check if files exist and display them --}}
                @if($files && $files->isNotEmpty())
                    <div>
                        <h4 class="mb-3">Files:</h4>
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                            @foreach($files as $file)
                                <div class="col">
                                    <div class="card iq-file-manager">
                                        <div class="card-body card-thumbnail">
                                            @php
                                                $fileUrl = route('file.preview', ['file_id' => $file->id]);
                                                $fileExtension = strtolower(pathinfo($file->path, PATHINFO_EXTENSION));
                                                $modalId = 'previewModal-' . $file->id;
                                            @endphp

                                            <a href="#" data-bs-toggle="modal" data-bs-target="#{{ $modalId }}">
                                                @switch($fileExtension)
                                                    @case('jpg')
                                                    @case('jpeg')
                                                    @case('png')
                                                    @case('gif')
                                                        <img src="{{ $fileUrl }}" class="img-fluid rounded" alt="Image Preview" style="max-height: 150px; object-fit: cover;">
                                                        @break

                                                    @case('pdf')
                                                        <div class="pdf-preview-container">
                                                            <embed src="{{ $fileUrl }}" width="100%" height="200px" type="application/pdf">
                                                            <p>View PDF</p>
                                                        </div>
                                                        @break

                                                    @default
                                                        <img src="{{ asset('img/file.png') }}" class="img-fluid" alt="File Icon">
                                                @endswitch
                                            </a>

                                            <div class="mt-2">
                                                <p class="card-text text-truncate" title="{{ $file->name }}">{{ $file->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <p>No files available in this Folder.</p>
                @endif
            </div>
        </div>
    @else
        <p>No Folder selected.</p>
    @endisset
</div>

{{-- File Preview Modals --}}
@foreach($files as $file)
    @php
        $modalId = 'previewModal-' . $file->id;
    @endphp
    <div class="modal fade" id="{{ $modalId }}" tabindex="-1" aria-labelledby="{{ $modalId }}Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="{{ $modalId }}Label">{{ $file->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @switch($fileExtension)
                        @case('jpg')
                        @case('jpeg')
                        @case('png')
                        @case('gif')
                            <img src="{{ $fileUrl }}" class="img-fluid" alt="Image Preview">
                            @break

                        @case('pdf')
                            <embed src="{{ $fileUrl }}" width="100%" height="400px" type="application/pdf">
                            @break

                        @default
                            <p>File cannot be previewed.</p>
                    @endswitch
                </div>
                <div class="modal-footer">
                    <a href="{{ route('file.download', ['file_id' => $file->id]) }}" class="btn btn-primary" download>Download</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach




        <!-- Sub-Subfolders Section -->
        <div class="row">
            @if($subfolders->isEmpty())
                <div class="col-12">
                    <p class="text-muted">No Folders found.</p>
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
                    Total Folders: {{ $nestedSubfolder->subfolders()->count() }} | Total Files: {{ $nestedSubfolder->files()->count() }}
                </p>

                <!-- Sub-Subfolder Creation Form -->
                <form action="{{ route('admin.createSubFolderForUser', ['userId' => $user->id, 'parentFolderId' => $nestedSubfolder->id]) }}" method="POST" class="mt-3">
                    @csrf
                    <div class="mb-3">
                        <label for="name_{{ $nestedSubfolder->id }}" class="form-label">Folder Name:</label>
                        <input type="text" id="name_{{ $nestedSubfolder->id }}" name="name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="mb-3 form-check" hidden>
                        <input type="checkbox" id="is_subfolder_{{ $nestedSubfolder->id }}" name="is_subfolder" class="form-check-input" checked>
                        <label for="is_subfolder_{{ $nestedSubfolder->id }}" class="form-check-label">Check if this is a Folder</label>
                    </div>
                    <div class="form-check mb-3" hidden>
                        <input type="checkbox" id="by_id" name="by_id" value="1" class="form-check-input" checked>
                        <label for="by_id" class="form-check-label">By ID</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Create folder</button>
                    </div>
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
                </form>
            </div>
        </div>
    </div>
@endforeach

            @endif
        </div>
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
            <form action="{{ route('admin.createSubFolderForUser', ['userId' => $user->id, 'parentFolderId' => $subfolder->id]) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Folder Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3 form-check" hidden>
                                        <input type="checkbox" id="" name="is_subfolder" class="form-check-input" checked>
                                        <label for="" class="form-check-label">Check if this is a Folder</label>
                                    </div>
                <div class="form-check mb-3" hidden>
                                    <input type="checkbox" id="by_id" name="by_id" value="1" class="form-check-input" checked>
                                    <label for="by_id" class="form-check-label">By ID</label>
                                    </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Create Folder</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
