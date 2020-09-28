@csrf
<label for="societe-name">Nom du role : </label>
<input type="text" name="name" id="societe-name" value="{{ old('name') ?? $societe->name }}">