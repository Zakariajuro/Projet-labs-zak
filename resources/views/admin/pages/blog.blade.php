@extends('adminlte::page')
@section('content')
@extends('layouts.flash')
    <h1 class="text-center">Blog</h1>
    <hr>
    <div class="py-5 px-5">
        <div class=" px-5">
            <div class="px-5">
                <div class="px-5 border-b border-gray-200">
                    <ul class="flex justify-center">
                        <a href="{{route('article.create')}}" class="bg-success text-center hover:bg-green-500 my-2 py-2 text-white font-bold hover:text-black px-4 rounded-sm">Add post</a>
                    </ul>

                    <table class="">
                        <tr class="border-2">
                            <th class="py-4 px-5 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">#</th>
                            <th class="py-4 px-5 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Image</th>
                            <th class="py-4 px-5 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Titre</th>
                            <th class="py-4 px-5 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>
                        </tr>
                        @forelse ($articles->where('trash', 0) as $art)
                            <tr>
                                <td class="py-4 px-5 border-b text-black font-bold border-grey-light">{{ $art->id }}</td>
                                <td class="py-4 px-5 border-b text-black font-bold border-grey-light"><img src="{{ asset('img/' . $art->image) }}" alt="" style="max-height:50px;"></td>
                                <td class="py-4 px-5 border-b text-black font-bold border-grey-light">{{ $art->titre }}</td>
                                <td class="flex">
                                    {{-- <a href="{{route('blog.show', $blog)}}">
                                        <button class="bg-green-500 p-1 hover:bg-green-300 rounded" title="Regarde l'article en détails">S</button>                        
                                    </a> --}}
                                    <a href="{{route('article.edit', $art->id)}}" class=" w-auto bg-primary ml-4 rounded-lg shadow-xl font-medium text-white  px-3 py-2">Edit</a>
                                    <form class="my-3" action="{{route('article.destroy', $art->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-auto bg-danger  rounded-lg shadow-xl font-medium text-white px-4 mt-2 py-2">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <p class="text-center font-bold mx-auto my-3">Pas d'article</p>
                        @endforelse
                    </table>
                    
                    {{-- <div class="page-pagination">
                    {{ $articles->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection