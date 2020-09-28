@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <span class="back"><a href="{{url('users')}}" class="btn btn-warning">Annuler</a></span>
            <h3>Utilisateur : {{$user->name}}</h3>
            <span class="d-flex justify-content-center">
                <a href="/users/{{$user->id}}/edit" class="btn btn-primary">Éditer</a>
                <form action="/users/{{$user->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </span>
        </div>

        <div class="card-body">
            C'est un {{$user->role->name}}
            @if(isset($user->ville_if))
                qui vit à {{$user->ville->name}}
            @endif.<br>
            Il s'est inscrit le {{$user->created_at}}<br>
            Pour le Contacter : <a href="maito:{{$user->email}}">{{$user->email}}</a>
        </div>
    </div>
@endsection