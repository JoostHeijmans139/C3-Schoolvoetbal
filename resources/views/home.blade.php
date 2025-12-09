<x-base-layout>
    <div class="table">
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
    </div>

    <div class="options">
        <br>
        <a href="{{ route('team.create') }}">Voeg team toe</a>
        <br>
        <p>Meedoen aan Wedstrijd</p>
        <br>
        <a href="{{ route('tournaments.create') }}">Toernooi Aanmaken</a>
        <br>
        <br>
        <p>Uitloggen</p>
        <br>
    </div>
</x-base-layout>
