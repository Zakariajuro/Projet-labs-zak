@extends('adminlte::page')
@section('content')
@extends('layouts.flash')
    <h1 class="text-center my-5">Contact</h1>
    <hr>
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                @foreach ($contacts as $item)
                <h2>Position del carte maps: {{$item->position}}</h2>
                <div class="section-title left">
                    <h2>{{$item->titre}}</h2>
                </div>
                <p>{{$item->description}}</p>
                <h3 class="mt60">{{$item->soustitre}}</h3>
                <p class="con-item">{{$item->adresse}}</p>
                <p class="con-item">{{$item->telephone}}</p>
                <p class="con-item">{{$item->email}}</p>
                <button class="btn btn-success"><a class="text-white" href="{{route('admincontact.edit', $item->id)}}">Modifier</a></button>
                @endforeach
            </div>
        </div>
    </div>
@endsection