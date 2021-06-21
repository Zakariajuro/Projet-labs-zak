@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier le titre</h1>
    <form method="POST" class="text-center container" action="{{route('titreequipe.update', $hometitreequipe->id)}}">
        @csrf
        @method('PUT')
        <label for="titre">Titre</label>
        <input value="{{$hometitreequipe->titre}}" class="@error('titre') is-invalid @enderror form-control" id="titre" name="titre" type="text">
        @error('titre')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <p style="font-weight: bold">Mettre le mot surligner entre parenthèse !</p>
        <button class="btn btn-success my-3">Modiffier</button>
    </form>
@endsection
