
<x-app-layout>
    <div class="position-relative">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu left-border">
           <div class="container-fluid navbar-inner">
              <a href="#" class="navbar-brand">
                 
                 <!--Logo start-->
                 <div class="logo-main">
                     <div class="logo-normal">
                         <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                             <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                             <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                             <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                         </svg>
                     </div>
                     <div class="logo-mini">
                         <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                             <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                             <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                             <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                         </svg>
                     </div>
                 </div>
                 <!--logo End-->
                 <h4 class="logo-title d-block d-xl-none">Prompt Filings</h4>
              </a>
              <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                 <i class="icon d-flex">
                    <svg class="icon-20" width="20" viewBox="0 0 24 24">
                       <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                    </svg>
                 </i>
              </div>
              <div class="d-flex align-items-center justify-content-between product-offcanvas">
                 <div class="breadcrumb-title border-end me-3 pe-3 d-none d-xl-block">
                    <small class="mb-0 text-capitalize">Admin Dashboard</small>
                 </div>
                 <div class="offcanvas offcanvas-end shadow-none iq-product-menu-responsive" tabindex="-1" id="offcanvasBottom">
                    <div class="offcanvas-body">
                       <ul class="iq-nav-menu list-unstyled">
                          <li class="nav-item active">
                             <a class="nav-link menu-arrow justify-content-start" data-bs-toggle="collapse" href="/"
                                role="button" aria-expanded="false" aria-controls="homeData">
                                <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5036 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0463C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.299 9.012 20.0475 9.013C19.6247 9.016 19.1177 9.021 18.8088 9.021Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1742 7.55437 17.2802 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.97398 11.3877H12.359C12.77 11.3877 13.104 11.0547 13.104 10.6437C13.104 10.2327 12.77 9.89868 12.359 9.89868H8.97398C8.56298 9.89868 8.22998 10.2327 8.22998 10.6437C8.22998 11.0547 8.56298 11.3877 8.97398 11.3877ZM8.97408 16.3819H14.4181C14.8291 16.3819 15.1631 16.0489 15.1631 15.6379C15.1631 15.2269 14.8291 14.8929 14.4181 14.8929H8.97408C8.56308 14.8929 8.23008 15.2269 8.23008 15.6379C8.23008 16.0489 8.56308 16.3819 8.97408 16.3819Z" fill="currentColor"></path>
                                    </svg>  
                                <span class="nav-text ms-2">Manage Users</span>
                             </a>
                             <ul class="iq-header-sub-menu list-unstyled collapse" id="homeData">
                                <li class="nav-item"><a class="nav-link "
                                      href="#"> Add User-Profile
                                    </a></li>
                                <li class="nav-item"><a
                                      class="nav-link "
                                      href="#">In Active User</a></li>
                                      <li class="nav-item"><a
                                        class="nav-link "
                                        href="#">Upgrade Storage</a>
                                      </li>
                                 
                             </ul>
                          </li>     
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="d-flex align-items-center">
                 <button id="navbar-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                       <span class="navbar-toggler-bar bar1 mt-1"></span>
                       <span class="navbar-toggler-bar bar2"></span>
                       <span class="navbar-toggler-bar bar3"></span>
                    </span>
                 </button>
              </div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                    <li class="nav-item dropdown me-0 me-xl-3">
                       <div class="d-flex align-items-center mr-2 iq-font-style" role="group" aria-label="First group"
                          data-setting="radio">
                          <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-sm" id="font-size-sm">
                          <label for="font-size-sm" class="btn btn-border border-0 btn-icon btn-sm" data-bs-toggle="tooltip"
                             title="Font size 14px" data-bs-placement="bottom">
                             <span class="mb-0 h6" style="color: inherit !important;">A</span>
                          </label>
                          <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-md" id="font-size-md">
                          <label for="font-size-md" class="btn btn-border border-0 btn-icon" data-bs-toggle="tooltip"
                             title="Font size 16px" data-bs-placement="bottom">
                             <span class="mb-0 h4" style="color: inherit !important;">A</span>
                          </label> 
                       </div>
                    </li>
                    <li class="nav-item dropdown border-end pe-3 d-none d-xl-block">
                       <div class="form-group input-group mb-0 search-input">
                          <input type="text" class="form-control" placeholder="Search...">
                          <span class="input-group-text">
                             <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                   stroke-linecap="round" stroke-linejoin="round"></circle>
                                <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                   stroke-linecap="round" stroke-linejoin="round"></path>
                             </svg>
                          </span>
                       </div>
                    </li>
                    <li class="nav-item dropdown iq-responsive-menu border-end d-block d-xl-none">
                       <div class="btn btn-sm bg-body" id="navbarDropdown-search-11" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></circle>
                             <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                       </div>
                       <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown-search-11"
                          style="width: 25rem;">
                          <li class="px-3 py-0">
                             <div class="form-group input-group mb-0">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-text">
                                   <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                         stroke-linecap="round" stroke-linejoin="round"></circle>
                                      <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                         stroke-linecap="round" stroke-linejoin="round"></path>
                                   </svg>
                                </span>
                             </div>
                          </li>
                       </ul>
                    </li> 
                    <li class="nav-item dropdown" id="itemdropdown1">
                       <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          <div class="btn btn-primary btn-icon btn-sm rounded-pill">
                             <span class="btn-inner">
                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                   <path
                                      d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z"
                                      fill="currentColor"></path>
                                   <path opacity="0.4"
                                      d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z"
                                      fill="currentColor"></path>
                                </svg>
                             </span>
                          </div>
                       </a>
                       <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <li>
                                <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                          </li>
                       </ul>
                    </li>
                    <li class="nav-item iq-full-screen d-none d-xl-block" id="fullscreen-item">
                       <a href="#" class="nav-link" id="btnFullscreen" data-bs-toggle="dropdown">
                          <div class="btn btn-primary btn-icon btn-sm rounded-pill">
                             <span class="btn-inner">
                                <svg class="normal-screen icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                   <path d="M18.5528 5.99656L13.8595 10.8961" stroke="white" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                   <path d="M14.8016 5.97618L18.5524 5.99629L18.5176 9.96906" stroke="white" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                   <path d="M5.8574 18.896L10.5507 13.9964" stroke="white" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                   <path d="M9.60852 18.9164L5.85775 18.8963L5.89258 14.9235" stroke="white" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <svg class="full-normal-screen d-none icon-24" width="24" height="24" viewBox="0 0 24 24"
                                   fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M13.7542 10.1932L18.1867 5.79319" stroke="white" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                   <path d="M17.2976 10.212L13.7547 10.1934L13.7871 6.62518" stroke="currentColor"
                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                   <path d="M10.4224 13.5726L5.82149 18.1398" stroke="white" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                   <path d="M6.74391 13.5535L10.4209 13.5723L10.3867 17.2755" stroke="currentColor"
                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                             </span>
                          </div>
                       </a>
                    </li>
                 </ul>
              </div>
           </div>
        </nav>
        
        <script>
           // Assuming you're using Handlebars with Node.js
        
        
        </script>        <!--Nav End-->
      </div>
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
                             
                             <div class="table-responsive my-3">
                                <table class="table table-striped mb-0 dataTable no-footer" id="datatable" data-toggle="data-table" aria-describedby="datatable_info">
                                 <thead>
                                     <tr><th scope="col" class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profiles: activate to sort column descending">Profiles</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Contact: activate to sort column ascending">Contact</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Email ID: activate to sort column ascending">Email ID</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">Country</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Purchases: activate to sort column ascending">Registered</th><th scope="col" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th><th scope="col" class="text-center sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th></tr>
                                 </thead>
                                 <tbody> 
                                     
                                 <tr class="odd">
                                         <td class="sorting_1">
                                             <div class="d-flex align-items-center">
                                                 <img class="rounded img-fluid avatar-65 me-3" src="img/user3.png" alt="" loading="lazy">
                                                 <div class="media-support-info">
                                                 <h5 class="iq-sub-label">Clara Mist</h5>
                                                  </div>
                                             </div>
                                         </td>
                                         <td class="text-dark">(208) 674-3424</td>
                                         <td class="text-dark">mist.e@mail.com</td>
                                         <td class="text-dark">
                                             <svg width="22" class="me-2" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <rect y="5.3335" width="21.3333" height="5.33333" fill="#F5F8FB"></rect>
                                                 <rect width="21.3333" height="5.33333" fill="#2B9F5A"></rect>
                                                 <rect y="10.6665" width="21.3333" height="5.33333" fill="#272727"></rect>
                                                 <rect width="6.66667" height="16" fill="#DC251C"></rect>
                                             </svg>
                                             UAE
                                         </td>
                                         <td class="text-dark">24 Jul 2024</td>
                                         <td>
                                             <span class="badge bg-warning-subtle rounded-pill p-2 text-warning">Pending</span>
                                         </td>
                                         <td>
                                             <div class="d-flex justify-content-evenly gap-1">
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill " href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z" fill="currentColor"></path>
                                                             <path d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>
                                                             <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                             <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                             </div>
                                         </td>
                                     </tr><tr class="even">
                                         <td class="sorting_1">
                                             <div class="d-flex align-items-center">
                                                 <img class="rounded img-fluid avatar-65 me-3" src="img/user4.png" alt="" loading="lazy">
                                                 <div class="media-support-info">
                                                 <h5 class="iq-sub-label">Clinette Mark</h5>
                                                  </div>
                                             </div>
                                         </td>
                                         <td class="text-dark">(208) 346-4687</td>
                                         <td class="text-dark">c.mark@mail.com</td>
                                         <td class="text-dark">
                                             <svg width="18" class="me-2" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <rect width="20" height="15" transform="translate(0 0.5)" fill="#F5F8FB"></rect>
                                                 <circle cx="9.5" cy="7.5" r="3.5" fill="#DC251C"></circle>
                                             </svg>
                                             JPN
                                         </td>
                                         <td class="text-dark">24 Jul 2024</td>
                                         <td>
                                             <span class="badge bg-success-subtle rounded-pill p-2 text-success">Active</span>
                                         </td>
                                         <td>
                                             <div class="d-flex justify-content-evenly gap-1">
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z" fill="currentColor"></path>
                                                             <path d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>
                                                             <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                             <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                             </div>
                                         </td>
                                     </tr><tr class="odd">
                                         <td class="sorting_1">
                                             <div class="d-flex align-items-center">
                                                <img class="rounded img-fluid avatar-65 me-3" src="img/user5.png" alt="" loading="lazy">
                                                <div class="media-support-info">
                                                 <h5 class="iq-sub-label">Dennis Hall</h5>
                                                  </div>
                                             </div>
                                         </td>
                                         <td class="text-dark">(208) 555-0112</td>
                                         <td class="text-dark">dennis.e@mail.com</td>
                                         <td class="text-dark">
                                             <svg width="21" class="me-2" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <g clip-path="url(#clip0_80_4707)">
                                                 <path d="M0 0H21V5.33333H0V0Z" fill="#FF8718"></path>
                                                 <path d="M0 5.3335H21V10.6668H0V5.3335Z" fill="#F5F8FB"></path>
                                                 <path d="M0 10.6665H21V15.9998H0V10.6665Z" fill="#2B9F5A"></path>
                                                 <path d="M11.813 8.00033C11.813 8.73671 11.2254 9.33366 10.5005 9.33366C9.77561 9.33366 9.18799 8.73671 9.18799 8.00033C9.18799 7.26395 9.77561 6.66699 10.5005 6.66699C11.2254 6.66699 11.813 7.26395 11.813 8.00033Z" fill="#F5F8FB"></path>
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4995 7.33333C10.1371 7.33333 9.84326 7.63181 9.84326 8C9.84326 8.36819 10.1371 8.66667 10.4995 8.66667C10.8619 8.66667 11.1558 8.36819 11.1558 8C11.1558 7.63181 10.8619 7.33333 10.4995 7.33333ZM8.53076 8C8.53076 6.89543 9.4122 6 10.4995 6C11.5868 6 12.4683 6.89543 12.4683 8C12.4683 9.10457 11.5868 10 10.4995 10C9.4122 10 8.53076 9.10457 8.53076 8Z" fill="#41479B"></path>
                                                 </g>
                                                 <defs>
                                                 <clipPath id="clip0_80_4707">
                                                 <rect width="21" height="16" fill="white"></rect>
                                                 </clipPath>
                                                 </defs>
                                             </svg>
                                             IND
                                         </td>
                                         <td class="text-dark">21 Jul 2024</td>
                                         <td>
                                             <span class="badge bg-primary-subtle rounded-pill p-2 text-primary">Active</span>
                                         </td>
                                         <td>
                                             <div class="d-flex justify-content-evenly gap-1">
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z" fill="currentColor"></path>
                                                             <path d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>
                                                             <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                             <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                             </div>
                                         </td>
                                     </tr><tr class="even">
                                         <td class="sorting_1">
                                             <div class="d-flex align-items-center">
                                                <img class="rounded img-fluid avatar-65 me-3" src="img/user6.png" alt="" loading="lazy">
                                                <div class="media-support-info">
                                                 <h5 class="iq-sub-label">Elon Musk</h5>
                                                  </div>
                                             </div>
                                         </td>
                                         <td class="text-dark">(208) 555-0112</td>
                                         <td class="text-dark">musk.e@mail.com</td>
                                         <td class="text-dark">
                                             <svg width="18" class="me-2" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <rect y="0.5" width="20" height="13.75" fill="#EEF3F8"></rect>
                                                 <rect y="0.5" width="11.25" height="8.75" fill="#41479B"></rect>
                                                 <rect x="11.25" y="0.5" width="8.75" height="1.25" fill="#DC251C"></rect>
                                                 <rect x="11.25" y="3" width="8.75" height="1.25" fill="#DC251C"></rect>
                                                 <rect x="11.25" y="5.5" width="8.75" height="1.25" fill="#DC251C"></rect>
                                                 <rect x="11.25" y="8" width="8.75" height="1.25" fill="#DC251C"></rect>
                                                 <rect y="10.5" width="20" height="1.25" fill="#DC251C"></rect>
                                                 <rect y="13" width="20" height="1.25" fill="#DC251C"></rect>
                                                 <rect x="1.25" y="1.75" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="3.75" y="1.75" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="6.25" y="1.75" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="8.75" y="1.75" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="1.25" y="4.25" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="3.75" y="4.25" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="6.25" y="4.25" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="2.5" y="5.5" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="5" y="5.5" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="7.5" y="5.5" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="2.5" y="3" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="5" y="3" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="7.5" y="3" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="8.75" y="4.25" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="1.25" y="6.75" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="3.75" y="6.75" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="6.25" y="6.75" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                                 <rect x="8.75" y="6.75" width="1.25" height="1.25" fill="#C5D0EC"></rect>
                                             </svg>
                                                 USA
                                         </td>
                                         <td class="text-dark">20 Jul 2024</td>
                                         <td>
                                             <span class="badge bg-primary-subtle rounded-pill p-2 text-primary">Active</span>
                                         </td>
                                         <td>
                                             <div class="d-flex justify-content-evenly gap-1">
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z" fill="currentColor"></path>
                                                             <path d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>
                                                             <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                             <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                             </div>
                                         </td>
                                     </tr><tr class="odd">
                                         <td class="sorting_1">
                                             <div class="d-flex align-items-center">
                                                <img class="rounded img-fluid avatar-65 me-3" src="img/user7.png" alt="" loading="lazy">
                                                <div class="media-support-info">
                                                 <h5 class="iq-sub-label">Elon Musk</h5>
                                                  </div>
                                             </div>
                                         </td>
                                         <td class="text-dark">(208) 555-0112</td>
                                         <td class="text-dark">musk.e@mail.com</td>
                                         <td class="text-dark">
                                             <svg width="21" class="me-2" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <rect width="21" height="16" fill="#F5F8FB"></rect>
                                                 <rect width="21" height="2" fill="#41479B"></rect>
                                                 <rect y="3" width="21" height="3" fill="#41479B"></rect>
                                                 <rect y="7" width="21" height="2" fill="#41479B"></rect>
                                                 <rect width="9" height="9" fill="#41479B"></rect>
                                                 <rect y="3" width="9" height="3" fill="#F5F8FB"></rect>
                                                 <rect x="3" y="9" width="9" height="3" transform="rotate(-90 3 9)" fill="#F5F8FB"></rect>
                                                 <rect y="10" width="21" height="3" fill="#41479B"></rect>
                                                 <rect y="14" width="21" height="2" fill="#41479B"></rect>
                                             </svg>
                                             GRC
                                         </td>
                                         <td class="text-dark">26 Jul 2024</td>
                                         <td>
                                             <span class="badge bg-primary rounded-pill p-2 text-white">Hold</span>
                                         </td>
                                         <td>
                                             <div class="d-flex justify-content-evenly gap-1">
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z" fill="currentColor"></path>
                                                             <path d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>
                                                             <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                             <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                             </div>
                                         </td>
                                     </tr><tr class="even">
                                         <td class="sorting_1">
                                             <div class="d-flex align-items-center">
                                                <img class="rounded img-fluid avatar-65 me-3" src="img/user8.png" alt="" loading="lazy">
                                                <div class="media-support-info">
                                                 <h5 class="iq-sub-label">Elon Musk</h5>
                                                  </div>
                                             </div>
                                         </td>
                                         <td class="text-dark">(208) 555-0112</td>
                                         <td class="text-dark">musk.e@mail.com</td>
                                         <td class="text-dark">
                                             <svg width="18" class="me-2" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <rect width="21" height="16" fill="#F5F8FB"></rect>
                                                 <ellipse cx="10.5" cy="7.69231" rx="3.5" ry="3.69231" fill="#DC251C"></ellipse>
                                                 <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="7" y="7" width="7" height="5">
                                                 <path d="M14 12.0002V8.30792C12.832 6.15169 10.4961 7.92611 10.4961 7.92611C10.4961 7.92611 8.16538 9.53597 7 7.07715V12.0002H14Z" fill="#C4C4C4"></path>
                                                 </mask>
                                                 <g mask="url(#mask0_80_4853)">
                                                 <ellipse cx="10.5" cy="7.69231" rx="3.5" ry="3.69231" fill="#41479B"></ellipse>
                                                 </g>
                                                 <path d="M2.16455 4.83789L4.32821 1.09033" stroke="black" stroke-width="0.5"></path>
                                                 <path d="M3.12744 5.39551L5.2911 1.64795" stroke="black" stroke-width="0.5"></path>
                                                 <path d="M4.09131 5.95117L6.25496 2.20361" stroke="black" stroke-width="0.5"></path>
                                                 <path d="M18.9995 4.83789L16.8359 1.09033" stroke="black" stroke-width="0.5" stroke-dasharray="8 1"></path>
                                                 <path d="M18.0366 5.39551L15.873 1.64795" stroke="black" stroke-width="0.5"></path>
                                                 <path d="M17.0728 5.95117L14.9091 2.20361" stroke="black" stroke-width="0.5" stroke-dasharray="8 1"></path>
                                                 <path d="M2.16406 11.5049L4.32772 15.2524" stroke="black" stroke-width="0.5"></path>
                                                 <path d="M3.12744 10.9492L5.2911 14.6968" stroke="black" stroke-width="0.5" stroke-dasharray="8 1"></path>
                                                 <path d="M4.09082 10.3926L6.25447 14.1401" stroke="black" stroke-width="0.5"></path>
                                                 <path d="M18.9995 11.5049L16.8359 15.2524" stroke="black" stroke-width="0.5" stroke-dasharray="8 1"></path>
                                                 <path d="M18.0366 10.9492L15.873 14.6968" stroke="black" stroke-width="0.5" stroke-dasharray="8 1"></path>
                                                 <path d="M17.0732 10.3926L14.9096 14.1401" stroke="black" stroke-width="0.5" stroke-dasharray="8 1"></path>
                                             </svg>
                                             S.KO
                                         </td>
                                         <td class="text-dark">29 Jul 2024</td>
                                         <td>
                                             <span class="badge bg-success-subtle rounded-pill p-2 text-success">Complete</span>
                                         </td>
                                         <td>
                                             <div class="d-flex justify-content-evenly gap-1">
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z" fill="currentColor"></path>
                                                             <path d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>
                                                             <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                             <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                             </div>
                                         </td>
                                     </tr><tr class="odd">
                                         <td class="sorting_1">
                                             <div class="d-flex align-items-center">
                                                <img class="rounded img-fluid avatar-65 me-3" src="img/user.png" alt="" loading="lazy">
                                                <div class="media-support-info">
                                                 <h5 class="iq-sub-label">James Mason</h5>
                                                  </div>
                                             </div>
                                         </td>
                                         <td class="text-dark">(208) 326-4679</td>
                                         <td class="text-dark">mason.j@mail.com</td>
                                         <td class="text-dark">
                                             <svg width="18" class="me-2" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <rect y="0.5" width="20" height="15" fill="#F5F8FB"></rect>
                                                 <rect y="0.5" width="6.25" height="15" fill="#2B9F5A"></rect>
                                                 <rect x="13.75" y="0.5" width="6.25" height="15" fill="#DC251C"></rect>
                                             </svg>
                                             ITL
                                         </td>
                                         <td class="text-dark">23 Jul 2024</td>
                                         <td>
                                             <span class="badge bg-primary rounded-pill p-2 text-white">Hold</span>
                                         </td>
                                         <td>
                                             <div class="d-flex justify-content-evenly gap-1">
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z" fill="currentColor"></path>
                                                             <path d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>
                                                             <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                             <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                             </div>
                                         </td>
                                     </tr><tr class="even">
                                         <td class="sorting_1">
                                             <div class="d-flex align-items-center">
                                                <img class="rounded img-fluid avatar-65 me-3" src="img/user.png" alt="" loading="lazy">
                                                <div class="media-support-info">
                                                 <h5 class="iq-sub-label">Jamie Park</h5>
                                                  </div>
                                             </div>
                                         </td>
                                         <td class="text-dark">(208) 778-6878</td>
                                         <td class="text-dark">park.e@mail.com</td>
                                         <td class="text-dark">
                                             <svg width="22" class="me-2" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <rect width="21.3333" height="16" fill="#272727"></rect>
                                                 <rect y="5.3335" width="21.3333" height="5.33333" fill="#E31D1C"></rect>
                                                 <rect y="10.6665" width="21.3333" height="5.33333" fill="#FFD018"></rect>
                                             </svg>
                                             GER
                                         </td>
                                         <td class="text-dark">22 Jul 2024</td>
                                         <td>
                                             <span class="badge bg-danger-subtle rounded-pill p-2 text-danger">Inactive</span>
                                         </td>
                                         <td>
                                             <div class="d-flex justify-content-evenly gap-1">
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z" fill="currentColor"></path>
                                                             <path d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>
                                                             <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                             <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                             </div>
                                         </td>
                                     </tr><tr class="odd">
                                         <td class="sorting_1">
                                             <div class="d-flex align-items-center">
                                                <img class="rounded img-fluid avatar-65 me-3" src="img/user2.png" alt="" loading="lazy">
                                                <div class="media-support-info">
                                                 <h5 class="iq-sub-label">Marie Clark</h5>
                                                  </div>
                                             </div>
                                         </td>
                                         <td class="text-dark">(208) 262-238</td>
                                         <td class="text-dark">mclark@mail.com</td>
                                         <td class="text-dark">
                                             <svg width="18" class="me-2" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <rect width="20" height="15" transform="translate(0 0.5)" fill="#FFD018"></rect>
                                                 <rect y="0.5" width="20" height="3.75" fill="#DC251C"></rect>
                                                 <rect y="11.75" width="20" height="3.75" fill="#DC251C"></rect>
                                                 <rect x="3.75" y="5.5" width="2.5" height="2.5" fill="#DC251C"></rect>
                                                 <path d="M3.75 8H6.25V10.5H4.75C4.19772 10.5 3.75 10.0523 3.75 9.5V8Z" fill="#FF8718"></path>
                                                 <path d="M6.25 8H8.75V9.5C8.75 10.0523 8.30228 10.5 7.75 10.5H6.25V8Z" fill="#DC251C"></path>
                                                 <rect x="6.25" y="5.5" width="2.5" height="2.5" fill="#A6A6A6"></rect>
                                                 <circle cx="6.25" cy="8" r="0.625" fill="#41479B"></circle>
                                             </svg>
                                             SPN
                                         </td>
                                         <td class="text-dark">27 Jul 2024</td>
                                         <td>
                                             <span class="badge bg-warning-subtle rounded-pill p-2 text-warning">Pending</span>
                                         </td>
                                         <td>
                                             <div class="d-flex justify-content-evenly gap-1">
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z" fill="currentColor"></path>
                                                             <path d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>
                                                             <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>
                                                             <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                                 <a class="btn btn-primary btn-icon btn-sm rounded-pill" href="#" role="button">
                                                     <span class="btn-inner">
                                                         <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                             <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                         </svg>
                                                     </span>
                                                 </a>
                                             </div>
                                         </td>
                                     </tr></tbody>
                             </table></div>
                             <div class="clear"></div></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         
      </div>
      <!-- Footer Section Start -->
      <footer class="footer">
          <div class="footer-body">
              <ul class="left-panel list-inline mb-0 p-0">
                  <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                  <li class="list-inline-item"><a href="#">Terms of Use</a></li>
              </ul>
              <div class="right-panel">
                  ©<script>2024</script> <span>Prompt Filings</span>, Built for the Future by <a href="https://brandlessdigital.com/" target="_blank">Brandless Digital</a>.
              </div>
          </div>
      </footer>
      <!-- Footer Section End -->
</x-app-layout>
