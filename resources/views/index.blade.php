@foreach ($tasks as $task)
<ul>
    <li>{{ $task->id }} - {{ $task->titre }} - </li> 
</ul>        
@endforeach
