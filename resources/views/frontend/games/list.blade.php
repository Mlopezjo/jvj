@extends('frontend.layouts.app')

@section('content')
<div class="col-12 col-sm-12 col-md-12 col-lg-10">
        <div class="card">
            <div class="card-header">Ma liste de jeux</div>

            <div class="card-body container-fluid">
                <div class="row home">
                @if($myGames->isNotEmpty())
                    @foreach($myGames as $game)
                    <div class="col col-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img src="{{@asset('storage/'.$game->image)}}" class="card-img-top" style="width: 100%; height: auto;object-fit:cover;" alt="{{$game->title}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$game->title}}</h5>
                                <div class="d-flex justify-content-around align-items-center">
                                    <a href="#" class="btn btn-primary disabled">Qui a le jeux</a>
                                    
                                    <form action="{{ route('frontend.games.remove', $game->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                <p class="text-center">Vous n'avez aucun jeux dans votre liste</p>
                @endif
                </div>
                
            </div>
        </div>
    </div>
@endsection