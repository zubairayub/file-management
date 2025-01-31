<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <section class="login-content">
               <div class="row m-0 align-items-center bg-white vh-100">
                     <div class="col-md-6 d-md-block d-none bg-primary p-0 vh-100 overflow-hidden">
                     <img src="https://images.pexels.com/photos/6863336/pexels-photo-6863336.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="img-fluid gradient-main animated-scaleX" alt="images" loading="lazy">
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
                                            <img src="/img/logo-h-1.png" alt="Logo" width="170">
                                        </div>
                                        <div class="logo-mini">
                                            <img src="/img/logo-h-1.png" alt="Logo" width="200">
                                        </div>
                                    </div>
                                    <!--logo End-->
                                     
                                 </a>
                                 <h3 class="mb-4 text-center">Sign In</h3>
                                 <p class="text-center">Let Prompt Filings streamline the process.</p>
                                 <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="form-group">
                                             <label for="email" class="form-label">Email</label>
                                             <input type="email" class="form-control" id="email" aria-describedby="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                             <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="form-group">
                                             <label for="password" class="form-label">Password</label>
                                             <input type="password" class="form-control" id="password" aria-describedby="password"  name="password"
                                             required autocomplete="current-password">
                                             <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                       </div>
                                       <div class="col-lg-12 d-flex justify-content-between">
                                          <div class="form-check mb-3 d-flex align-items-center justify-content-between">
                                             <input type="checkbox" class="form-check-input me-2" id="customCheck1">
                                             <label class="form-check-label" for="customCheck1">Remember Me</label>
                                          </div>
                                          <a href="{{ route('password.request') }}">Forgot Password?</a>
                                       </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                       <button type="submit" class="btn btn-primary">Sign In</button>
                                    </div>
                                   
                                    <p class="mt-3 text-center">
                                       Don’t have an account? <a href="{{ route('register') }}" class="text-underline">Click here to sign up.</a>
                                    </p>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sign-bg sign-bg-right">
                         <img src="/img/pf-symbol.png" style="position: fixed; right:-100px;opacity: .1;transform: rotate(-45deg);" width="300" alt="">
                     </div>
                  </div>
               </div>
            </section>
    
</x-guest-layout>
