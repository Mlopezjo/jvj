@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <span class="back"><a href="{{url('societes')}}" class="btn btn-warning">Annuler</a></span>
            <h3>Rôle : {{$societe->name}}</h3>
            <span class="d-flex justify-content-center">
                <a href="/societes/{{$societe->id}}/edit" class="btn btn-primary">Éditer</a>
                <form action="/societes/{{$societe->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </span>
        </div>

        <div class="card-body">
            
        </div>
    </div>
@endsection