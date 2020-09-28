@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span class="back"></span>
        <h3>Consoles</h3>
        <span class="d-flex justify-content-center">
            <a class="btn btn-primary" href="platforms/create">+</a>
        </span> 
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nom Console</th>
                <th scope="col">Crée le</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($platforms as $platform)
                <tr>
                <th scope="row">{{$platform->id}}</th>
                <td>{{$platform->name}}</td>
                <td>{{$platform->created_at}}</td>
                <td>
                    <span class="d-flex">
                        <a href="/platforms/{{$platform->id}}" class="btn btn-primary">Voir</a>
                        <form action="/platforms/{{$platform->id}}" method="post">
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