@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier la carte</h1>
    <form class="container my-4" method="POST" enctype="multipart/form-data" action="{{route('servicecard.update', $servicecard->id)}}">
        @csrf
        @method('PUT')
        <label for="image">Image</label>
        <input type="file" name="image" id="image"><br>
        <label for="titre">Titre</label>
        <input value="{{$servicecard->titre}}" class="@error('titre') is-invalid @enderror form-control" name="titre" type="text">
        @error('titre')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <br>
        <label for="description">Descritpion</label>
        <input value="{{$servicecard->description}}" class="@error('description') is-invalid @enderror form-control" name="description" type="text">
        @error('description')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <button class="btn btn-success my-3">Modifier</button>
    </form>
@endsection