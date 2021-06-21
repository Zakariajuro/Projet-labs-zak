@extends('adminlte::page')
@section('content')
@extends('layouts.flash')

<!-- features section -->
<div class="text-center">
    @foreach ($titrefea as $item)
    <h1>titre :</h1>
    <h2 class="mb-5">{{$item->titre}}</h2>
    <button class="btn btn-success"><a class="text-white" href="{{route('titrefeature.edit', $item->id)}}">Modifier</a></button>

    @endforeach
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-6">
            @foreach ($features as $item)
            <div class="service-text">
                <h2>{{$item->titre}}</h2>
                <p>{{$item->description}}</p>
            </div>
            <div class="icon">
                <i style="font-size: 50px" class="{{$item->icone->icone}}"></i>
            </div>
            <button class="btn btn-success"><a class="text-white" href="{{route('feature.edit', $item->id)}}">Modifier</a></button>
            @endforeach
        </div>
        <div class="col-6">
            @foreach ($featurebis as $item)
                <div class="icon">
                    <i style="font-size: 50px" class="{{$item->icone->icone}}"></i>
                </div>
                <div class="service-text">
                    <h2>{{$item->titre}}</h2>
                    <p>{{$item->description}}</p>
                </div>
                <button class="btn btn-success"><a class="text-white" href="{{route('featurebis.edit', $item->id)}}">Modifier</a></button>
    
            @endforeach
        </div>
    </div>
    
    <!-- feature item -->
    <!-- features section end-->
    
    @endsection
