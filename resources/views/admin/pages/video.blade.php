@extends('adminlte::page')
@section('content')
@extends('layouts.flash')

<div class="text-center intro-video">
    <h1>Vidéo : </h1>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($homevideo as $item)
            <img src="{{asset('img/' . $item->image)}}" alt="">
            <a href="{{$item->video}}" class="video-popup">
                <i class="fa fa-play"></i>
            </a>
            <button class="btn btn-success m-3"><a class="text-white" href="{{route('homevideo.edit', $item->id)}}">Modifier</a></button>
            
            @endforeach
            </div>
        </div>
        </div>
@endsection
