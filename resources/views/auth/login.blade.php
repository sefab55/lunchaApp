<body>
    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <a href="/">


                    <link href="{{ asset('../css/login.css') }}" rel="stylesheet">
                </a>
            </x-slot>
            <div class="container">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <img src="{{ asset('image/broodjes1.png') }}" alt="Broodje Gezond Afbeelding" width="150" height="75" class="broodimg" />
                    
                    <h2>Daar ben je weer <br> lekker he...</h2>

                    <div class="inlog">
                         <div class="inlog">
                        <!-- Email Address -->
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />
                       <br>
                       <br>
                        <!-- Password -->
                        <x-input id="password" class="block mt-4 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Wachtwoord"  />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <br>
                    <x-button class="btn">
                    <input type="hidden" name="return_to" value="{{ route('filter.index') }}">
                        </x-button>

                        <br>
                        <br>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                    </div>
                </form>
            </div>
        </x-auth-card>
    </x-guest-layout>
</body>

 
 
