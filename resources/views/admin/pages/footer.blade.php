@extends('adminlte::page')
@include('layouts.flash')
@section('content')
<footer class="footer-section">
    <h1 class="text-center my-3">Footer</h1>
    @foreach ($footer as $item)
        <h2>{{$item->phrase}} <a href="{{$item->lien}}" target="_blank">{{$item->motlien}}</a></h2>
        <button class="btn btn-success"><a class="text-white" href="{{route('adminfooter.edit', $item->id)}}">Modifier</a></button>
    @endforeach
</footer>
@endsection