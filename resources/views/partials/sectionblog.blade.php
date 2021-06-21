<!-- page section -->
<div id="articlepag" class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Post item -->
                <div class="post-item">
                    @foreach ($articles->reverse() as $article)
                        
                    <div class="post-thumbnail">
                        <img src="{{asset('img/' . $article->image)}}" alt="">
                        <div class="post-date">
                            <h2>{{$article->created_at->format('d')}}</h2>
                            <h3>{{$article->created_at->format('M - y')}}</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$article->titre}}</h2>
                        <div class="post-meta">
                            <a href="">{{$article->user->nom}}</a>
                            <a href="">
                            @foreach ($article->tags as $taag)
                                {{$taag->tag}}
                            @endforeach
                                </a>                                
                            <a href="">{{$article->commentaires->count()}} commentaires</a>
                        </div>
                        <p>{{ Str::limit($article->description, 200, '...') }}</p>
                        
                        <a href="{{route('blogpost', $article->id)}}" class="read-more">Read More</a>
                    </div>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        {{ $articles->links() }}
                    </div>
                </div>
                
        
        
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($categorie as $item)
                            <li><a href="{{route('categorie', $item->id)}}">{{$item->categorie}}</a></li>                            
                        @endforeach
                        
                    </ul>
                </div>
               
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    @foreach ($tag as $item)
                    <ul class="tag">
                        <li><a href="">{{$item->tag}}</a></li>
                    </ul>
                    @endforeach
                </div>
        
            </div>
        </div>
    </div>
</div>
<!-- page section end-->

