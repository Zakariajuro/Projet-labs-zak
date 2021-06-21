@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier Contact</h1>
    <form class="container" method="POST" action="{{route('admincontact.update', $contact->id)}}">
        @csrf
        @method('PUT')
        <label for="position">Position</label>
        <input class="@error('position') is-invalid @enderror form-control" value="{{$contact->position}}" name="position" type="text">
        @error('position')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="titre">Titre</label>
        <input class="@error('titre') is-invalid @enderror form-control" value="{{$contact->titre}}" name="titre" type="text">
        @error('titre')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="description">Description</label>
        <input class="@error('description') is-invalid @enderror form-control" value="{{$contact->description}}" name="description" type="text">
        @error('description')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="soustitre">sous titre</label>
        <input class="@error('soustitre') is-invalid @enderror form-control" value="{{$contact->soustitre}}" name="soustitre" type="text">
        @error('soustitre')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="adresse">Adresse</label>
        <input class="@error('adresse') is-invalid @enderror form-control" value="{{$contact->adresse}}" name="adresse" type="text">
        @error('adresse')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="telephone">Telephone</label>
        <input class="@error('telephone') is-invalid @enderror form-control" value="{{$contact->telephone}}" name="telephone" type="text">
        @error('telephone')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="email">Email</label>
        <input class="@error('email') is-invalid @enderror form-control" value="{{$contact->email}}" name="email" type="text">
        @error('email')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <button class="btn btn-success my-3">Modifier</button>
    </form>
@endsection