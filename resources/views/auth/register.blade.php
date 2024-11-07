<x-guest-layout>
   
    <section class="login-content">
               <div class="row m-0 align-items-center bg-white vh-100">
                     <div class="col-md-6 d-md-block d-none bg-primary p-0 vh-100 overflow-hidden">
                     <img src="https://images.pexels.com/photos/3791130/pexels-photo-3791130.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="img-fluid gradient-main animated-scaleX" alt="images" loading="lazy">
                  </div>
                  <div class="col-md-6">
                     <div class="row justify-content-center">
                        <div class="col-md-10">
                           <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
                              <div class="card-body">
                                 <a href="#" class="navbar-brand d-flex align-items-center mb-3 justify-content-center">
                                    <!--Logo start-->
                                    <div class="logo-main">
                                        <div class="logo-normal mb-2">
                                            <img src="https://promptfilings.com/wp-content/uploads/2024/03/logo-h-1.png" alt="Logo" width="170">
                                        </div>
                                        <div class="logo-mini">
                                            <img src="https://promptfilings.com/wp-content/uploads/2024/03/logo-h-1.png" alt="Logo" width="200">
                                        </div>
                                    </div>
                                    <!--logo End-->
                                     
                                 </a>
                                 <h3 class="mb-4 text-center">Create your account</h3>
                                 <p class="text-center">Let Prompt Filings streamline the process.</p>
                                 <form method="POST" action="{{ route('register') }}">
                                 @csrf
                                    <div class="row">
                                    <div hidden>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', 'John Doe')"  autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
             <!-- Role -->
        <div hidden>
            <x-input-label for="role" :value="__('Role')" />
            <select id="role" name="role" class="block mt-1 w-full" required>
                <option value="customer" {{ old('role') == 'customer' ? 'selected' : '' }}>Customer</option>
                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="staff" {{ old('role') == 'staff' ? 'selected' : '' }}>Staff</option>
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label for="email" class="form-label">Email</label>
                                             <input type="email" class="form-control" id="email" type="email" name="email" :value="old('email')" required autocomplete="username">
                                             <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                       </div>
                                       
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label for="password" class="form-label">Password</label>
                                             <input type="password" class="form-control" id="password"  name="password"
                                             required autocomplete="new-password">
                                             <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                          </div>
                                       </div>
                                     
                                       <div class="col-lg-12 d-flex justify-content-center">
                                          <div class="form-check mb-3">
                                             <input type="checkbox" class="form-check-input" id="customCheck1" required>
                                             <label class="form-check-label" for="customCheck1">I agree with the terms of use</label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                       <button type="submit" class="btn btn-primary">Sign Up</button>
                                    </div>
                                    
                                    <p class="mt-3 text-center">
                                       Already have an Account <a href="{{ route('login') }}" class="text-underline">Sign In</a>
                                    </p>
                                    
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sign-bg sign-bg-right">
                         <img src="https://promptfilings.com/wp-content/uploads/2024/04/symbol-300x300.png" style="position: fixed; right:-100px;opacity: .1;transform: rotate(-45deg);" width="300" alt="">
                     </div>
                  </div>
               </div>
            </section>
</x-guest-layout>
