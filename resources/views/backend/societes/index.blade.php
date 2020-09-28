@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span class="back"></span>
        <h3>Societes</h3>
        <span class="d-flex justify-content-center">
            <a class="btn btn-primary" href="societes/create">+</a>
        </span> 
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nom Societe</th>
                <th scope="col">Crée le</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($societes as $societe)
                <tr>
                <th scope="row">{{$societe->id}}</th>
                <td>{{$societe->name}}</td>
                <td>{{$societe->created_at}}</td>
                <td>
                    <span class="d-flex">
                        <a href="/societes/{{$societe->id}}" class="btn btn-primary">Voir</a>
                        <form action="/societes/{{$societe->id}}" method="post">
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