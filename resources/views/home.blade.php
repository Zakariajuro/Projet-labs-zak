@extends('adminlte::page')

@section('title', 'AdminLTE')


@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">BackOffice</h1>
                </div>
            </div>
            <h1 class="text-center">Bienvenue <span class="text-primary">{{Auth::user()->nom}}</span></h1>
                </div>
    </div>
@stop
