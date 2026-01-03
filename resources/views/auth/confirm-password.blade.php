<x-base-layout>

    <h1>Wachtwoord bevestigen</h1>
    <div class="backgroundColor">
    
        <div class="formText">
            {{ __('Bevestig je wachtwoord') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="formText">
                <x-input-label for="password" :value="__('Wachtwoord')" />

                <x-text-input id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" />
            </div>

            <div>
                <x-primary-button class="formButton">
                    {{ __('Confirm') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-base-layout>
