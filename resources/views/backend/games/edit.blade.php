@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <span class="back"><a href="{{url('games/'.$game->id)}}" class="btn btn-warning">Annuler</a></span>
            <h3>Modification : {{ $game->title }}</h3>
            <span class="d-flex justify-content-center">
            </span>
        </div>

        <div class="card-body container">
            <form class="row" action="/games/{{ $game->id }}" method="post"  enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <input type="hidden" name="status" value="2">
                <div class="col-12">
                    <div class="form-group row">
                        <label for="game-title" class="col-md-4 col-form-label text-md-right">Titre : </label>
                        <div class="col-md-8">
                            <input type="text" name="title" id="game-title" value="{{ old('title') ?? $game->title }}" style="width : 100%;">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 justify-content-center align-items-center d-flex flex-column">
                    <label for="game-file">Image : </label>
                    <div class="image">
                        <input id="image" type="file" style="object-fit: cover;" class="form-control" name="image" value="{{ $game->image }}"  onchange="preview_image(event)">
                        <img id="avatar" width="180" height="180" src="{{@asset('storage/'.$game->image)}}"  style="object-fit: cover;margin: auto" alt="your image" />
                        <!--<input type="file" name="image" id="game-file"  value="{{ $game->image }}">-->
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="form-group row">
                        <label for="game-genre" class="col-md-4 col-form-label text-md-right">Selectionner un genre : </label>
                        <div class="col-md-6">
                            <select name="genre_id">
                                <option selected>Selectionner un genre</option>
                                @foreach($genres as $genre)
                                <option value="{{ $genre->id }}" {{ $game->genre_id == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="game-edit" class="col-md-4 col-form-label text-md-right">Selectionner un éditeur : </label>
                        <div class="col-md-6">
                            <select name="editeur_id" id="game-edit">
                                <option selected>Selectionner un editeur</option>
                                @foreach($editeurs as $editeur)
                                <option value="{{ $editeur->id }}" {{ $game->editeur_id == $editeur->id ? 'selected' : '' }}>{{ $editeur->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="game-dev" class="col-md-4 col-form-label text-md-right">Selectionner un genre : </label>
                        <div class="col-md-6">
                            <select name="dev_id" id="game-dev">
                                <option selected>Selectionner un developpeur</option>
                                @foreach($developpeurs as $developpeur)
                                <option value="{{ $developpeur->id }}" {{ $game->dev_id == $developpeur->id ? 'selected' : '' }}>{{ $developpeur->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="game-plat" class="col-md-4 col-form-label text-md-right">Selectionner un genre : </label>
                        <div class="col-md-6">
                            <select name="platform_id" id="game-plat">
                                <option selected>Selectionner une console</option>
                                @foreach($consoles as $console)
                                <option value="{{ $console->id }}" {{ $game->platform_id == $console->id ? 'selected' : '' }}>{{ $console->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 justify-content-center align-items-center d-flex">
                    <button type="submit" class="btn btn-success">Modifier</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('autre')
<script>
    function preview_image(event) 
    {
    var reader = new FileReader();
    reader.onload = function()
    {
    var output = document.getElementById('avatar');
    output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection