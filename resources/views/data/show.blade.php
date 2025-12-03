@foreach($users as $user)

<h1>Tasks for {{ $user->name }}</h1>

<ul>
    @foreach ($user->tasks as $task)
        <li>
            <strong>{{ $task->question }}</strong><br>
            <strong>{{ $task->assignment }}</strong><br>
            Assigned on: {{ $task->pivot->date }}
            User ID: {{ $task->pivot->user_id }}
            Task ID: {{ $task->pivot->task_id }}
        </li>
    @endforeach
</ul>
@endforeach

