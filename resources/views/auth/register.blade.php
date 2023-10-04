<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <link href="{{ asset('../css/register.css') }}" rel="stylesheet">
            </a>
        </x-slot>
        
<div class="container">
        <!-- Validation Errors -->
        <img src="{{ asset('image/broodjes1.png') }}" alt="Broodje Gezond Afbeelding" width="200" height="100" class="broodimg" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <h2>bijnaaa!!<br> nog even...</h2>


        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="inlog">
            <div>


                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="Naam" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
            <br>
            <br>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="Email" />
            </div>

            <!-- Password -->
            <div class="mt-4">
            <br>
            <br>

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Wachtwoord" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
            <br>
            <br>

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required placeholder="Bevestig Wachtwoord" />
            </div>

            <div class="block mt-4">
                <label for="terms" class="inline-flex items-center">
                    <input id="terms" type="checkbox" name="terms" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <span class="ml-2 text-sm text-gray-600">{{ __('I accept the terms and conditions') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('login') }}" class="underline text-sm text-gray-600 hover:text-gray-900">{{ __('Already registered?') }}</a>
     
                <br>
                <div class="btn">
                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
            </div>
            </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
