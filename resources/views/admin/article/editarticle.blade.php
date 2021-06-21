@extends('adminlte::page')
@section('content')
    <h1 class="text-center">Modifier l'article</h1>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-xl m-4 text-center md:text-left">Modifier article # {{$article->id}}</h3>
                    <form method="POST" action="{{route('article.update', $article->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="text-center md:text-left">
                            <img src="{{asset('img/' . $article->image)}}" alt="" />
                            <div>
                                <input type="file" name="image">
                            </div>
                            <div class="my-4">
                                {{-- <p class="font-bold">Titre</p> --}}
                                    {{-- <input type="text" name="titre" value="{{$article->titre}}"/> --}}
                                    {{-- <input type="text" name="titre" value="{{$article->titre}}">
                            </div> --}}
                            <div class="my-4">
                                <p class="font-bold">Catégorie
                                    <select name="categorie_id" id="categorie_id">
                                        @foreach ($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->categorie}}</option>
                                        @endforeach
                                    </select>
                                </p>
                            </div>
                            <div class="my-4">
                                <p class="font-bold">Tags:
                                    <select name="tag" id="tag">
                                        @foreach ($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->tag}}</option>
                                        @endforeach
                                    </select>
                                </p>
                            </div>
                            <input type="text" name="description" value="{{$article->description }}" class="form-control">
                            <div>
                                <button type="submit"
                                    class="w-auto bg-primary mt-3 text-white px-4 py-2">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection