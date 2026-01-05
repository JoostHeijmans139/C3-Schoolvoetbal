<x-base-layout>
    <h1>Admin panel</h1>
    <div class="backgroundColor">
        <a href="{{ route('dashboard.teams') }}" class="adminButtons">Teams</a>
        <a href="{{ route('dashboard.tournaments') }}" class="adminButtons">Toernooi</a>
        <table class="teamsTable">
            <thead>
                <th>Teams</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <td>{{$team->name}}</td>
                        <td><a href="{{ route('team.edit', $team->id) }}" class="edit">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-base-layout>
