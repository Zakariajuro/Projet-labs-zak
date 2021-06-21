@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier</h1>
    <form class="container" method="POST" action="{{route('promotion.update', $promotion->id)}}">
        @csrf
        @method('PUT')
        <label for="titre">Titre</label>
        <input class="@error('titre') is-invalid @enderror form-control" type="text" value="{{$promotion->titre}}" name="titre" id="titre"><br>
        @error('titre')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="description">Description</label><br>
        <input type="text" class="@error('description') is-invalid @enderror form-control" value="{{$promotion->description}}" name="description" id="description"><br> <br>
        @error('description')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <button class="btn btn-success">Modifier</button>
    </form>
@endsection