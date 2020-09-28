@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <span class="back"><a href="{{url('roles/'.$role->id)}}" class="btn btn-warning">Annuler</a></span>
            <h3>Modification : {{ $role->name }}</h3>
            <span class="d-flex justify-content-center">
            </span>
        </div>

        <div class="card-body">
            <form action="/roles/{{ $role->id }}" method="post">
                @method('PATCH')
                @include('backend.includes.formsRole')
                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
    </div>
@endsection