@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Ajouter</h1>
    <form class="container" enctype="multipart/form-data" method="POST" action="{{route('testi.store')}}">
        @csrf
        <label for="image">Image</label><br>
        <input name="image" type="file"><br><br>
        <label for="nom">Nom</label>
        <input class=" form-control" name="nom" type="text">
       
        <label for="fonction">Fonction</label>
        <input class=" form-control"  name="fonction" type="text">
       
        <label for="texte">Texte</label>
        <input class=" form-control" name="texte"  type="text">
    
        <button class="btn btn-success my-3">Ajouter</button>
    </form>
@endsection