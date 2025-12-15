<x-base-layout>
    <div class="homepage">
            <table>
                <thead>
                    <th>naam</th>
                    <th>capaciteit</th>
                    <th>locatie</th>
                    <th>start datum</th>
                </thead>
                <tbody>
                    @foreach ($tournaments as $tournament)
                        <tr>
                            <td>{{ $tournament->name }}</td>
                            <td>{{ $tournament->capacity }}</td>
                            <td>{{ $tournament->location }}</td>
                            <td>{{ $tournament->start_date->format('j-n-Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        <div class="options">
            <a href="{{ route('team.create') }}">Team Aanmaken</a>
            <p>Meedoen aan Wedstrijd</p>
            <a href="{{ route('createTournament') }}">Toernooi Aanmaken</a>
        </div>
    </div>
</x-base-layout>
