<x-base-layout>
    <h1>Tournament inschrijven</h1>
    <div class="backgroundColor">
        
        <h2 class="teamName">Schrijf '{{ $team->name }}' in voor een tournament</h2>
        <table>
            <thead>
                <th>Tournament</th>
                <th>Datum</th>
                <th>Locatie</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($available as $tournament)
                    <tr>
                        <td>{{ $tournament->name }}</td>
                        <td>{{ $tournament->start_date->format('j-n-Y') }}</td>
                        <td>{{ $tournament->location }}</td>
                        <td>
                            <form action="{{ route('team.signup', [$team->id, $tournament->id]) }}" method="POST">
                                @csrf
                                <input type="submit" class="enroll" value="Inschrijven"/>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-base-layout>
