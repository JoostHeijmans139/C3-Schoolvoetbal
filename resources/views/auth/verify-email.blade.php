<x-base-layout>

    <h1>Email bevestigen</h1>
    <div class="backgroundColor">

        <div class="formText">
            {{ __('Verifieer je email met de verificatielink die verstuurd is naar je email.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="formText">
                {{ __('Een nieuwe verificatielink is verstuurd') }}
            </div>
        @endif

        <div>
            <form method="POST" action="{{ route('verification.send') }}" class="resetForm">
                @csrf

                <div>
                    <x-primary-button class="formButton">
                        {{ __('Verstuur verificatielink opnieuw') }}
                    </x-primary-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="resetForm">
                @csrf

                <button type="submit" class="formButton">
                    {{ __('Uitloggen') }}
                </button>
            </form>
        </div>    
    </div>
</x-base-layout>
