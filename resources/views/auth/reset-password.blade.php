<x-base-layout>

    <h1>Reset wachtwoord</h1>
    <div class="backgroundColor">
         
        <form method="POST" action="{{ route('password.store') }}" class="resetForm">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="formGroup">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="input" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <div class="formGroup">
                <x-input-label for="password" :value="__('Wachtwoord')" />
                <x-text-input id="password" class="input" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" />
            </div>

            <div class="formGroup">
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
    </div>
</x-base-layout>
