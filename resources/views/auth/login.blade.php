<x-base-layout>
    <x-auth-session-status :status="session('status')" />

    <h1>Inloggen</h1>
    <div class="backgroundColor">

        <form method="POST" action="{{ route('login') }}" class="loginForm">
            @csrf

            <div class="formGroup">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <div class="formGroup">
                <x-input-label for="password" :value="__('Wachtwoord')" />

                <x-text-input id="password" class="input"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" />
            </div>

            <div class="formLinks">
                <x-primary-button class="formButton">
                    {{ __('Inloggen') }}
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
    </div>
</x-base-layout>
