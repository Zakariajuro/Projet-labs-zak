@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modiffier le carrousel</h1>
    <form class="container" method="POST" enctype="multipart/form-data" action="{{route('homeCarrousel.update', $homeCarrousel->id)}}">
        @csrf
        @method('PUT')
        <label for="image">Image :</label><br><br>
        <input name="image" type="file"><br><br>
        <label for="phrase">Phrase :</label>
        <input value="{{$homeCarrousel->phrase}}" name="phrase" class="form-control" type="text">
        <button class="btn btn-success my-3">Moddifer</button>
    </form>
@endsection