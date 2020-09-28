@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span class="back"></span>
        <h3>Villes</h3>
        <span class="d-flex justify-content-center">
            <a class="btn btn-primary" href="villes/create">+</a>
        </span> 
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Code Postale</th>
                <th scope="col">Nom</th>
                <th scope="col">Crée le</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($villes as $ville)
                <tr>
                <th scope="row">{{$ville->id}}</th>
                <td>{{$ville->zip}}</td>
                <td>{{$ville->name}}</td>
                <td>{{$ville->created_at}}</td>
                <td>
                    <span class="d-flex">
                        <a href="/villes/{{$ville->id}}" class="btn btn-primary">Voir</a>
                        <form action="/villes/{{$ville->id}}" method="post">
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