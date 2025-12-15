<x-base-layout>
    <h1>Teams beheren</h1>
    <table>
        <thead>
            <th>Naam</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($teams as $team)
                <tr>
                    <td>{{$team->name}}</td>
                    <td><a href="{{ route('team.edit', $team->id) }}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-base-layout>
