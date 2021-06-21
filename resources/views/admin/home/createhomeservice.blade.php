@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Ajouter un service</h1>
    <form class="container py-5 text-center" method="POST"  action="{{route('homeservice.store')}}">
        @csrf
        <label for="icone">Icone</label><br><br>
        <select name="icone_id" id="icone_id"><br><br>
            @foreach ($icone as $item)
                <option value="{{$item->id}}">{{$item->icone}}</option><br>                
            @endforeach
        </select><br><br>
        <label for="titre">Titre :</label><br><br>
        <input class="form-control"name="titre" type="text"><br>
        
        <label for="descripion">Description :</label><br>
        <input class=" form-control"  name="description" type="text"><br>
       
        <button class="btn btn-success">Modifier</button><br>
    </form>
@endsection