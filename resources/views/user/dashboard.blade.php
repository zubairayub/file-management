<x-app-layout>

    <div class="container-fluid content-inner pb-0" id="page_layout">

        <div class="row">
            <h3 class="mb-0 d-flex align-items-center">Documents Management</h3>
            <div class="col-lg-8 foldericons">
                <div class="row row-cols-lg-4 row-cols-md-4 row-cols-1">
                    @php
                        // Initialize an array to store all folder names that the user has access to
                        $folderNames = [];

                        // Loop through the purchased packages for the logged-in user
                        foreach (auth()->user()->userPackages as $userPackage) {
                            $package = $userPackage->package; // Get the related package
                            $services = $package->services; // Get the services field

                            // Check if services is a JSON string and decode if necessary
                            if (is_string($services)) {
                                $services = json_decode($services, true); // Decode the services field (JSON)
                            }

                            // Ensure services is an array before merging
                            if (is_array($services)) {
                                // Merge the folder names into the folderNames array
                                $folderNames = array_merge($folderNames, $services);
                            }
                        }

                        // Remove duplicate folder names using array_unique
                        $folderNames = array_unique($folderNames);
                    @endphp

                    @foreach($folders as $folder)
                                        @php
                                            // Check if the user has access to the current folder
                                            $hasAccess = in_array($folder->name, $folderNames);
                                        @endphp

                                        <div class="col">
                                            <div class="card card-folder"
                                                onclick="window.location='{{ $hasAccess ? route('folder.showSubFolders', ['folderId' => $folder->id, 'subfolderId' => '']) : '#' }}'">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <a
                                                            class="avatar-40 bg-primary-subtle rounded-pill d-flex justify-content-center align-items-center">
                                                            <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M3 8.2C3 7.07989 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H9.67452C10.1637 5 10.4083 5 10.6385 5.05526C10.8425 5.10425 11.0376 5.18506 11.2166 5.29472C11.4184 5.4184 11.5914 5.59135 11.9373 5.93726L12.0627 6.06274C12.4086 6.40865 12.5816 6.5816 12.7834 6.70528C12.9624 6.81494 13.1575 6.89575 13.3615 6.94474C13.5917 7 13.8363 7 14.3255 7H17.8C18.9201 7 19.4802 7 19.908 7.21799C20.2843 7.40973 20.5903 7.71569 20.782 8.09202C21 8.51984 21 9.0799 21 10.2V15.8C21 16.9201 21 17.4802 20.782 17.908C20.5903 18.2843 20.2843 18.5903 19.908 18.782C19.4802 19 18.9201 19 17.8 19H6.2C5.07989 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2Z"
                                                                    stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>

                                                        </a>

                                                        @if(!$hasAccess)
                                                            <svg fill="#000000" height="24px" width="24px" version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                viewBox="0 0 330 330" xml:space="preserve">
                                                                <g id="XMLID_509_">
                                                                    <path id="XMLID_510_"
                                                                        d="M65,330h200c8.284,0,15-6.716,15-15V145c0-8.284-6.716-15-15-15h-15V85c0-46.869-38.131-85-85-85S80,38.131,80,85v45H65c-8.284,0-15,6.716-15,15v170C50,323.284,56.716,330,65,330z M180,234.986V255c0,8.284-6.716,15-15,15s-15-6.716-15-15v-20.014c-6.068-4.565-10-11.824-10-19.986c0-13.785,11.215-25,25-25s25,11.215,25,25C190,223.162,186.068,230.421,180,234.986z M110,85c0-30.327,24.673-55,55-55s55,24.673,55,55v45H110V85z" />
                                                                </g>
                                                            </svg>


                                                        @endif
                                                    </div>
                                                    <div class="mt-4">
                                                        <h5>{{ strtoupper($folder->name) }}</h5>
                                                        @if(!$hasAccess)
                                                            <button class="btn btn-warning mt-2"
                                                                onclick="window.location='{{ route('quota.exceeded')  }}'">Buy Now</button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                    @endforeach
                    
