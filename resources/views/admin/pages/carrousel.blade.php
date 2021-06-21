@extends('adminlte::page')
@section('content')
@extends('layouts.flash')
    <h1 class="text-center my-4">Carrousel</h1>


    <div class="text-center my-4">
        <h1>Logo</h1>
        <hr>
        @foreach ($logos as $logo)
            <img height="100px" class="my-5" src="{{asset('img/' . $logo->logo)}}" alt=""><br>
            <button class="btn btn-success"><a class="text-white" href="{{route('logo.edit', $logo->id)}}">Moddifer</a></button> <br>
        
        @endforeach
    </div>
    <hr>
    <div class="container">
        <button class="btn btn-primary my-3"><a class="text-white" href="{{route('homeCarrousel.create')}}">Ajouter</a></button>
        <div class="row">
            @foreach ($carrousels as $carrousel)
            <div class="text-center  col-6" >
                <img style="height: 400px" class="card-img-top" src="{{asset('img/' . $carrousel->image)}}" alt="">
                    <p class="my-2">{{$carrousel->phrase}}</p>
                    <button class="btn btn-success"><a class="text-white" href="{{route('homeCarrousel.edit', $carrousel->id)}}">Modiffier</a></button>
                    <form class="mt-3" method="post" action="{{route('homeCarrousel.destroy', $carrousel->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
                @endforeach
            </div>
    </div>
    
@endsection