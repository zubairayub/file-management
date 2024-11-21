
<x-app-layout>
   
      <div class="container-fluid content-inner pb-0" id="page_layout">
        
      <div class="row">
            <h3 class="mb-0 d-flex align-items-center">Documents Management</h3>
            <div class="col-lg-8 foldericons">
    <div class="row row-cols-lg-4 row-cols-md-4 row-cols-1">
        @foreach($folders as $folder)
            <div class="col">
                <div class="card card-folder" onclick="window.location='{{ route('folder.showSubFolders', ['folderId' => $folder->id, 'subfolderId' => '']) }}'">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <a class="avatar-40 bg-primary-subtle rounded-pill d-flex justify-content-center align-items-center">
                                <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16.6756 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0711 3.92889 22 7.33333 22H16.6756C20.08 22 22 20.0711 22 16.6667V7.33333C22 3.92889 20.08 2 16.6756 2Z" fill="currentColor"></path>
                                    <path d="M7.36866 9.3689C6.91533 9.3689 6.54199 9.74223 6.54199 10.2045V17.0756C6.54199 17.5289 6.91533 17.9022 7.36866 17.9022C7.83088 17.9022 8.20421 17.5289 8.20421 17.0756V10.2045C8.20421 9.74223 7.83088 9.3689 7.36866 9.3689Z" fill="currentColor"></path>
                                    <path d="M12.0352 6.08887C11.5818 6.08887 11.2085 6.4622 11.2085 6.92442V17.0755C11.2085 17.5289 11.5818 17.9022 12.0352 17.9022C12.4974 17.9022 12.8707 17.5289 12.8707 17.0755V6.92442C12.8707 6.4622 12.4974 6.08887 12.0352 6.08887Z" fill="currentColor"></path>
                                    <path d="M16.6398 12.9956C16.1775 12.9956 15.8042 13.3689 15.8042 13.8312V17.0756C15.8042 17.5289 16.1775 17.9023 16.6309 17.9023C17.0931 17.9023 17.4664 17.5289 17.4664 17.0756V13.8312C17.4664 13.3689 17.0931 12.9956 16.6398 12.9956Z" fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="mt-4">
                            <h5>{{ strtoupper($folder->name) }}</h5>
                            <p class="mb-0">{{ $folder->files_count }} Files</p>
                          

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


            <div class="col-lg-4">
                    <div class="card bg-success engagebox">
                       <div class="card-body">
                        <h3 class="mb-0 text-white text-center">Your Personalized Tax Engagement Solution</h3>
                            <p class="text-white  text-center pt-5">Estimate Tax Savings</p>
                          <h2 class="text-white counter mb-0  text-center">$300.00</h2>
                       </div>
                    </div>
                    <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                       <div class="card-body">
                          <div class="text-center">
                             <div class="m-auto d-inline-block p-4 bg-primary-subtle rounded-pill">
                                <svg class="icon-44" width="44" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2 4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831 6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M16.0374 12.2966C16.2465 13.2478 17.0805 13.917 18.0326 13.8996H21.2825C21.6787 13.8996 22 13.5715 22 13.166V10.6344C21.9991 10.2297 21.6787 9.90077 21.2825 9.8999H17.9561C16.8731 9.90338 15.9983 10.8024 16 11.9102C16 12.0398 16.0128 12.1695 16.0374 12.2966Z" fill="currentColor"></path>
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
                 <div class="col-lg-6">
                    <div class="card">
                       <div class="card-body">
                          <div class="text-center">
                             <div class="m-auto d-inline-block p-4 bg-primary-subtle rounded-pill">
                                <svg class="icon-44" width="44" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path opacity="0.4" d="M16.6756 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0711 3.92889 22 7.33333 22H16.6756C20.08 22 22 20.0711 22 16.6667V7.33333C22 3.92889 20.08 2 16.6756 2Z" fill="currentColor"></path>
                                   <path d="M7.36866 9.3689C6.91533 9.3689 6.54199 9.74223 6.54199 10.2045V17.0756C6.54199 17.5289 6.91533 17.9022 7.36866 17.9022C7.83088 17.9022 8.20421 17.5289 8.20421 17.0756V10.2045C8.20421 9.74223 7.83088 9.3689 7.36866 9.3689Z" fill="currentColor"></path>
                                   <path d="M12.0352 6.08887C11.5818 6.08887 11.2085 6.4622 11.2085 6.92442V17.0755C11.2085 17.5289 11.5818 17.9022 12.0352 17.9022C12.4974 17.9022 12.8707 17.5289 12.8707 17.0755V6.92442C12.8707 6.4622 12.4974 6.08887 12.0352 6.08887Z" fill="currentColor"></path>
                                   <path d="M16.6398 12.9956C16.1775 12.9956 15.8042 13.3689 15.8042 13.8312V17.0756C15.8042 17.5289 16.1775 17.9023 16.6309 17.9023C17.0931 17.9023 17.4664 17.5289 17.4664 17.0756V13.8312C17.4664 13.3689 17.0931 12.9956 16.6398 12.9956Z" fill="currentColor"></path>
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
                </div>
                 </div> 
            </div>
         <div class="row"> 
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex flex-wrap justify-content-between">
                                <h4 class="me-2 mt-2">Business Tax Prep</h4> 
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap justify-content-start">
                            <p>Your tax return for 2024 has been e-filed.<br>
                            <small>James breth - Tax Advisor</small></p>
                            </div>
                            <button type="button" class="btn btn-primary"><i class="icon">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5036 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0463C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.299 9.012 20.0475 9.013C19.6247 9.016 19.1177 9.021 18.8088 9.021Z" fill="#currentColor"></path>
                                    <path opacity="0.4" d="M16.084 2.56729C15.785 2.25629 15.263 2.47029 15.263 2.90129V5.53829C15.263 6.64429 16.174 7.55429 17.28 7.55429C17.977 7.56229 18.945 7.56429 19.767 7.56229C20.188 7.56129 20.402 7.05829 20.11 6.75429C19.055 5.65729 17.166 3.69129 16.084 2.56729Z" fill="#currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.9739 11.3876H12.3589C12.7699 11.3876 13.1039 11.0546 13.1039 10.6436C13.1039 10.2326 12.7699 9.89861 12.3589 9.89861H8.9739C8.5629 9.89861 8.2299 10.2326 8.2299 10.6436C8.2299 11.0546 8.5629 11.3876 8.9739 11.3876ZM8.974 16.3818H14.418C14.829 16.3818 15.163 16.0488 15.163 15.6378C15.163 15.2268 14.829 14.8928 14.418 14.8928H8.974C8.563 14.8928 8.23 15.2268 8.23 15.6378C8.23 16.0488 8.563 16.3818 8.974 16.3818Z" fill="#currentColor"></path>
                                </svg>
                            </i> Download</button>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex flex-wrap justify-content-between">
                                <h4 class="me-2 mt-2">Personal Tax Prep</h4> 
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap justify-content-start">
                            <p>Your personal tax prep has been reviewed.<br>
                            <small>John Doe - Tax Advisor</small></p>
                            </div>
                            <button type="button" class="btn btn-primary"><i class="icon">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5036 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0463C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.299 9.012 20.0475 9.013C19.6247 9.016 19.1177 9.021 18.8088 9.021Z" fill="#currentColor"></path>
                                    <path opacity="0.4" d="M16.084 2.56729C15.785 2.25629 15.263 2.47029 15.263 2.90129V5.53829C15.263 6.64429 16.174 7.55429 17.28 7.55429C17.977 7.56229 18.945 7.56429 19.767 7.56229C20.188 7.56129 20.402 7.05829 20.11 6.75429C19.055 5.65729 17.166 3.69129 16.084 2.56729Z" fill="#currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.9739 11.3876H12.3589C12.7699 11.3876 13.1039 11.0546 13.1039 10.6436C13.1039 10.2326 12.7699 9.89861 12.3589 9.89861H8.9739C8.5629 9.89861 8.2299 10.2326 8.2299 10.6436C8.2299 11.0546 8.5629 11.3876 8.9739 11.3876ZM8.974 16.3818H14.418C14.829 16.3818 15.163 16.0488 15.163 15.6378C15.163 15.2268 14.829 14.8928 14.418 14.8928H8.974C8.563 14.8928 8.23 15.2268 8.23 15.6378C8.23 16.0488 8.563 16.3818 8.974 16.3818Z" fill="#currentColor"></path>
                                </svg>
                            </i> Download</button>
                        </div>
                    </div>
            </div>  


            <div class="col-lg-4">
            <div class="card bg-white">
                <div id="admin-chart-03" class="admin-chart-03"></div>
                <div class="card-body">
                 <h5 class="mb-0 text-center">Storage Details</h5>
                     <div id="storage-chart"></div>
                </div>
             </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h4>Files uploaded by <b>Prompt Filings</b></h4>
                                
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless iq-file-manager-table mb-0">
                                <thead>
                                    <tr class="border-bottom bg-transparent text-dark">
                                        <th scope="col">Files</th>
                                        <th scope="col">Last Modified</th>
                                        <th scope="col">Size</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($files as $file)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="avatar-40 rounded-pill iq-recently-badge">
                                                <!-- Your link content, like the file name or icon -->
                                            @php
                                                $fileExtension = pathinfo($file->path, PATHINFO_EXTENSION); // Get the file extension from the path
                                            @endphp

                                            @if(in_array(strtolower($fileExtension), ['pdf']))
                                                <img src="{{ asset('img/pdf.png') }}" class="img-fluid" alt="PDF">
                                            @elseif(in_array(strtolower($fileExtension), ['xlsx', 'xls']))
                                                <img src="{{ asset('img/excel.png') }}" class="img-fluid" alt="Excel">
                                            @elseif(in_array(strtolower($fileExtension), ['docx']))
                                                <img src="{{ asset('img/word.png') }}" class="img-fluid" alt="Word">
                                            @else
                                                <img src="{{ asset('img/file.png') }}" class="img-fluid" alt="File">
                                            @endif
                                            </span>
                                            <h6 class="mb-0">{{ $file->name }}</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <small class="text-muted">{{ $file->created_at->format('d M, H:i') }}</small>
                                    </td>
                                    <td>
                                        <small class="text-primary">   @php
                                $fileSize = Storage::size($file->path); // Get file size in bytes
                                if ($fileSize < 1024) {
                                    $size = number_format($fileSize, 2) . ' B'; // Bytes
                                } elseif ($fileSize < 1048576) {
                                    $size = number_format($fileSize / 1024, 2) . ' KB'; // Kilobytes
                                } elseif ($fileSize < 1073741824) {
                                    $size = number_format($fileSize / 1024 / 1024, 2) . ' MB'; // Megabytes
                                } elseif ($fileSize < 1099511627776) {
                                    $size = number_format($fileSize / 1024 / 1024 / 1024, 2) . ' GB'; // Gigabytes
                                } else {
                                    $size = number_format($fileSize / 1024 / 1024 / 1024 / 1024, 2) . ' TB'; // Terabytes
                                }
                            @endphp
                            {{ $size }}</small>
                                    </td>
                                    <td>
                                        <a href="{{ route('file.download', $file->id) }}" class="d-flex align-items-center text-danger">
                                            <span class="btn-inner">
                                                <!-- SVG icon for download -->
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                 @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card engagebox" style="background: url(https://images.pexels.com/photos/8296981/pexels-photo-8296981.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2) no-repeat 0 0; background-size: cover">
                        <div class="card-header" style="z-index: 9;">
                            <div class="d-flex flex-wrap justify-content-between">
                                <h4 class="me-2 mt-2 text-white text-shadow">Full-Service Bookkeeping for your business</h4> 
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-white text-shadow">As a business owner, you have more important things to do than bookkeeping.<br><br>At Prompt Filings, we provide experienced, affordable, and dependable bookkeeping services so you can focus on running your business and generating profits.</p>
                            <button type="button" class="btn btn-success mt-5">Get Started</button>
                        </div>
                    </div>
                    </div> 
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="img/upgradestorage.webp" class="img-fluid w-75" alt="18" loading="lazy">
                                <h5 class="mb-3">Upgrade to Special Offer For Unlimited Storage</h5>
                                <div class="d-flex justify-content-center ms-2">
                                    <button type="button" class="btn btn-info">Buy storage</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
</x-app-layout>