<div class="col">
    <div class="card card-folder" onclick="window.location='{{ route('showbusiness') }}'">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <a class="avatar-40 bg-primary-subtle rounded-pill d-flex justify-content-center align-items-center">
                <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 8.2C3 7.07989 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H9.67452C10.1637 5 10.4083 5 10.6385 5.05526C10.8425 5.10425 11.0376 5.18506 11.2166 5.29472C11.4184 5.4184 11.5914 5.59135 11.9373 5.93726L12.0627 6.06274C12.4086 6.40865 12.5816 6.5816 12.7834 6.70528C12.9624 6.81494 13.1575 6.89575 13.3615 6.94474C13.5917 7 13.8363 7 14.3255 7H17.8C18.9201 7 19.4802 7 19.908 7.21799C20.2843 7.40973 20.5903 7.71569 20.782 8.09202C21 8.51984 21 9.0799 21 10.2V15.8C21 16.9201 21 17.4802 20.782 17.908C20.5903 18.2843 20.2843 18.5903 19.908 18.782C19.4802 19 18.9201 19 17.8 19H6.2C5.07989 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                </a>
               
            </div>
            <div class="mt-4">
                <h5>Business Formation</h5>
                
            </div>
        </div>
    </div>
</div>



<div class="col">
    <div class="card card-folder" onclick="window.location='{{ route('showein') }}'">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <a class="avatar-40 bg-primary-subtle rounded-pill d-flex justify-content-center align-items-center">
                <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 8.2C3 7.07989 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H9.67452C10.1637 5 10.4083 5 10.6385 5.05526C10.8425 5.10425 11.0376 5.18506 11.2166 5.29472C11.4184 5.4184 11.5914 5.59135 11.9373 5.93726L12.0627 6.06274C12.4086 6.40865 12.5816 6.5816 12.7834 6.70528C12.9624 6.81494 13.1575 6.89575 13.3615 6.94474C13.5917 7 13.8363 7 14.3255 7H17.8C18.9201 7 19.4802 7 19.908 7.21799C20.2843 7.40973 20.5903 7.71569 20.782 8.09202C21 8.51984 21 9.0799 21 10.2V15.8C21 16.9201 21 17.4802 20.782 17.908C20.5903 18.2843 20.2843 18.5903 19.908 18.782C19.4802 19 18.9201 19 17.8 19H6.2C5.07989 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                </a>
               
            </div>
            <div class="mt-4">
                <h5>EIN Application</h5>
                
            </div>
        </div>
    </div>
</div>

<div class="col">
    <div class="card card-folder" onclick="window.location='{{ route('showitin') }}'">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <a class="avatar-40 bg-primary-subtle rounded-pill d-flex justify-content-center align-items-center">
                <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 8.2C3 7.07989 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H9.67452C10.1637 5 10.4083 5 10.6385 5.05526C10.8425 5.10425 11.0376 5.18506 11.2166 5.29472C11.4184 5.4184 11.5914 5.59135 11.9373 5.93726L12.0627 6.06274C12.4086 6.40865 12.5816 6.5816 12.7834 6.70528C12.9624 6.81494 13.1575 6.89575 13.3615 6.94474C13.5917 7 13.8363 7 14.3255 7H17.8C18.9201 7 19.4802 7 19.908 7.21799C20.2843 7.40973 20.5903 7.71569 20.782 8.09202C21 8.51984 21 9.0799 21 10.2V15.8C21 16.9201 21 17.4802 20.782 17.908C20.5903 18.2843 20.2843 18.5903 19.908 18.782C19.4802 19 18.9201 19 17.8 19H6.2C5.07989 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                </a>
               
            </div>
            <div class="mt-4">
                <h5>ITIN Application</h5>
                
            </div>
        </div>
    </div>
