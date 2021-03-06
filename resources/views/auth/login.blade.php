<x-guest-layout>
    <img class="w-24 lg:w-52 absolute right-0 top-0"
    src="https://media0.giphy.com/media/TRub2cQyyLihIu0Ufa/giphy.gif?cid=790b7611pkopl8g1g64qitme7eqmfeghfh0961g2lazkkb7g&rid=giphy.gif&ct=s" />
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-white" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" class="font-amiri">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('البريد الإلكتروني')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('كلمة السر')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-lg text-white">{{ __('تذكرني') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">

                {{-- @if (Route::has('password.request'))
                    <a class="underline text-base text-white hover:text-green-200" href="{{ route('password.request') }}">

                        {{ __('هل نسيت كلمة السر ؟  ') }}
                    </a>
                @endif --}}

                <x-button class="ml-3 ">
                    دخول
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
