@extends('adminlte::page')
@section('content')
<h1 class="text-center">Ajouter un carrousel</h1>
<form class="container" method="POST" enctype="multipart/form-data" action="{{route('homeCarrousel.store')}}">
    @csrf
    <label for="image">Image :</label><br><br>
    <input name="image" type="file"><br><br>
    <label for="phrase">Phrase :</label>
    <input name="phrase" class="form-control" type="text">
    <button class="btn btn-success my-3">Ajouter</button>
</form>
@endsection