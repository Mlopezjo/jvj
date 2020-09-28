@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span class="back"></span>
        <h3>Rôles</h3>
        <span class="d-flex justify-content-center">
            <a class="btn btn-primary" href="roles/create">+</a>
        </span> 
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nom Rôle</th>
                <th scope="col">Crée le</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                <tr>
                <th scope="row">{{$role->id}}</th>
                <td>{{$role->name}}</td>
                <td>{{$role->created_at}}</td>
                <td>
                    <span class="d-flex">
                        <a href="/roles/{{$role->id}}" class="btn btn-primary">Voir</a>
                        <form action="/roles/{{$role->id}}" method="post">
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