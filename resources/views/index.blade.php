@foreach ($task as tasks)
    <li>{{ $task->id }} - {{ $task->title }} - {{$task->create_at}}</li> 
        {{  }} {{  }}    
@endforeach
