<x-base-layout>
    <h1>Aankomende wedstrijden</h1>
    <div class="backgroundColor">
        <table class="teamsTable">
            <thead>
                <th>Locatie</th>
                <th>Tijd</th>
                <th>Datum</th>
                <th>Team 1</th>
                <th>Team 2</th>
            </thead>
            <tbody>
                @foreach ($games as $game)
                    <tr>
                        <td>{{ $game->tournament()->get()[0]->location }}</td>
                        <td>{{ $game->start->format('H:i') }}</td>
                        <td>{{ $game->start->format('j-n-Y') }}</td>
                        <td>{{ $game->team1()->get()[0]->name }}</td>
                        <td>{{ $game->team2()->get()[0]->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-base-layout>
