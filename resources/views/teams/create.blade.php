<x-base-layout>
    <h1>Team aanmaken</h1>
    <form class="createTeamForm" action="{{ route('team.store') }}" method="POST">
        @csrf
        @error("teamname")
        <div>{{ $message }}</div>
        @enderror
        <div class="formGroup">
            <label for="name">Teamnaam</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
        </div>
        @error("location")
        <div>{{ $message }}</div>
        @enderror
        <div class="formGroup">
            <label for="location">Locatie</label>
            <input type="text" id="location" name="location" value="{{ old('location') }}">
        </div>
        @error("players")
        <div>{{ $message }}</div>
        @enderror
        @error("players.*")
        <div>{{ $message }}</div>
        @enderror
        <table>
            <thead>
                <th><button id="itemButton" onclick="NewItem()" type="button">+</button></th>
                <th>Naam</th>
                <th>rugnummer</th>
            </thead>
            <tbody id="players">
            </tbody>
        </table>
        <input type="submit" value="Team aanmaken">
    </form>

    <script src="{{ asset('js/player.js') }}" onload="NewItem()"></script>
</x-base-layout>
