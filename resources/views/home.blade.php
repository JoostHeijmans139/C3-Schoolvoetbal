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
                <th>Score</th>
            </thead>
            <tbody>
                @foreach ($games as $game)
                <tr>
                    <td>{{ $game->tournament()->get()[0]->location }}</td>
                    <td>{{ $game->start->format('H:i') }}</td>
                    <td>{{ $game->start->format('j-n-Y') }}</td>
                    <td>{{ $game->team1()->get()[0]->name }}</td>
                    <td>{{ $game->team2()->get()[0]->name }}</td>

                @if ($game->score_team_1 == null && $game->score_team_2 == null)
                    @guest
                        <td> - </td>
                    @endguest

                    @auth
                    @if (auth()->user()->role == 'referee')
                    <td class="scoreTable">
                        <form action=" {{ route('games.update', $game->id) }}" method="POST">
                            @csrf
                            @method('PUT') 
                            <input type="number" class="scoreInput" min="0" name="score_team_1" placeholder="0">
                            <span class="scoreDivider">-</span>
                            <input type="number" class="scoreInput" min="0" name="score_team_2" placeholder="0">
                            <input type="submit" class="scoreSubmit" value="Toevoegen">
                        </form>
                    </td>
                    @else
                    <td>-</td>
                    @endif
                    @endauth
                @else
                    <td>{{ $game->score_team_1 }} - {{ $game->score_team_2 }}</td>
                @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-base-layout>
