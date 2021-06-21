	<!-- page section -->
	@include('layouts.flash')
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							<img src="{{asset('img/' . $articles->image)}}" alt="">
							<div class="post-date">
								<h2>{{$articles->created_at->format('d')}}</h2>
								<h3>{{$articles->created_at->format('M - y')}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$articles->titre}}t</h2>
							<div class="post-meta">
								<a href="">{{$articles->user->nom}}</a>
								<a href="">
									@foreach ($articles->tags as $tag)
									<span href="">{{$tag->tag}}</span>    
									@endforeach
								</a>
								<a href="">{{count($commentaires)}} commentaires</a>
							</div>
							<p>{{$articles->description}}</p>
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="{{asset($articles->user->image)}}" alt="">
							</div>
							<div class="author-info">
								<h2>{{$articles->user->nom}}, <span>{{$articles->user->role->role}}</span></h2>
								<p>{{$articles->user->description}} </p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comments ({{count($commentaires)}})</h2>
							<ul class="comment-list">
								<li>
									@foreach ($commentaires as $commentaire)
										
									<div class="commetn-text">
										<h3>{{$commentaire->auteur}} | {{$commentaire->created_at->format('d-M-y')}}</h3>
										<p>{{$commentaire->message}}</p>
									</div>
									@endforeach
								</li>
							</ul>
						</div>
						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								<form method="POST" action="{{route('commentaire', $articles->id)}}" class="form-class">
									@csrf
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="auteur" placeholder="Your name">
											@error('auteur')
												<span class="invalid-feedback">
													<strong>{{$message}}</strong>
												</span>
											@enderror
										</div>
										<div class="col-sm-6">
											<input type="text" name="email" placeholder="Your email">
											@error('email')
												<span class="invalid-feedback">
													<strong>{{$message}}</strong>
												</span>
											@enderror
										</div>
										<div class="col-sm-12">
											<textarea name="message" placeholder="Message">
											@error('message')
												<span class="invalid-feedback">
													<strong>{{$message}}</strong>
												</span>
											@enderror
											</textarea>
											<button class="site-btn">send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							<li><a href="#">Vestibulum maximus</a></li>
							<li><a href="#">Nisi eu lobortis pharetra</a></li>
							<li><a href="#">Orci quam accumsan </a></li>
							<li><a href="#">Auguen pharetra massa</a></li>
							<li><a href="#">Tellus ut nulla</a></li>
							<li><a href="#">Etiam egestas viverra </a></li>
						</ul>
					</div>
					
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							<li><a href="">branding</a></li>
							<li><a href="">identity</a></li>
							<li><a href="">video</a></li>
							<li><a href="">design</a></li>
							<li><a href="">inspiration</a></li>
							<li><a href="">web design</a></li>
							<li><a href="">photography</a></li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->