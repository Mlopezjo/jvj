@csrf
<label for="game-title">Titre : </label>
<input type="hidden" name="status" value="1">
<input type="text" name="title" id="game-title" value="{{ old('title') ?? $game->title }}"><br>
<label for="game-file">File : </label>
<input type="file" name="image" id="game-file"  value="{{ $game->image }}"><br>
<select name="genre_id">
    <option selected>Selectionner un genre</option>
    @foreach($genres as $genre)
    <option value="{{ $genre->id }}" {{ $game->genre_id == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
    @endforeach
</select><br>
<select name="editeur_id">
    <option selected>Selectionner un editeur</option>
    @foreach($editeurs as $editeur)
    <option value="{{ $editeur->id }}" {{ $game->editeur_id == $editeur->id ? 'selected' : '' }}>{{ $editeur->name }}</option>
    @endforeach
</select><br>
<select name="dev_id">
    <option selected>Selectionner un developpeur</option>
    @foreach($developpeurs as $developpeur)
    <option value="{{ $developpeur->id }}" {{ $game->dev_id == $developpeur->id ? 'selected' : '' }}>{{ $developpeur->name }}</option>
    @endforeach
</select><br>
<select name="platform_id">
    <option selected>Selectionner une console</option>
    @foreach($consoles as $console)
    <option value="{{ $console->id }}" {{ $game->platform_id == $console->id ? 'selected' : '' }}>{{ $console->name }}</option>
    @endforeach
</select><br>

{{$game->image}}