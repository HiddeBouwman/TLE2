@foreach($task->facts as $fact)
    <p>{{ $fact->name }}</p>
    <p>{{ $fact->description }}</p>
    <p>{{ $fact->scenario }}</p>
@endforeach


<p>{{ $task->question }}</p>

@foreach($task->answers as $answer)
    <p>{{ $answer->option }}</p>
@endforeach

