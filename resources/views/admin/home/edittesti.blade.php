@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier</h1>
    <form class="container" enctype="multipart/form-data" method="POST" action="{{route('testi.update', $hometesti->id)}}">
        @csrf
        @method('PUT')
        <label for="image">Image</label><br>
        <input name="image" type="file"><br><br>
        <label for="nom">Nom</label>
        <input class="@error('nom') is-invalid @enderror form-control" value="{{$hometesti->nom}}" name="nom" type="text">
        @error('nom')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="fonction">Fonction</label>
        <input class="@error('fonction') is-invalid @enderror form-control" value="{{$hometesti->fonction}}" name="fonction" type="text">
        @error('fonction')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="texte">Texte</label>
        <input class="@error('texte') is-invalid @enderror form-control" name="texte" value="{{$hometesti->texte}}" type="text">
        @error('texte')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <button class="btn btn-success my-3">Modiffier</button>
    </form>
@endsection