@extends('adminlte::page')
@section('content')
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-xl m-4 text-center md:text-left"> Créer un article</h3>
                        <!-- Validation Errors -->
                    <form method="POST" class="container" action="{{route('article.store')}}" enctype="multipart/form-data">
                        @csrf
                        <h1><b>Add post</b></h1>
                        <!-- Title -->
                        <div class="mt-4">
                            <label for="titre">Titre</label>
                            <input class="form-control" name="titre" type="text">
                        </div>
                        <!-- Text -->
                        <div class="mt-4">
                            <label for="description">Description</label>
                            <input class="form-control" name="description" type="text">
                        </div>
                        <!-- Image -->
                        <div class="mt-4">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <!-- Category -->
                        <div class="mt-4">
                            <label for="categorie_id">Categorie</label>
                            <select id="categorie_id" class="block mt-1 w-full ml-1 border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg" name="categorie_id" :value="old('category_id')">
                                @foreach ($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->categorie}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Tags -->
                        <div class="mt-4">
                            <label for="tag">Tag :</label>
                            @foreach ($tags as $tag)
                                <div class="mt-2 ml-2">
                                    <span>
                                        <input type="checkbox" name="taglist[]" value="{{$tag->id}}" style="height: 25px; width: 25px" class="border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
                                        <label for="taglist[]" class="ml-1">{{$tag->tag}}</label>
                                    </span>
                                </div>
                            @endforeach
                        </div>
                        </div>
                        <div class="flex items-center mt-6">
                            <div class="col w-full text-center">
                                <button class="mb-4 bg-primary text-white hover:bg-purple-700 collightblue font-bold py-2 px-4 rounded">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection