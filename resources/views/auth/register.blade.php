<x-guest-layout>
   
    <section class="login-content">
    <div class="row m-0 align-items-center bg-white vh-100">
    <div class="col-md-5 d-md-block d-none bg-primary p-0 vh-100 overflow-hidden">
    <img src="https://images.pexels.com/photos/3791130/pexels-photo-3791130.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
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
                                 <h3 class="mb-4 text-center">Create your account</h3>
                                 <p class="text-center">Let Prompt Filings streamline the process.</p>
                                 <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="row">
       
        
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


        <!-- Prefix -->
        <div class="col-lg-2">
            <div class="form-group">
                <label for="prefix" class="form-label">Prefix</label>
                <select id="prefix" name="prefix" class="form-control" required>
                    <option value="Mr" {{ old('prefix') == 'Mr' ? 'selected' : '' }}>Mr</option>
                    <option value="Ms" {{ old('prefix') == 'Ms' ? 'selected' : '' }}>Ms</option>
                    <option value="Mrs" {{ old('prefix') == 'Mrs' ? 'selected' : '' }}>Mrs</option>
                    <option value="Dr" {{ old('prefix') == 'Dr' ? 'selected' : '' }}>Dr</option>
                    <option value="Prof" {{ old('prefix') == 'Prof' ? 'selected' : '' }}>Prof</option>
                </select>
                <x-input-error :messages="$errors->get('prefix')" class="mt-2" />
            </div>
        </div>

        <!-- First Name -->
        <div class="col-lg-5">
            <div class="form-group">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="name" :value="old('name')" required>
                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
            </div>
        </div>

        <!-- Last Name -->
        <div class="col-lg-5">
            <div class="form-group">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" :value="old('last_name')" required>
                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            </div>
        </div>


        <!-- Email -->
        <div class="col-lg-6">
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>


        <!-- Phone Number -->
        <div class="col-lg-6">
            <div class="form-group">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" :value="old('phone_number')" required>
                <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
            </div>
        </div>

        
        <!-- Password -->
        <div class="col-lg-6">
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>

        
        <!-- Package ID (default to 1) -->
        <div class="col-lg-6">
            <div class="form-group">
                <input type="hidden" name="package_id" value="1">
            </div>
        </div>

        

        <!-- Terms & Conditions -->
        <div class="col-lg-12 d-flex justify-content-center">
            <div class="form-check mb-3 d-flex align-items-center justify-content-center">
                <input type="checkbox" class="form-check-input me-2" id="customCheck1" required>
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
                         <img src="/img/pf-symbol.png" style="position: fixed; right:-100px;opacity: .1;transform: rotate(-45deg);" width="300" alt="">
                     </div>
                  </div>
               </div>
            </section>
</x-guest-layout>
