@extends('adminlte::page')
@section('content')
@extends('layouts.flash')

<div class="text-center">
    <h1>Titre equipe :</h1>
    @foreach ($titreequipe as $item)
        <h2>{{$item->titre}}</h2>
        <button class="btn btn-success"><a class="text-white" href="{{route('titreequipe.edit', $item->id)}}">Modifier</a></button>
    @endforeach
</div>
<div class="row">
    <!-- single member -->
    @foreach ($homeequipe as $item)
        
    <div class="col-sm-4 my-3 text-center">
        <div class="member">
            <img src="{{asset('img/' . $item->image)}}" alt="">
            <h3>{{$item->nom}}</h3>
            <h4>{{$item->poste->poste}}</h4>
            <button class="btn btn-success"><a class="text-white" href="{{route('homeequipe.edit', $item->id)}}">Modifier</a></button>
        </div>
    </div>
    @endforeach
    
</div>
@endsection