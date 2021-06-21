@extends('adminlte::page')
@section('content')
@include('layouts.flash')
<div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
    
                <!-- Articles à valider -->
                <div class="mb-4">
                    <h1 class="text-gray-600 text-center"><b>Articles supprimés</b></h1>
                    <div>
                        @forelse ($posts as $article)
                        <div class="mt-4 w-3/5 border border-purple-700 rounded py-4 px-4">
                            <td class="px-8 py-4 whitespace-nowrap text-left text-sm font-medium">
                                <h1 class="text-xl mb-4"><b>Titre :</b> {{$article->titre}}</h1>
                            </td>
                            <td class="px-6 py-4  break-words">
                                <img src="{{asset('img/'. $article->image)}}" alt="">
                            </td>
                            <td class="px-6 py-4 break-words">
                                <p class="mt-4"><b>Text :</b></p>
                                <p class="text-gray-900 mt-2">{{$article->description}}</p>
                            </td>
                            <td>
                                <p class="text-gray-900 mt-4"><b>Catégorie :</b> {{$article->categorie->categorie}}</p>
                            </td>
                            <div class="flex mt-4">
                                <form action="{{route('recupArticle', $article->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button class="bg-success text-white font-bold py-2 px-4 rounded mr-2">Récupérer</i></button>
                                </form>
                                <form class="mt-3" method="post" action="{{route('deleteArticle', $article)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-danger text-white font-bold py-2 px-4 rounded" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                        @empty 
                        <tr>
                            <td class="text-sm font-medium" colspan="5" >
                                <p class="text-center font-bold mx-auto my-3">Corbeille vide</p> 
                            </td>
                        </tr>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection