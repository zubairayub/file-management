<x-guest-layout>
    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-center text-gray-800 dark:text-white mb-4">
            Forgot Your Password?
        </h2>
        <p class="text-sm text-gray-600 dark:text-gray-400 text-center mb-6">
            {{ __('No problem! Enter your registered email address below, and we’ll send you a password reset link.') }}
        </p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email Address')" />
                <x-text-input 
                    id="email" 
                    class="block mt-1 w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-700 focus:border-indigo-500 dark:focus:border-indigo-400" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required 
                    autofocus 
                    placeholder="Enter your email address"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end">
                <x-primary-button class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 text-white rounded-lg shadow-md">
                    {{ __('Send Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>

        <!-- Back to Login -->
        <div class="mt-6 text-center">
            <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:underline dark:text-indigo-400">
                {{ __('Back to Login') }}
            </a>
        </div>
    </div>
</x-guest-layout>
