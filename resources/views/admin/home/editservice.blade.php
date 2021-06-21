@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier le service</h1>
    <form class="container py-5 text-center" method="POST"  action="{{route('homeservice.update', $homeservice->id)}}">
        @csrf
        @method('PUT')
        <label for="icone">Icone</label><br><br>
        <select name="icone_id" id="icone_id"><br><br>
            @foreach ($icone as $item)
                <option value="{{$item->id}}">{{$item->icone}}</option><br>                
            @endforeach
        </select><br><br>
        <label for="titre">Titre :</label><br><br>
        <input class="@error('titre') is-invalid @enderror form-control" value="{{$homeservice->titre}}" name="titre" type="text"><br>
        @error('titre')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="descripion">Description :</label><br>
        <input class="@error('description') is-invalid @enderror form-control" value="{{$homeservice->description}}" name="description" type="text"><br>
        @error('description')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <button class="btn btn-success">Modifier</button><br>
    </form>
@endsection