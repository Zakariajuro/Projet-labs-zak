@extends('adminlte::page')
@section('content')
@extends('layouts.flash')
<!-- About section -->
<h1 class="text-center my-3">Carte : </h1>
<div class="about-section">
		<!-- card section -->
		<div class="text-center card-section">
			<div class="container">
				<button class="btn btn-primary"><a class="text-white" href="{{route('homeCarte.create')}}">Ajouter</a></button>
				<div class="row">
					<!-- single card -->
					@foreach ($homecartes as $carte)
					<div class="col-md-4 col-sm-6">
                        <div class="lab-card">
							
                            <div class="icon ">
								<i class="{{$carte->icone->icone}}" style="font-size: 40px"></i>
							</div>
							<h2>{{$carte->titre}}</h2>
							<p>{{$carte->description}}</p>
						</div>
                        <button class=" my-2 btn btn-success"><a class="text-white" href="{{route('homeCarte.edit', $carte->id)}}">Modiffier</a></button>
						<form method="POST" action="{{route('homeCarte.destroy', $carte->id)}}">
							@csrf
							@method('DELETE')
							<button class="btn btn-danger">Supprimer</button>
						</form>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->
        
       
                @endsection
	<!-- About section end -->