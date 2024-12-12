
<x-app-layout>
<meta name="csrf-token" content="{{ csrf_token() }}">



      <div class="container-fluid content-inner pb-0" id="page_layout">
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Admin Dashboard</h4>
                    </div>
                    <div class="card-body px-0">
                         <div class="simple-table table-responsive">
                             <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                           <!-- Custom Toast Notification -->
  
                           @if(session('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert" id="successMessage">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle me-2" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 8 0a8 8 0 0 1 8 8zM7.293 10.293a1 1 0 0 0 1.414 0L12 6.707 10.707 5l-3 3-1-1-2 2a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 1.414 0l3-3z"/>
        </svg>
        {{ session('success') }}
    </div>
@endif





                             <div class="table-responsive my-3">
                                <table class="table table-striped mb-0 dataTable no-footer" id="datatable" data-toggle="data-table" aria-describedby="datatable_info">
                                 <thead>
                                     <tr>
                                        <th scope="col" class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profiles: activate to sort column descending">Profiles</th>
                                        <th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Contact: activate to sort column ascending">Contact</th>
                                        <th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Email ID: activate to sort column ascending">Email ID</th>
                                        <th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">Role</th>
                                        <th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">Package</th>
                                        <th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">Total Paid</th>
                                        <th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">Storage</th>
                                        
                                        <th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Purchases: activate to sort column ascending">Registered</th>
                                       
                                        <th scope="col" class="text-center sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody> 
                                 @foreach ($users as $user)
    <tr>
        <td>
            <div class="text-dark">
                
                <div class="media-support-info">
                    <h5 class="iq-sub-label user-name">
                        <span class="user-prefix">{{ $user->prefix }}</span>
                        <span class="user-fullname">{{ $user->name }} {{ $user->last_name }}</span>
                    </h5>
                </div>
            </div>
        </td>
        <td class="text-dark">{{ $user->phone_number }}</td>
        <td class="text-dark">{{ $user->email }}</td>
        <td class="text-dark ">
            
            <span class="role-label">{{ $user->role }}</span>
        </td>
        <td class="text-dark">
           
            {{ $user->package ? $user->package->package_name : 'No Package Assigned' }}
        </td>
        <td class="text-dark">
            ${{ number_format($user->orders()->sum('amount'), 2) ?: 'No Payments Made' }}
        </td>


        <td class="text-dark ">
           
            @if($user->package)
                @php
                    $quota = $user->package->quota;
                    $quota_used = $user->quota_used;
                    if ($quota >= 1073741824) {
                        $quota_used_display = number_format($quota_used / 1073741824, 2) . ' TB';
                        $quota_display = number_format($quota / 1073741824, 2) . ' TB';
                    } elseif ($quota >= 1048576) {
                        $quota_used_display = number_format($quota_used / 1048576, 2) . ' GB';
                        $quota_display = number_format($quota / 1048576, 2) . ' GB';
                    } elseif ($quota >= 1024) {
                        $quota_used_display = number_format($quota_used / 1024, 2) . ' MB';
                        $quota_display = number_format($quota / 1024, 2) . ' MB';
                    } else {
                        $quota_used_display = $quota_used . ' bytes';
                        $quota_display = $quota . ' bytes';
                    }
                    $percentage_used = ($quota_used / $quota) * 100;
                    $usage_class = ($percentage_used >= 90) ? 'low' : (($percentage_used >= 50) ? 'normal' : '');
                @endphp
                <span class="storage-info {{ $usage_class }}">
                    {{ $quota_used_display }} of {{ $quota_display }}
                </span>
            @else
                <span class="storage-info">Storage Not Assigned</span>
            @endif
        </td>
        <td class="text-dark">{{ $user->created_at->format('d M Y') }}</td>
        <td>
            <div class="d-flex justify-content-evenly gap-1">
                <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="{{ route('users.edit', $user->id) }}" role="button" aria-label="Edit User">
                <span class="btn-inner">
                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>
                        <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>
                        <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>
                    </svg>
               
                </span>
                </a>
                <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="{{route('users.details', $user->id) }}" role="button" aria-label="Delete User">
                <span class="btn-inner">
                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z" fill="currentColor"></path>
                        <path d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z" fill="currentColor"></path>
                        <path opacity="0.4" d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z" fill="currentColor"></path>
                    </svg>
                </span>
                </a>
              
                <button type="button" class="btn-inner" style="border: none; background: none;" onclick="toggleStatus({{ $user->id }})">
    <span class="btn-inner">
        @if($user->status === 'active')
        <!-- Show the Deactivate (cross) icon if the user is active -->
        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.4" d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.03 20 4 16.97 4 12C4 7.03 7.03 4 12 4C16.97 4 20 7.03 20 12C20 16.97 16.97 20 12 20Z" fill="currentColor"></path>
            <path d="M16.24 7.76L7.76 16.24L8.24 16.72L16.72 8.24L16.24 7.76Z" fill="currentColor"></path>
            <path d="M7.76 7.76L16.24 16.24L15.76 16.72L7.28 8.24L7.76 7.76Z" fill="currentColor"></path>
        </svg>
        @else
        <!-- Show the Activate (checkmark) icon if the user is inactive -->
        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.4" d="M10 19L4 13L5.41 11.59L10 16.17L18.59 7.58L20 9L10 19Z" fill="currentColor"></path>
            <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.03 20 4 16.97 4 12C4 7.03 7.03 4 12 4C16.97 4 20 7.03 20 12C20 16.97 16.97 20 12 20Z" fill="currentColor"></path>
        </svg>
        @endif
    </span>
</button>

              
                
            </div>
        </td>
    </tr>
@endforeach


                                 </tbody>
                             </table></div>
                             <div class="clear"></div></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         
      </div>
      <script>
        // Wait for the page to load completely
        window.onload = function() {
            // Set a timeout to hide the success message after 3 seconds
            setTimeout(function() {
                var successMessage = document.getElementById('successMessage');
                if (successMessage) {
                    successMessage.style.transition = 'opacity 1s ease'; // Smooth fade-out effect
                    successMessage.style.opacity = 0;
                    setTimeout(function() {
                        successMessage.style.display = 'none'; // Hide the element after the fade-out
                    }, 1000); // Delay to match fade-out duration
                }
            }, 3000); // 3 seconds before the fade-out starts
        }
    </script>
<script>
function toggleStatus(userId) {
    // Send AJAX request to toggle the user status
    $.ajax({
        url: '/user/toggle-status/' + userId, // Define your route here
        method: 'POST',
        data: {
            _token: '{{ csrf_token() }}', // CSRF token for protection
        },
        success: function(response) {

            location.reload();
        }
    });
}
</script>
     
</x-app-layout>