</div>
<div class="col">
    <div class="card card-folder" onclick="window.location='{{ route('showboi') }}'">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <a class="avatar-40 bg-primary-subtle rounded-pill d-flex justify-content-center align-items-center">
                <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 8.2C3 7.07989 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H9.67452C10.1637 5 10.4083 5 10.6385 5.05526C10.8425 5.10425 11.0376 5.18506 11.2166 5.29472C11.4184 5.4184 11.5914 5.59135 11.9373 5.93726L12.0627 6.06274C12.4086 6.40865 12.5816 6.5816 12.7834 6.70528C12.9624 6.81494 13.1575 6.89575 13.3615 6.94474C13.5917 7 13.8363 7 14.3255 7H17.8C18.9201 7 19.4802 7 19.908 7.21799C20.2843 7.40973 20.5903 7.71569 20.782 8.09202C21 8.51984 21 9.0799 21 10.2V15.8C21 16.9201 21 17.4802 20.782 17.908C20.5903 18.2843 20.2843 18.5903 19.908 18.782C19.4802 19 18.9201 19 17.8 19H6.2C5.07989 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                </a>
               
            </div>
            <div class="mt-4">
                <h5>BOI Reporting</h5>
                
            </div>
        </div>
    </div>
</div>

                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h4>Recent <b>Files Uploaded</b></h4>

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless iq-file-manager-table mb-0">
                                <thead>
                                    <tr class="border-bottom bg-transparent text-dark">
                                        <th scope="col">Files</th>
                                        <th scope="col">Last Uploaded</th>
                                        <th scope="col">Size</th>
                                        <th scope="col">Download</th>
                                        <th scope="col">Preview</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($files as $file)
                                    @php
    // Mapping of file extensions to corresponding icons
    $fileIcons = [
        'pdf' => 'pdf.png',
        'xlsx' => 'excel.png',
        'xls'  => 'excel.png',
        'docx' => 'word.png',
    ];

    // Helper function to format bytes to human-readable size
   
@endphp

<tr>
    <td>
        <div class="d-flex align-items-center gap-2">
            <span class="avatar-40 rounded-pill iq-recently-badge">
                @php
                    // Get the file extension from the file path
                    $fileExtension = pathinfo($file->path, PATHINFO_EXTENSION);
                @endphp

                <!-- Display different icons based on the file extension -->
                <img src="{{ asset('img/' . ($fileIcons[strtolower($fileExtension)] ?? 'file.png')) }}" 
                     class="img-fluid" alt="{{ ucfirst($fileExtension) }}">
            </span>
            <h6 class="mb-0">{{ $file->name }}</h6>
        </div>
    </td>
    <td>
        <small class="text-muted">{{ $file->created_at->format('d M, H:i') }}</small>
    </td>
    <td>
        <small class="text-primary">
            @php
                // Get file size and format it
                try {
                    $fileSize = Storage::exists($file->path) ? Storage::size($file->path) : 0;
                    $size = formatBytes($fileSize);  // Format bytes to readable format
                } catch (\Exception $e) {
                    $size = 'Error retrieving file size';
                }
            @endphp
            {{ $size }}
        </small>
    </td>

    <td>
        <!-- Download button -->
        <a href="{{ route('file.download', $file->id) }}" class="d-flex align-items-center text-danger">
            <span class="btn-inner">Download</span>
        </a>
    </td>

    <td>
        <!-- View file button (only for previewable file types) -->
        @if(in_array(strtolower($fileExtension), ['pdf', 'docx', 'xlsx', 'xls']))
            <a href="{{ route('file.preview', $file->id) }}" class="d-flex align-items-center text-primary">
                <span class="btn-inner">View File</span>
            </a>
        @else
            <span class="text-muted">No preview available</span>
        @endif
    </td>
