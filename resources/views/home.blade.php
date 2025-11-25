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
                            <td>{{ $tournament->start_date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="options">
            <p>Voeg Team Toe</p>
            <p>Meedoen aan Wedstrijd</p>
            <p>Uitloggen</p>
        </div>
</x-base-layout>
