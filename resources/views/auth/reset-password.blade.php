<x-base-layout>
    <form method="POST" action="{{ route('password.store') }}" class="resetForm">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="emailInput">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="input" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div class="passwordInput">
            <x-input-label for="password" :value="__('Wachtwoord')" />
            <x-text-input id="password" class="input" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <!-- Confirm Password -->
        <div class="passwordInput">
            <x-input-label for="password_confirmation" :value="__('Bevestig wachtwoord')" />

            <x-text-input id="password_confirmation" class="input"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>

        <div>
            <x-primary-button class="formButton">
                {{ __('Reset wachtwoord') }}
            </x-primary-button>
        </div>
    </form>
</x-base-layout>
