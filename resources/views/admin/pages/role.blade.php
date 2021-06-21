@extends('adminlte::page')
@section('content')
@include('layouts.flash')
<div class="container mt-2">
    <div class="container mt-2" id="">
        <h2 class="text-center my-5">Modifier les roles</h2>
        <div class="">
            <table class=" table">
                <thead class=" bg-dark text-light">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3">
                            Nom + adresse mail
                        </th>
                        <th scope="col"
                            class="px-6 py-3 ">
                            Description
                        </th>
                        <th scope="col"
                            class="px-6 py-3 ">
                            Poste
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                            Role
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Role</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 w-50">
                    @forelse ($users as $user)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{$user->nom}} 
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{$user->email}}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4  break-words">
                            <p class="text-sm text-gray-900 ">{{$user->description}}</p>
                        </td>
                        <td class="px-6 py-4  break-words">
                            <p class="text-sm text-gray-900 ">{{$user->poste->poste}}</p>
                        </td>
                        <td class="px-8 py-3 whitespace-nowrap text-right text-sm font-medium">
                            <form action="{{route('modifrole', $user->id)}}" method="post" class="w-40 mx-auto flex">
                                @csrf
                                @method('PUT')
                                <select name="role" id="role" class=" form-control border-black-800 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md" {{Auth::user()->role_id == 2 && $user->role_id == 1 ? "disabled" : ""}}>
                                    @foreach ($roles as $role)
                                        <option value="{{$role->id}}"{{$user->role->role == $role->role ? "selected" : ""}}>{{$role->role}}</option>
                                    @endforeach
                                </select>
                                <button class="btn btn-primary ml-2 mt-2">Modifier</button>
                            </form>
                        </td>
                    </tr>
                    @empty 
                    <tr>
                        <td class="text-sm font-medium" colspan="5">
                            Il n'y a pas de nouveaux inscrits
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
{{-- <div class="text-center">
    <h1>Profil de la personne connecté :</h1>
    <h1>Nom : {{Auth::user()->nom}}</h1>
    <h1>Description : {{Auth::user()->description}}</h1>
    <h1>Genre : {{Auth::user()->genre->genre}}</h1>
    <h1>Role : {{Auth::user()->role->role}}</h1>
    <h1>Poste : {{Auth::user()->poste->poste}}</h1>
    <img src="{{asset('img/' . Auth::user()->image)}}" alt="">
</div> --}}