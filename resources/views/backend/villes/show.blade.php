@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <span class="back"><a href="{{url('villes')}}" class="btn btn-warning">Annuler</a></span>
            <h3>Ville : {{$ville->name}}</h3>
            <span class="d-flex justify-content-center">
                <a href="/villes/{{$ville->id}}/edit" class="btn btn-primary">Éditer</a>
                <form action="/villes/{{$ville->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </span>
        </div>

        <div class="card-body">
            <h2 class="text-center">Liste des utilisateurs à {{$ville->name}}</h2>
            @if(empty($users))
            <h4>Aucun utilisateur</h4>
            @else
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom User</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Crée</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>    
            @endif
        </div>
    </div>
@endsection