@csrf
<label for="ville-zip">Code Postal de le ville : </label>
<input type="text" name="zip" id="ville-zip" value="{{ old('zip') ?? $ville->zip }}">
<label for="ville-name">Nom de la ville : </label>
<input type="text" name="name" id="ville-name" value="{{ old('name') ?? $ville->name }}">