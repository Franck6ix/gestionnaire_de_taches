            <div class="bg-white rouded-lg shadow-lg overflow-hidden">
                @foreach ($tasks as $task)
            <ul>
        <li>{{ $task->id }} - {{ $task->titre }} - </li> 
            </ul>
                @endforeach
            </div>
    <div>
<a href="{{ route('formulaire') }}">Création de Tache</a>
    </div>