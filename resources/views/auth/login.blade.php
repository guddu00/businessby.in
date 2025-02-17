<x-guest-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Business Buy - Login</title>
        @include('include.css')
    </head>
    <body>
    
    <!-- Start Header Section -->
    @include('include.header')
    <!-- End Header Section -->

    <section class="w-full py-3 login-bg d-block py-md-5 tp-mt">
        <div class="container pt-3 pt-md-0">
            <div class="flex-wrap row d-flex justify-content-center">
                <div class="col-md-5 col-sm-5 position-relative">
                    
                    <form method="POST" action="{{ route('login') }}" class="box">
                        @csrf
                        <h1>Login</h1>

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                <span class="text-sm text-gray-600 ms-2 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-primary-button class="ms-3">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
                <div class="lines">
                    <div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div>
                    <div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div>
                    <div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Footer Section -->
    @include('include.footer')
    <!-- End Footer Section -->
@include('include.js')
    </body>
    </html>
</x-guest-layout>
