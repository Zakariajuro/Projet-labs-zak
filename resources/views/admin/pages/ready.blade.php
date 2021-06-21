@extends('adminlte::page')
@section('content')
@extends('layouts.flash')

<h1 class="text-center my-3">Are you ready ?</h1>
<div class="promotion-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                @foreach ($promotion as $item)
                <h1>Titre :</h1>
                <h2>{{$item->titre}}</h2>
                    <h3>Description :</h3>
                    <p>{{$item->description}}</p>
                    <button class="btn btn-success"><a class="text-white" href="{{route('promotion.edit', $item->id)}}">Modifier</a></button>
                @endforeach
            </div>
           
        </div>
    </div>
</div>
@endsection