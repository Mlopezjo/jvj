@extends('frontend.layouts.app')

@section('content')
<div class="col-12 col-sm-12 col-md-12 col-lg-10">
    @if(auth()->user()->ville_id == '')
        <div class="alert alert-info mt-lg-2" role="alert">
            Merci de renseigner votre ville <a href="{{url('/users/'.auth()->user()->id)}}">ICI</a>
        </div>
    @endif
    @if(auth()->user()->image == '')
        <div class="alert alert-info mt-lg-2" role="alert">
            Ajouter un image juste <a href="{{url('/users/'.auth()->user()->id)}}">ICI</a>
        </div>
    @endif
    <div class="card">
        <div class="card-header">Bonjour {{auth()->user()->name}}</div>

        <div class="card-body container-fluid">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row home">
                
                <div class="col col-12 col-sm-12 col-md-6 col-lg-3">
                    <i class="fas fa-gamepad text-center" style="font-size:10rem"></i>
                    <h4 class="text-center mt-3"><a href="{{url('/maliste')}}" class="text-dark">Mes jeux</a></h4>
                </div>

                <div class="col col-12 col-sm-12 col-md-6 col-lg-3  d-flex flex-column justify-content-center">
                    <i class="fas fa-chess-board text-center" style="font-size:10rem"></i>
                    <h4 class="text-center mt-3"><a href="" class="text-dark">Mes Consoles</a></h4>
                </div>

                <div class="col col-12 col-sm-12 col-md-6 col-lg-3 d-flex flex-column justify-content-center">
                    <i class="fas fa-comments text-center" style="font-size:10rem"></i>
                    <h4 class="text-center mt-3"><a href="" class="text-dark">Mes Echanges</a></h4>
                </div>

                <div class="col col-12 col-sm-12 col-md-6 col-lg-3 d-flex flex-column justify-content-center">
                    <i class="fas fa-user text-center" style="font-size:10rem"></i>
                    <h4 class="text-center mt-3"><a href="{{url('/users/'.auth()->user()->id.'/edit')}}" class="text-dark">Mes Informations</a></h4>
                </div>

            </div>
            
        </div>
    </div>
</div>
@endsection
