<x-base-layout>
    <h1>Teambeheer</h1>
    <div class="backgroundColor">
        
        <h2 class="teamName">{{ $team->name }}</h2>
        <table class="teamTable">
            <thead>
                <th>Speler</th>
                <th>Rugnummer</th>
            </thead>
            <tbody>
            @foreach ($players as $player)
                <tr>
                    <td>{{ $player->name }}</td>
                    <td class="number">{{ $player->shirt_number }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a href="{{ route('team.edit', $team->id) }}" class="formButton">Team bewerken</a>



    </div>
</x-base-layout>
