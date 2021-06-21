@extends('adminlte::page')


@section('content')
<h1 class="text-center">Home</h1>
<div class="card-section">
    <div class="container">
        <div class="row">
            <!-- single card -->
            @foreach ($homecarte as $carte)
                
            <div class="col-md-4 col-sm-6">
                <div class="lab-card">
                    
                    <div class="icon">
                        <i class="{{$carte->icone->icone}}"></i>
                    </div>
                    <h2>{{$carte->titre}}</h2>
                    <p>{{$carte->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection