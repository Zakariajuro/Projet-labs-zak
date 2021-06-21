@extends('adminlte::page')
@section('content')
<h1 class="text-center">Modifier le Texte</h1>
    <form class="text-center" method="POST" action="{{route('homecontent.update', $homecontent->id)}}">
        @csrf
        @method('PUT')
        <label for="texte">texte :</label>
        <input name="texte" type="text" value="{{$homecontent->texte}}" class="@error('texte') is-invalid @enderror form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        @error('texte')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <button class="btn btn-success my-3">Modiffier</button>
    </form>
@endsection