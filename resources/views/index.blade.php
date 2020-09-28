@extends('frontend.layouts.app')

@section('content')

    @guest
        @include('frontend.includes.choix')
    @else
    <div class="col-12 col-sm-12 col-md-12 col-lg-10">
        <div class="card">
            <div class="card-header">Bonjour {{auth()->user()->name}}</div>

            <div class="card-body container-fluid">
                <div class="row home">
                    @foreach($games as $game)
                    <div class="col col-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{@asset('storage/'.$game->image)}}" class="card-img-top" style="width: 100%; height: auto;object-fit:cover;" alt="{{$game->title}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$game->title}}</h5>
                                <div class="d-flex justify-content-around align-items-center">
                                    <a href="#" class="btn btn-primary disabled">Qui a le jeux</a>
                                    @if(auth()->user()->haveIThisGame($game->id))
                                    <form action="{{ route('frontend.games.remove', $game->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                    @else
                                    <form action="{{ route('frontend.games.add', $game->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-warning">Ajouter</button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
    @endguest

@endsection