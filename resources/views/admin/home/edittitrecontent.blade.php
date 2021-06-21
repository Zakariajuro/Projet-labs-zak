@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier le titre</h1>

    <form class="container text-center" method="POST" action="{{route('hometitrecontent.update', $hometitrecontent->id)}}">
        @csrf
        @method('PUT')
        <label class="my-4" for="titre">Titre</label>
        <input value="{{$hometitrecontent->titre}}" name="titre" class="@error('titre') is-invalid @enderror form-control" type="text">
        @error('titre')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <p style="font-weight: bold">Mettre le mot surligner entre parenthèse !</p>
        <button class="my-3 btn btn-success">Modiffier</button>
    </form>
@endsection