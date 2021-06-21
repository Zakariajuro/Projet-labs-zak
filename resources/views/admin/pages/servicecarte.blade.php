@extends('adminlte::page')
@section('content')
@extends('layouts.flash')

    <h1 class="text-center my-4">Service Carte :</h1>
    <!-- services card section-->
<div class="services-card-section spad">
    <div class="container">
        <div class="row">
            <!-- Single Card -->
            @foreach ($servicecard as $item)
                
            <div class="text-center col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="{{asset('img/' . $item->image)}}" alt="">
                    </div>
                    <div class="card-text">
                        <h2>{{$item->titre}}</h2>
                        <p>{{$item->description}}</p>
                    </div>
                    <button class="btn btn-success"><a class="text-white" href="{{route('servicecard.edit', $item->id)}}">Modifier</a></button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- services card section end-->

@endsection