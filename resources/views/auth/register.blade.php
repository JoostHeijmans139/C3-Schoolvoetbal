<x-base-layout>

    <h1>Registreren</h1>
    <div class="backgroundColor">

        <form method="POST" action="{{ route('register') }}" class="registerForm">
            @csrf

            <div class="formGroup">
                <x-input-label for="name" :value="__('Naam')" />
                <x-text-input id="name" class="input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" />
            </div>

            <div class="formGroup">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <div class="formGroup">
                <x-input-label for="password" :value="__('Wachtwoord')" />

                <x-text-input id="password" class="input"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" />
            </div>

            <div class="formGroup">
                <x-input-label for="password_confirmation" :value="__('Bevestig wachtwoord')" />

                <x-text-input id="password_confirmation" class="input"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" />
            </div>

            <div class="formLinks">
                <x-primary-button class="formButton">
                    {{ __('Registreer') }}
                </x-primary-button>

                <a href="{{ route('login') }}" class="registerAccount" >
                    {{ __('Heb je al een account?') }}
                </a>
            </div>
        </form>
    </div>
</x-base-layout>
