@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <span class="back"><a href="{{url('users/'.$user->id)}}" class="btn btn-warning">Annuler</a></span>
            <h3>Modification : {{ $user->name }}</h3>
            <span class="d-flex justify-content-center">
            </span>
        </div>

        <div class="card-body">
            <form action="/users/{{ $user->id }}" method="post">
                @method('PATCH')
                @include('backend.includes.formsUser')
                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
    </div>
@endsection