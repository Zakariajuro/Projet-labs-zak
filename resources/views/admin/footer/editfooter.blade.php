@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier</h1>
    <form class="container" method="POST" action="{{route('adminfooter.update', $footer->id)}}">
        @csrf
        @method('PUT')
        <label for="phrase">Phrase du footer</label>
        <input name="phrase" value="{{$footer->phrase}}" class="@error('phrase') is-invalid @enderror form-control" type="text">
        @error('phrase')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="lien">Lien</label>
        <input name="lien" value="{{$footer->lien}}" class="@error('lien') is-invalid @enderror form-control" type="text">
        @error('lien')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
        <label for="motlien">Le mot du lien</label>
        <input name="motlien" value="{{$footer->motlien}}" class="@error('motlien') is-invalid @enderror form-control" type="text">
        @error('motlien')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <button class="btn btn-success my-3">Modifier</button>
    </form>
@endsection