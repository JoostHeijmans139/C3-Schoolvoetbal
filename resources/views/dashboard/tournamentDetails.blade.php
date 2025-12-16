<x-base-layout>
    <h1>{{ $tournament->name }}</h1>
    <div class="backgroundColor">

        <h2>Locatie</h2>
        <p>{{ $tournament->location }}</p>

        <h2>Datum</h2>
        <p>{{ $tournament->start_date->format('j-n-Y') }}</p>

        <h2>Capaciteit</h2>
        <p>{{ $tournament->capacity }}</p>

        <div>
            <table>
                <thead>
                    <th>Team naam</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($tournament->teams as $team)
                        <tr>
                            <td>{{ $team->name }}</td>
                            <td>
                                <form action="{{ route('tournament.teams.remove', [$tournament->id, $team->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Verwijderen">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-base-layout>
