<x-base-layout>
    <h1>Team editen</h1>
    <form class="createTeamForm backgroundColor" action="{{ route('team.update', $team->id) }}" method="POST">
        @csrf
        @method("PUT")
        @error("teamname")
        <div>{{ $message }}</div>
        @enderror
        <div class="formGroup">
            <label for="name">Teamnaam</label>
            <input type="text" id="teamname" name="teamname" value="{{ $team->name }}">
        </div>
        @error("location")
        <div>{{ $message }}</div>
        @enderror
        <div class="formGroup">
            <label for="location">Locatie</label>
            <input type="text" id="location" name="location" value="{{ $team->location }}">
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
            <tbody id="players" data-count="{{$players->count()}}">
                @for ($i = 0; $i < $players->count(); $i++)
                    <tr class="player">
                        <input type="hidden" name="players[{{$i}}][id]" value="{{$players[$i]->id}}">
                        <td><input class="player-input" type="button" onclick="DeleteThis(event)" value="-"></td>
                        <td><input class="player-input" type="text" name="players[{{$i}}][name]" id="name" value="{{ $players[$i]->name }}" required></td>
                        <td><input class="player-input" type="number" name="players[{{$i}}][shirt_number]" id="shirt_number" value="{{ $players[$i]->shirt_number }}" required></td>
                    </tr>
                    @endfor
            </tbody>
        </table>
        <input type="submit" value="Team aanpassen">
    </form>

    <script src="{{ asset('js/player.js') }}" onload="SetPlayercount()"></script>
</x-base-layout>
