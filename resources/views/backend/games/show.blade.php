@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <span class="back"><a href="{{url('games')}}" class="btn btn-warning">Annuler</a></span>
            <h3>{{$game->title}}</h3>
            <span class="d-flex justify-content-center">
                <a href="/games/{{$game->id}}/edit" class="btn btn-primary">Éditer</a>
                <form action="/games/{{$game->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </span>
        </div>

        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <img src="{{@asset('storage/'.$game->image)}}" class="img-thumbnail">
                    </div>
                    <div class="col-6"> 
                        Genre : {{$game->genre->name}} <br>
                        Editer par : {{$game->editeur->name}} <br>
                        Developpé par : {{$game->dev->name}}<br>
                        Sur : {{$game->platform->name}}<br>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection