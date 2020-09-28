@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span class="back"></span>
        <h3>Rôles</h3>
        <span class="d-flex justify-content-center">
            <a class="btn btn-primary" href="genres/create">+</a>
        </span> 
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nom Genre</th>
                <th scope="col">Crée le</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($genres as $genre)
                <tr>
                <th scope="row">{{$genre->id}}</th>
                <td>{{$genre->name}}</td>
                <td>{{$genre->created_at}}</td>
                <td>
                    <span class="d-flex">
                        <a href="/genres/{{$genre->id}}" class="btn btn-primary">Voir</a>
                        <form action="/genres/{{$genre->id}}" method="post">
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