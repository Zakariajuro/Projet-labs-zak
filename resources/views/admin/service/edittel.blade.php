@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier le service</h1>
    <form method="POST" class="text-center py-5 container" action="{{route('feature.update', $feature->id)}}">
        @csrf
        @method('PUT')
        <label for="icone">Icone</label><br>
        <select name="icone_id" id="icone_id"><br>
            @foreach ($icone as $item)
                <option value="{{$item->id}}">{{$item->icone}}</option><br>                
            @endforeach
        </select><br>
        
        <label for="titre">Titre</label><br>
        <input value="{{$feature->titre}}" name="titre" class="@error('titre') is-invalid @enderror form-control" type="text">
        @error('titre')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <br>
        <label for="description">Description</label><br>
        <input value="{{$feature->description}}" name="description" class="@error('description') is-invalid @enderror form-control" type="text">
        @error('description')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <button class="btn btn-success mt-3">Modffier</button>
    </form>
@endsection