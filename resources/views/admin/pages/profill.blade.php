@extends('adminlte::page')
@section('content')
    @include('layouts.flash')

<h1 class="text-center">Profil</h1>
<div class="d-flex justify-content-center text-center">
    <div class=" card" style="width: 18rem;">
        <img height="350px" src="{{asset(Auth::user()->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nom : {{ Auth::user()->nom }}</h5>
            <h5>Role : {{ Auth::user()->role->role }}</h5>
            <h5>Fonction : {{ Auth::user()->poste->poste }}</h5>
            <h5>Adresse mail : {{ Auth::user()->email }}</h5>
            <h5>Genre : {{ Auth::user()->genre->genre }}</h5>
            <p class="card-text">Description :  {{ Auth::user()->description }}</p>
            <a href="{{route('profil.edit', Auth::user()->id)}}" class="btn btn-primary">Modifier</a>
        </div>
      </div>
</div>

@endsection