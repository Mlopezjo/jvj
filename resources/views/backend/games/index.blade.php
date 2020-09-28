@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span class="back"></span>
        <h3>Jeux</h3>
        <span class="d-flex justify-content-center">
            <a class="btn btn-primary" href="games/create">+</a>
        </span> 
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($games as $game)
                <tr>
                <th scope="row">{{$game->id}}</th>
                <td>{{$game->title}}</td>
                <td>{{$game->status}}</td>
                <td>
                    <span class="d-flex justify-content-around">
                        @if($game->status == 1)
                        <a href="/games/{{$game->id}}/edit" class="btn btn-warning">Valider</a>
                        @else
                        <a href="/games/{{$game->id}}" class="btn btn-primary">Voir</a>
                        @endif
                        <form action="/games/{{$game->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </span>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection