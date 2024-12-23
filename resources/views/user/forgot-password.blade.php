<x-app-layout>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Forgot Your Password?</h4>
                </div>
                <div class="card-body">
                    <!-- Success Message -->
                    @if (session('status'))
                        <div class="alert alert-success text-center">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Instruction Text -->
                    <p class="text-muted text-center">
                        Enter your registered email address, and we'll send you a link to reset your password.
                    </p>

                    <!-- Forgot Password Form -->
                    <form method="POST" action="{{ route('password.forgot') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label fw-bold">Email Address</label>
                            <input 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                id="email" 
                                name="email" 
                                placeholder="Enter your email address" 
                                required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Send Reset Link
                            </button>
                        </div>
                    </form>

                    <!-- Back to Login -->
                    <div class="mt-4 text-center">
                        <a href="{{ route('login') }}" class="text-decoration-none">
                            <i class="bi bi-arrow-left-circle"></i> Back to Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
