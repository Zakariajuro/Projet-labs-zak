@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Ajouter un User</h1>
    <form enctype="multipart/form-data" class="container" method="POST" action="{{route('user.store')}}">
        @csrf
        <label for="nom">Nom</label>
        <input name="nom" class="form-control" type="text">

        <label for="description">Description</label>
        <input name="Description" class="form-control" type="text">

        <label for="email">Email</label>
        <input name="email" class="form-control" type="text"><br>

        <label for="image">Image</label>
        <input name="image" id="image" type="file"> <br>

        <label for="role">Role</label>
        <select name="role" class="w-full rounded-lg bg-gray-300 form-control">
            @foreach ($roles as $role)
                <option value="{{$role->id}}">{{$role->role}}</option>
            @endforeach
        </select>
        <label for="genre">Genre</label> 
        <select name="genre" class="w-full rounded-lg bg-gray-300 form-control">
            @foreach ($genres as $genre)
                <option value="{{$genre->id}}" >{{$genre->genre}}</option>
            @endforeach
        </select><br>
        <button class="btn btn-success">Ajouter</button>
    </form>
@endsection