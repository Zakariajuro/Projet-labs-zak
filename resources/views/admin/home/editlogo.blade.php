@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier le logo</h1>
    <form class="text-center container" method="POST" enctype="multipart/form-data" action="{{route('logo.update', $logo->id)}}">
        @csrf
        @method('PUT')
        <label for="logo">Choisir le logo</label>
        <input type="file" name="logo" id="logo"><br>
        <button class="btn btn-success">Modiffier</button>
    </form>
@endsection