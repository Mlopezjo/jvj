@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <span class="back"><a href="{{url('villes/'.$ville->id)}}" class="btn btn-warning">Annuler</a></span>
            <h3>Modification : {{ $ville->name }}</h3>
            <span class="d-flex justify-content-center">
            </span>
        </div>

        <div class="card-body">
            <form action="/villes/{{ $ville->id }}" method="post">
                @method('PATCH')
                @include('backend.includes.formsVille')
                <button type="submit" class="btn btn-success">Ajouter</button>
            </form>
        </div>
    </div>
@endsection