@csrf
<label for="genre-name">Nom du genre : </label>
<input type="text" name="name" id="genre-name" value="{{ old('name') ?? $genre->name }}">