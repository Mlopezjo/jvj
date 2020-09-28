@extends('frontend.layouts.app')

@section('content')
<div class="col-12 col-sm-12 col-md-12 col-lg-10">
    <div class="card data-personnal">
        <div class="card-header">Mes Informations</div>

        <div class="card-body container-fluid">
            <div class="row home">
                <div class="col">
                    <h4>Informations Générale</h4><br>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Mon Surnom</label>

                        <div class="col-md-6">
                            {{$user->name}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Mon Adresse Mail</label>

                        <div class="col-md-6">
                            {{$user->email}}
                        </div>
                    </div>
                    <form action="/users/{{ $user->id }}" method="post"  enctype="multipart/form-data">
                    @csrf
                        @method('PATCH')
                        <input type="hidden" name="role_id" value="{{$user->role_id}}">
                        <div class="form-group row">
                            <label for="ville" class="col-md-4 col-form-label text-md-right">Ma Ville</label>

                            <div class="col-md-6">
                                @if($user->ville_id == '')
                                <select name="ville_id" id="ville">
                                    @foreach($villes as $ville)
                                    <option value="{{$ville->id}}">{{$ville->zip}} - {{$ville->name}}</option>
                                    @endforeach
                                </select>
                                @else
                                    {{$user->ville->name}}
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Ma Photo de profil</label>
                            @if($user->image == null)
                            <div class="col-md-6">
                                <input id="image" type="file" style="object-fit: cover;" class="form-control" name="image" value="Aucune"  onchange="preview_image(event)">
                                <img id="avatar" width="180" height="180" src="http://placehold.it/180"  style="object-fit: cover;margin: auto" alt="your image" />
                            </div>
                            @else
                            <div class="col-md-6 avatar">
                                <img src="{{@asset('storage/'.auth()->user()->image)}}" 
                                    style="object-fit: cover;" width="180" height="180" 
                                    data-toggle="modal" data-target="#changeImg" id="image-profil"title="cliqué pour changer l'image">
                                    @if(session()->has('message'))
                                        <strong style="color: red;">
                                            {{session()->get('message')}}
                                        </strong>
                                    @endif
                            </div>
                            @endif
                        </div>
                       
                        @if($user->image == null)
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-orange">
                                    Valider
                                </button>
                            </div>
                        </div>
                        @endif
                    </form>
                    <hr>
                    
                </div>
            </div>
            
        </div>
    </div>
    <div class="card reset-password">
        <div class="card-header">
            <h4 class="text-center text-white">Changer mon mot de passse</h4>
        </div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Il me semble que c'est</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-orange">
                            Envoyer moi un lien, j'ai besoin d'un nouveau mot de passe !
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('autre')
<!-- Modal -->
<div class="modal fade" id="changeImg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Changer l'image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/users/{{ $user->id }}" method="post"  enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group row">
                <input type="hidden" name="role_id" value="{{$user->role_id}}">
                <input type="hidden" name="ville_id" value="{{$user->ville_id}}">
                <input id="image" type="file" class="form-control" name="image" value="Aucune"  onchange="preview_image(event)">
                <img id="avatar" width="180" height="180" src="http://placehold.it/180" style="object-fit: cover;margin: auto" alt="your image" />
            </div>
            <div class="form-group row">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-orange">
                        Valider
                    </button>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>

<script>
    function preview_image(event) 
    {
    var reader = new FileReader();
    reader.onload = function()
    {
    var output = document.getElementById('avatar');
    output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection