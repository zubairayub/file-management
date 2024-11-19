

<x-app-layout>

@section('content')

      <div class="container-fluid content-inner pb-0" id="page_layout">
        <div class="row">
            <div class="border-bottom pb-3 d-flex align-items-center justify-content-between">
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>

    <!-- Folder breadcrumb -->
    <li class="breadcrumb-item">
        <a href="{{ route('folder.showSubFolders', $folder->id) }}">{{ $folder->name }}</a>
    </li>

    <!-- Subfolder breadcrumb (only visible when inside a subfolder) -->
    @isset($subfolder)
        <li class="breadcrumb-item">
            <a href="{{ route('folder.showSubFolders', ['folderId' => $folder->id, 'subfolderId' => $subfolder->id]) }}">
                {{ $subfolder->name }}
            </a>
        </li>
    @endisset
</ol>


            </nav>
    
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" 
                    data-folder-id="{{ isset($subfolder) ? $subfolder->id : $folder->id }}">
                <span class="d-flex justify-content-center">
                    <svg class="icon-22" width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z" fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07996 6.6499V6.6599C7.64896 6.6599 7.29996 7.0099 7.29996 7.4399C7.29996 7.8699 7.64896 8.2199 8.07996 8.2199H11.069C11.5 8.2199 11.85 7.8699 11.85 7.4289C11.85 6.9999 11.5 6.6499 11.069 6.6499H8.07996ZM15.92 12.7399H8.07996C7.64896 12.7399 7.29996 12.3899 7.29996 11.9599C7.29996 11.5299 7.64896 11.1789 8.07996 11.1789H15.92C16.35 11.1789 16.7 11.5299 16.7 11.9599C16.7 12.3899 16.35 12.7399 15.92 12.7399ZM15.92 17.3099H8.07996C7.77996 17.3499 7.48996 17.1999 7.32996 16.9499C7.16996 16.6899 7.16996 16.3599 7.32996 16.1099C7.48996 15.8499 7.77996 15.7099 8.07996 15.7399H15.92C16.319 15.7799 16.62 16.1199 16.62 16.5299C16.62 16.9289 16.319 17.2699 15.92 17.3099Z" fill="currentColor"></path>
                    </svg>
                    <span class="ms-3 mb-0">Add Folder</span>
                </span>
            </button>
           <!-- Modal Trigger Button -->
<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal" type="button" 
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
             <div class="col-lg-8 foldericons">
             
                <div class="container">
                    {{-- If we are displaying a specific subfolder --}}
                    @isset($subfolder)
                        <div class="row">
                            <div class="col-12">
                                <h2>Subfolder: {{ strtoupper($subfolder->name) }}</h2>
                                <p>Subfolder ID: {{ $subfolder->id }}</p>

                                {{-- Check if files exist and display them --}}
                                @if($files)
                             
                                    <div>
                                        @foreach($files as $file)
                                            <div>{{ $file->name }}</div>  {{-- Customize as needed --}}
                                        @endforeach
                                    </div>
                                @else
                                    <div>No files in this subfolder.</div>
                                @endif
                            </div>
                        </div>
                    @else
                        {{-- If we are displaying the list of subfolders --}}
                        <div class="row row-cols-lg-4 row-cols-md-4 row-cols-1">
                            @forelse($subfolders as $subfolder)
                                <div class="col">
                                    <div class="card card-folder" onclick="window.location='{{ route('folder.showSubFolders', ['folderId' => $folder->id, 'subfolderId' => $subfolder->id]) }}'">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <a class="avatar-40 bg-primary-subtle rounded-pill d-flex justify-content-center align-items-center">
                                                    <i class="{{ $subfolder->icon ?? 'fa fa-folder' }}" style="font-size: 20px;"></i>
                                                </a>
                                            </div>
                                            <div class="mt-4">
                                                <h5>{{ strtoupper($subfolder->name) }}</h5>
                                                <p class="mb-0">Subfolder ID: {{ $subfolder->id }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <div class="alert alert-info text-center">
                                        <strong>No subfolders available for this folder.</strong>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    @endisset
                </div>



            </div> 
            </div>
         
      </div>
<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create New Folder</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('subfolder.create', ['folderId' =>  isset($subfolder) ? $subfolder->id : $folder->id ]) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="folderName" class="form-label">Folder Name</label>
                            <input type="text" class="form-control" id="folderName" name="name" required>
                        </div>
                        <input type="hidden" id="parent_folder_id" name="parent_folder_id">
                        <input type="hidden" id="parent_folder_id" name="is_subfolder" value="{{isset($subfolder) ? true : false }}">
                        <button type="submit" class="btn btn-primary">Create Folder</button>
                    </form>
                </div>
            </div>
        </div>
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
                        <label for="folder_id" class="form-label">Select Folder</label>
                        <select name="subfolder_id" id="folder_id" class="form-select">
                        <option value="">Select Folder</option>
                        @if(!empty($subfolders) && is_iterable($subfolders))
                            @foreach($subfolders as $folder)
                                <option value="{{ $folder->id }}">{{ $folder->name }}</option>
                                
                            @endforeach
                        @else
                            <option value="">No folders available</option>
                        @endif

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload File</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var folderButton = document.querySelector('[data-bs-toggle="modal"]');
    folderButton.addEventListener('click', function () {
        var folderId = folderButton.getAttribute('data-folder-id');
        document.getElementById('parent_folder_id').value = folderId;
    });
});

function openFolderOrSubfolder(url) {
        // You can either use JavaScript's `window.location` to navigate to the URL
        window.location.href = url;
    }

    document.addEventListener('DOMContentLoaded', function () {
    const uploadModal = document.getElementById('uploadModal');
    const folderIdInput = document.getElementById('folder_id');

    uploadModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget; // Button that triggered the modal
        const folderId = button.getAttribute('data-folder-id'); // Extract folder ID
        if (folderId) {
            folderIdInput.value = folderId; // Set folder ID in the select dropdown
        }
    });
});

</script>
   
    </x-app-layout>
