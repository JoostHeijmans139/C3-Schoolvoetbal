<x-base-layout>
    <h1>Toernooi aanmaken</h1>
    <div class="backgroundColor">
        @if ($errors->any())
        <div class="errormessages">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('tournaments.store') }}" method="POST">
            @csrf
            <div class="formGroup">
                <label>Naam toernooi: </label>
                <input type="text" name="name" class="textInput">
            </div>

            <div class="formGroup">
                <label>Locatie: </label>
                <input type="text" name="location"class="textInput">
            </div>

            <div class="formGroup">
                <label>Capaciteit: </label>
                <input type="number" name="capacity" min="2" max="50" class="numberInput">
            </div>

            <div class="formGroup">
                <label>Startdatum: </label>
                <input type="date" name="start_date" min="{{ date('Y-m-d') }}" class="numberInput">
            </div>

            <input type="submit" value="Aanmaken">
        </form>
    </div>
</x-base-layout>
