@csrf
<label for="platform-name">Nom de la Console : </label>
<input type="text" name="name" id="platform-name" value="{{ old('name') ?? $platform->name }}"><br>
<select name="societe_id">
    <option selected>Selectionner un constructeur</option>
    @foreach($constructeurs as $constructeur)
    <option value="{{ $constructeur->id }}" {{ $platform->societe_id == $constructeur->id ? 'selected' : '' }}>{{ $constructeur->name }}</option>
    @endforeach
</select><br>