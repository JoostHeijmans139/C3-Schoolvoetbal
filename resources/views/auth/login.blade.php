<x-base-layout>
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="loginForm">
        @csrf

        <!-- Email Address -->
        <div class="emailInput">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div class="passwordInput">
            <x-input-label for="password" :value="__('Wachtwoord')" />

            <x-text-input id="password" class="input"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div class="formLinks">
            <x-primary-button class="formButton">
                {{ __('Login') }}
            </x-primary-button>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forgotPassword">
                    {{ __('Wachtwoord vergeten?') }}
                </a>
            @endif
            <span> | </span>

            <a href="{{ route('register') }}" class="registerAccount">
                {{ __('Nog geen account?') }}
            </a>
        </div>

    </form>
</x-base-layout>
