@extends('adminlte::page')
@section('content')
@extends('layouts.flash')
<div class="mb-4">
    <h4 class="text-gray-600"><b>Membres à valider</b></h4>
    <div class="mx-auto">
        @forelse ($users as $user)
        <div class="mt-4 w-1/3 border border-green-700 rounded py-4 px-4">
            <td class="px-8 py-4 whitespace-nowrap text-left text-sm font-medium">
                <p class="text-gray-900 "><b>Nom: </b> {{$user->nom}}</p>
                <p class="text-gray-700 "><b>E-mail: </b> {{$user->email}}</p>
            </td>
            <div class="flex mt-4">
                <form action={{route('validateUser', $user->id)}} method="post">
                    @csrf
                    @method('PUT')
                    <button class="bg-success hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">Validate</i></button>
                </form>
                <form method="post" action="{{route('validateDeleteUser', $user)}}">
                    @csrf
                    @method('DELETE')
                    <button class="bg-danger hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">Delete</button>
                </form>
            </div>
        </div>
        @empty 
        <tr>
            <td class="text-sm font-medium" colspan="3" >
                Aucun
            </td>
        </tr>
        @endforelse 
    </div>
    <div class="mb-4">
        <h4 class="text-gray-600"><b>Posts à valider</b></h4>
        <div>
            @forelse ($posts as $post)
            <div class="mt-4 w-3/5 border border-purple-700 rounded py-4 px-4">
                <td class="px-8 py-4 whitespace-nowrap text-left text-sm font-medium">
                    <h1 class="text-xl mb-4"><b>Titre:</b> {{$post->titre}}</h1>
                </td>
                <td class="px-6 py-4  break-words">
                    <img src="{{asset('img/'. $post->image)}}" alt="">
                    <p class="text-gray-900 mt-2"><b>Image:</b> {{$post->image}}</p>
                </td>
                <td class="px-6 py-4 break-words">
                    <p class="mt-4"><b>Text: </b></p>
                    <p class="text-gray-900 mt-2">{{$post->description}}</p>
                </td>
                <td>
                    <p class="text-gray-900 mt-4"><b>Catégorie: </b> {{$post->categorie->categorie}}</p>
                </td>
                <div class="flex mt-4">
                    <form action={{route('validateUpdateArticle', $post->id)}} method="post">
                        @csrf
                        @method('PUT')
                        <button class="bg-success  text-white font-bold py-2 px-4 rounded mr-2">Validate</i></button>
                    </form>
                    <form class="mt-3" method="post" action="{{route('trashArticle', $post)}}">
                        @csrf
                        @method('PUT')
                        <button class="bg-danger hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">Delete</button>
                    </form>
                </div>
            </div>
            @empty 
            <tr>
                <td class="text-sm font-medium" colspan="5" >
                    Pas de post à valider
                </td>
            </tr>
            @endforelse
        </div>
    </div>
    <div class="mb-4">
        <h4 class="text-gray-600"><b>Commentaires à valider</b></h4>
        <div>
            @forelse ($commentaires as $commentaire)
            <div class="mt-4 w-1/3 border border-green-700 rounded py-4 px-4">
                <td class="px-8 py-4 whitespace-nowrap text-left text-sm font-medium">
                    <p><b>Nom</b> {{$commentaire->auteur}}</p>
                    <p><b>E-mail</b> {{$commentaire->email}}</p>
                    <p class="mt-2"><b>Article</b> {{$commentaire->article->titre}}</p>
                </td>
                <td class="px-6 py-4 break-words">
                    <p class="text-gray-900 mt-2"><i>"{{$commentaire->message}}"</i></p>
                </td>
                <div class="flex mt-4">
                    <form action="{{route('commentUpdate', $commentaire->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <button class="bg-success text-white font-bold py-2 px-4 rounded mr-2">Validate</i></button>
                    </form>
                    <form method="post" class="mt-3" action="{{route('validateDeleteComment', $commentaire)}}">
                        @csrf
                        @method('DELETE')
                        <button class="bg-danger  text-white font-bold py-2 px-4 rounded" type="submit">Delete</button>
                    </form>
                </div>
            </div>
            @empty 
            <tr>
                <td class="text-sm font-medium" colspan="3" >
                    Pas de commentaires
                </td>
            </tr>
            @endforelse 
        </div>

    </div>
</div>
@endsection