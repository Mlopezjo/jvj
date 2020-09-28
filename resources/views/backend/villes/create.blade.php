@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Ajouter une Ville
        </div>

        <div class="card-body">
            <form action="/villes" method="post">
                @include('backend.includes.formsVille')
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection