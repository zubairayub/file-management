<x-guest-layout>
   
    <section class="login-content">
    <div class="row m-0 align-items-center bg-white vh-100">
    <div class="col-md-5 d-md-block d-none bg-primary p-0 vh-100 overflow-hidden">
    <img src="https://images.pexels.com/photos/5473956/pexels-photo-5473956.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
         class="img-fluid gradient-main animated-scaleX" alt="images" loading="lazy" 
         style="height: 100%; width: auto; object-fit: cover;">
</div>
                  <div class="col-md-7">
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
                                 <h3 class="mb-4 text-center">Forget Password?</h3>
                                 <p class="text-center">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                                 <form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="row">
       
         
 


        <!-- Email -->
        <div class="col-lg-12">
            <div class="form-group text-center">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email"  class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>
    
    </div>

    <div class="d-flex justify-content-center">
        <x-primary-button  class="btn btn-primary">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
    </div>
     
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


 
 