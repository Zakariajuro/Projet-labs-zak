@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier le profil</h1>
    <div class="container mt-2">
        <div class=" mx-auto p-5 bg-indigo-200">
            <form action="{{route('profil.update', $user->id)}}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="nom">Nom : </label>
                <input type="text" name="nom" value ="{{Auth::user()->nom}}" id="nom"  class="@error('nom') is-invalid @enderror  form-control">
                @error('nom')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
                        
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value ="{{Auth::user()->email}}" id="email"  class="@error('email') is-invalid @enderror form-control">
                    @error('email')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" class="  @error('description') is-invalid @enderror form-control" type="text" name="description">{{Auth::user()->description}}</textarea>
                    @error('description')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <select name="genre_id" id="genre" class="@error('genre') is-invalid @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md">
                        @foreach ($genres as $genre)
                            <option value="{{$genre->id}}" {{Auth::user()->genre_id == $genre->id ? "selected" : ""}}>{{$genre->genre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="poste">Poste</label>
                    <select name="poste_id" id="poste" class="@error('poste') is-invalid @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-md">
                        @foreach ($postes as $poste)
                            <option value="{{$poste->id}}" {{Auth::user()->poste_id == $poste->id ? "selected" : ""}}>{{$poste->poste}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image"  id="image"  class="@error('image') is-invalid @enderror">
                    @error('image')
                    <span class="invalid-feedback">
                        <strong>{{$message}}</strong>
                    </span>                    
                    @enderror
                </div>
            <button type="submit" class="btn btn-primary mt-3">Valider</button>
        </form>
    
        </div>
    </div>
@endsection