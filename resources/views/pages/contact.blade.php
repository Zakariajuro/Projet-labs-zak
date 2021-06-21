@extends('layouts.index')

@section('content')
    @include('partials.headercontact')
	<!-- Google map -->
    @foreach ($contacts as $contact)
        <div class="map" id="map-area" pos="{{$contact->position}}"> </div>        
    @endforeach
    @include('partials.contact')
@endsection