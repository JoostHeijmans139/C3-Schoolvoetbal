<x-base-layout>
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
        <label>Naam toernooi: </label>
        <input type="text" name="name">
        <br>
        <label>Capaciteit: </label>
        <input type="number" name="capacity" min="2" max="50">
        <br>
        <label>Locatie: </label>
        <input type="text" name="location">
        <br>
        <label>Startdatum: </label>
        <input type="date" name="start_date" min="{{ date('Y-m-d') }}">
        <br>

        <input type="submit" value="Save">
    </form>
</x-base-layout>
