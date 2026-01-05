<x-base-layout>

    <h1>Wachtwoord vergeten</h1>
    <div class="backgroundColor">

    <x-auth-session-status :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="resetForm">
        @csrf

        <div class="formText">
            {{ __('Voer je email in om een nieuw wachtwoord in te stellen.') }}
        </div>

        <div class="formGroup">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div>
            <x-primary-button class="formButton">
                {{ __('Wachtwoord resetten') }}
            </x-primary-button>
        </div>
    </form>
</x-base-layout>
