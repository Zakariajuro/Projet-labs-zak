@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier</h1>
    <form class="container"  method="POST" enctype="multipart/form-data" action="{{route('homeequipe.update', $homeequipe->id)}}">
        @csrf
        @method('PUT')
        <label for="image">Image</label><br>
        <input type="file" name="image" id="image"><br>
        <label for="nom">Nom</label><br>
        <input value="{{$homeequipe->nom}}" class="@error('nom') is-invalid @enderror form-control" type="text" name="nom" id=""><br>
        @error('nom')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="poste_id">Poste</label>
        <select name="poste_id" id="poste_id">
            @foreach ($poste as $item)
                <option value="{{$item->id}}">{{$item->poste}}</option>              
            @endforeach
        </select><br><br>
        <button class="btn btn-success">Modifier</button>
    </form>
@endsection