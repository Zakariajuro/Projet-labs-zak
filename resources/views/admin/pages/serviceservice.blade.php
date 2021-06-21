@extends('adminlte::page')
@section('content')
@extends('layouts.flash')

<div class="text-center my-4">
    <h1 class="text-center">Titre service : </h1>
    @foreach ($hometitreservice as $item)
        <h2 class="text-center">{{$item->titre}}</h2>
        <button class="btn btn-success"><a class="text-white" href="{{route('titreservice.edit', $item->id)}}">Modifier</a></button>
    @endforeach
</div>
    
    <div class="row">
        <!-- single service -->
        @foreach ($homeservices as $item)
        <div class="col-md-4 text-center col-sm-6">
            <div class="service my-2">
                <div class="icon">
                    <i style="font-size: 50px" class="{{$item->icone->icone}}"></i>
                </div>
                <div class="service-text">
                    <h2>{{$item->titre}}</h2>
                    <p>{{$item->description}}</p>
                    <button class="btn btn-success m-4"><a class="text-white" href="{{route('homeservice.edit', $item->id)}}">Modiffier</a></button>
                    <form method="POST" action="{{route('homeservice.destroy', $item->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
@endsection