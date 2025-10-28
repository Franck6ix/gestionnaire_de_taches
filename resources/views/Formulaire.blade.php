<h4>Création d'une Tache</h4>

<form action="{{ route('formulaire') }}" method="POST">
    @csrf



        <div>
    <label for="title">Titre :</label>
    <input type="text" id="title" name="titre" required>
        </div>
        <div>
    <label for="Atribution">Attribution:</label>
<select id="Atribution" name="user_id" required>
<option value="1">1</option>
<option value="2">2</option>
</select>
    {{-- <input type="text" id="Atribution" name="Atribution" >   --}}
<button type="submit">Créer la Tache</button>        
</div>
            
