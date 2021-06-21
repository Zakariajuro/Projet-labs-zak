@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier</h1>
    <form class="container text-center" enctype="multipart/form-data" method="POST" action="{{route('homevideo.update', $homevideo->id)}}">
        @csrf
        @method('PUT')
        <label for="image"> modifier l'image</label><br><br>
        <input name="image" type="file"><br><br>
        <label for="video">modifier la video</label><br><br>
        <input name="video" type="text"><br><br>
        <button class="btn btn-success">Modiffier</button>
    </form>
@endsection