</tr>
      
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex flex-wrap justify-content-between">
                                    <h4 class="">Business Tax Prep</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-wrap justify-content-start">
                                    <p>Your tax return for 2024 has been e-filed.<br>
                                        <small>James breth - Tax Advisor</small>
                                    </p>
                                </div>
                                <button type="button" class="btn btn-primary"><i class="icon">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5036 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0463C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.299 9.012 20.0475 9.013C19.6247 9.016 19.1177 9.021 18.8088 9.021Z"
                                                fill="#currentColor"></path>
                                            <path opacity="0.4"
                                                d="M16.084 2.56729C15.785 2.25629 15.263 2.47029 15.263 2.90129V5.53829C15.263 6.64429 16.174 7.55429 17.28 7.55429C17.977 7.56229 18.945 7.56429 19.767 7.56229C20.188 7.56129 20.402 7.05829 20.11 6.75429C19.055 5.65729 17.166 3.69129 16.084 2.56729Z"
                                                fill="#currentColor"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.9739 11.3876H12.3589C12.7699 11.3876 13.1039 11.0546 13.1039 10.6436C13.1039 10.2326 12.7699 9.89861 12.3589 9.89861H8.9739C8.5629 9.89861 8.2299 10.2326 8.2299 10.6436C8.2299 11.0546 8.5629 11.3876 8.9739 11.3876ZM8.974 16.3818H14.418C14.829 16.3818 15.163 16.0488 15.163 15.6378C15.163 15.2268 14.829 14.8928 14.418 14.8928H8.974C8.563 14.8928 8.23 15.2268 8.23 15.6378C8.23 16.0488 8.563 16.3818 8.974 16.3818Z"
                                                fill="#currentColor"></path>
                                        </svg>
                                    </i> Download</button>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex flex-wrap justify-content-between">
                                    <h4 class="">Personal Tax Prep</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-wrap justify-content-start">
                                    <p>Your personal tax prep has been reviewed.<br>
                                        <small>John Doe - Tax Advisor</small>
                                    </p>
                                </div>
                                <button type="button" class="btn btn-primary"><i class="icon">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5036 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0463C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.299 9.012 20.0475 9.013C19.6247 9.016 19.1177 9.021 18.8088 9.021Z"
                                                fill="#currentColor"></path>
                                            <path opacity="0.4"
                                                d="M16.084 2.56729C15.785 2.25629 15.263 2.47029 15.263 2.90129V5.53829C15.263 6.64429 16.174 7.55429 17.28 7.55429C17.977 7.56229 18.945 7.56429 19.767 7.56229C20.188 7.56129 20.402 7.05829 20.11 6.75429C19.055 5.65729 17.166 3.69129 16.084 2.56729Z"
                                                fill="#currentColor"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.9739 11.3876H12.3589C12.7699 11.3876 13.1039 11.0546 13.1039 10.6436C13.1039 10.2326 12.7699 9.89861 12.3589 9.89861H8.9739C8.5629 9.89861 8.2299 10.2326 8.2299 10.6436C8.2299 11.0546 8.5629 11.3876 8.9739 11.3876ZM8.974 16.3818H14.418C14.829 16.3818 15.163 16.0488 15.163 15.6378C15.163 15.2268 14.829 14.8928 14.418 14.8928H8.974C8.563 14.8928 8.23 15.2268 8.23 15.6378C8.23 16.0488 8.563 16.3818 8.974 16.3818Z"
                                                fill="#currentColor"></path>
                                        </svg>
                                    </i> Download</button>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="m-auto d-inline-block p-4 bg-primary-subtle rounded-pill">
                                        <svg class="icon-44" width="44" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2 4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831 6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z"
                                                fill="currentColor"></path>
                                            <path opacity="0.4"
                                                d="M16.0374 12.2966C16.2465 13.2478 17.0805 13.917 18.0326 13.8996H21.2825C21.6787 13.8996 22 13.5715 22 13.166V10.6344C21.9991 10.2297 21.6787 9.90077 21.2825 9.8999H17.9561C16.8731 9.90338 15.9983 10.8024 16 11.9102C16 12.0398 16.0128 12.1695 16.0374 12.2966Z"
                                                fill="currentColor"></path>
                                            <circle cx="18" cy="11.8999" r="1" fill="currentColor"></circle>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <p class="pt-3">This Year Revenue</p>
                                    <h4 class="mb-3 counter text-success " style="visibility: visible;">$753.00</h4>
                                    <p class="mb-0 text-success pt-2">+10%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="m-auto d-inline-block p-4 bg-primary-subtle rounded-pill">
                                        <svg class="icon-44" width="44" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                d="M16.6756 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0711 3.92889 22 7.33333 22H16.6756C20.08 22 22 20.0711 22 16.6667V7.33333C22 3.92889 20.08 2 16.6756 2Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M7.36866 9.3689C6.91533 9.3689 6.54199 9.74223 6.54199 10.2045V17.0756C6.54199 17.5289 6.91533 17.9022 7.36866 17.9022C7.83088 17.9022 8.20421 17.5289 8.20421 17.0756V10.2045C8.20421 9.74223 7.83088 9.3689 7.36866 9.3689Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M12.0352 6.08887C11.5818 6.08887 11.2085 6.4622 11.2085 6.92442V17.0755C11.2085 17.5289 11.5818 17.9022 12.0352 17.9022C12.4974 17.9022 12.8707 17.5289 12.8707 17.0755V6.92442C12.8707 6.4622 12.4974 6.08887 12.0352 6.08887Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M16.6398 12.9956C16.1775 12.9956 15.8042 13.3689 15.8042 13.8312V17.0756C15.8042 17.5289 16.1775 17.9023 16.6309 17.9023C17.0931 17.9023 17.4664 17.5289 17.4664 17.0756V13.8312C17.4664 13.3689 17.0931 12.9956 16.6398 12.9956Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <p class="pt-3">This Year Expenses</p>
                                    <h4 class="mb-3 counter text-danger " style="visibility: visible;">$544.00</h4>
                                    <p class="mb-0 text-danger pt-2">-10%</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="card bg-white">
                            <div id="admin-chart-03" class="admin-chart-03"></div>
                            <div class="card-body">
                                <h5 class="mb-0 text-center">Storage Details</h5>
                                
                                <div class="my-4 pb-2" id="storage-chart" data-storage="{{ $quotaUsed }}"
                                    data-total-storage="{{ $totalStorage }}"></div> 
                            </div>

                        </div>
                    </div>

                </div> -->
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('img/upgradestorage.jpg') }}" class="img-fluid w-100 mb-3" alt="Package"
                                loading="lazy">
                            <h5 class="mb-3">Streamline your business with our expert Bookkeeping, Payroll, Tax, and
                                Business Formation Services.</h5>
                            <div class="d-flex justify-content-center ms-2">
                                <a href="{{ route('quota.exceeded') }}"><button type="button"
                                        class="btn btn-warning">Buy it now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="card bg-success engagebox">
                    <div class="card-body">
                        <h3 class="mb-0 text-white text-center">Your Personalized Tax Engagement Solution</h3>
                        <p class="text-white  text-center pt-5">Estimate Tax Savings</p>
                        <h2 class="text-white counter mb-0  text-center">$300.00</h2>
                    </div>
                </div> -->
               @php
    $storage = getStorageDetails();
@endphp

<div class="col-lg-12">
    <div class="card bg-white">
        <div id="admin-chart-03" class="admin-chart-03"></div>
        <div class="card-body">
            <h5 class="mb-0 text-center">Storage Details</h5>

            <div class="my-4 pb-2" id="storage-chart"
                data-storage="{{ $storage['quota_used'] }}"
                data-total-storage="{{ $storage['total_storage'] }}">
            </div>
        </div>
    </div>
</div>


                <div class="col-lg-12">
                    <div class="card engagebox"
                        style="background: url(https://images.pexels.com/photos/8296981/pexels-photo-8296981.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2) no-repeat 0 0; background-size: cover">
                        <div class="card-header" style="z-index: 9;">
                            <div class="d-flex flex-wrap justify-content-between">
                                <h4 class="text-white text-shadow">Full-Service Bookkeeping for your business</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-white text-shadow">As a business owner, you have more important things to do
                                than bookkeeping.<br><br>At Prompt Filings, we provide experienced, affordable, and
                                dependable bookkeeping services so you can focus on running your business and generating
                                profits.</p>
                            <button type="button" class="btn btn-success mt-5">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-4">
            </div>

        </div>

</x-app-layout>