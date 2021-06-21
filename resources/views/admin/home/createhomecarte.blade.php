@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Ajouter la carte</h1>
    <form method="POST" class="text-center py-5 container" action="{{route('homeCarte.store')}}">
        @csrf
        <label for="icone">Icone</label><br>
        <select name="icone_id" id="icone_id"><br>
            @foreach ($icone as $item)
                <option value="{{$item->id}}">{{$item->icone}}</option><br>                
            @endforeach
        </select><br>


        
        <label for="titre">Titre</label><br>
        <input  class=" form-control" name="titre" type="text"><br>
        
        <label for="description">Description</label><br>
        <input  class=" form-control" name="description"  type="text">
       
        <br>
        <button class="btn btn-success mt-3">Modffier</button>
    </form>
@endsection