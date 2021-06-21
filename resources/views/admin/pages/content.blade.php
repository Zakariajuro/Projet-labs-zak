@extends('adminlte::page')
@section('content')
@extends('layouts.flash')
<h1 class="text-center my-4">Titre about :</h1>
@foreach ($hometitrecontent as $item)
			<h2 class="text-center">
				@php
				    $titre = str_replace('(', '<span>', $item->titre);
					$titrebis = str_replace(')', '</span>', $titre);
					echo $titrebis;
				@endphp
			</h2>
            <div class="text-center">
                <button class="text-center my-2 btn btn-success"><a class="text-center text-white" href="{{route('hometitrecontent.edit', $item->id)}}">Modiffier</a></button>
            </div>

	@endforeach
    <hr>
            <h1 class="my-5 text-center">Texte content :</h1>
            <div class="container">

                <div class="row">
                    @foreach ($homecontent as $content)
                    
                    <div class="col-md-6">
                        <p>{{$content->texte}}</p>
                        <button class=" my-2 btn btn-success"><a class="text-white" href="{{route('homecontent.edit', $content->id)}}">Modiffier</a></button>
                    </div>

                    @endforeach
                </div>
            </div>
@endsection