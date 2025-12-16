<x-base-layout>
    <h1>Admin panel</h1>
    <div class="backgroundColor">
        <a href="{{ route('dashboard.teams') }}" class="adminButtons">Teams</a>
        <a href="{{ route('dashboard.tournaments') }}" class="adminButtons">Toernooi</a>
            <table class="teamsTable">
                <thead>
                    <th>Toernooi</th>
                    <th>Datum</th>
                    <th>Locatie</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($tournaments as $tournament)
                        <tr>
                            <td>{{ $tournament->name }}</td>
                            <td>{{ $tournament->start_date->format('j-n-Y') }}</td>
                            <td>{{ $tournament->location }}</td>
                            <td><a href="{{ route('dashboard.tournamentDetails', $tournament->id) }}" class="view">View</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</x-base-layout>
