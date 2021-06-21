@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier le User</h1>
    <form enctype="multipart/form-data" method="POST" action="{{route('user.update', $user->id)}}">
        @csrf
        @method('PUT')
        <label for="nom">Nom</label>
        <input name="nom" value="{{$user->nom}}" class="@error('nom') is-invalid @enderror form-control" type="text">
        @error('nom')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        <label for="description">Description</label>
        <input name="description" value="{{$user->description}}" class="@error('description') is-invalid @enderror form-control" type="text">
        @error('description')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
        @enderror   
        <label for="email">Email</label>
        <input name="email" value="{{$user->email}}" class="@error('email') is-invalid @enderror form-control" type="text"><br>
        @error('email')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
        <label for="image">Image</label>
        <input class="@error('image') is-invalid @enderror" name="image" id="image" type="file"> <br>
        @error('image')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
        <label for="role">Role</label>
        <select name="role_id" class="w-full rounded-lg bg-gray-300 form-control">
            @foreach ($roles as $role)
                <option {{ $role->id == $user->role_id ? 'selected' : '' }} value="{{$role->id}}">{{$role->role}}</option>
            @endforeach
        </select>

        <label for="poste">poste</label>
        <select name="poste_id" class="w-full rounded-lg bg-gray-300 form-control">
            @foreach ($postes as $poste)
                <option {{ $poste->id == $user->poste_id ? 'selected' : '' }} value="{{$poste->id}}">{{$poste->poste}}</option>
            @endforeach
        </select>

        <label for="genre">Genre</label> 
        <select name="genre_id" class="w-full rounded-lg bg-gray-300 form-control">
            @foreach ($genres as $genre)
                <option {{ $genre->id == $user->genre_id ? 'selected' : '' }} value="{{$genre->id}}" >{{$genre->genre}}</option>
            @endforeach
        </select><br>
        <button class="btn btn-success">Ajouter</button>
    </form>
@endsection