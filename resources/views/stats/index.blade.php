<x-app-layout>
    <header>
        <h1>Statistieken</h1>
    </header>

    <table class="table-fixed">
        <thead>
        <tr>
            <th>Naam</th>
            <th>E-mailadres</th>
            <th>Dagen streak</th>
        </tr>
        </thead>

        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
            </tr>

            <tr>
                <td>{{$user->email}}</td>
            </tr>

            <tr>
                <td>{{$user->streak_counter}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
