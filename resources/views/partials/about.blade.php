	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					@foreach ($homecarte as $carte)
						
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							
							<div class="icon">
								<i class="{{$carte->icone->icone}}"></i>
							</div>
							<h2>{{$carte->titre}}</h2>
							<p>{{$carte->description}}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					@foreach ($hometitrecontent as $item)
					<h2>
						@php
							$titre = str_replace('(', '<span>', $item->titre);
							$titrebis = str_replace(')', '</span>', $titre);
							echo $titrebis;
						@endphp
					</h2>
					@endforeach
				</div>
				<div class="row">
					@foreach ($homecontent as $content)
					
					<div class="col-md-6">
						<p>{{ Str::limit($content->texte, 250, '...') }}</p>
					</div>
					@endforeach
				</div>
				<div class="text-center mt60">
					<a href="#testi" class="site-btn">Browse</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							@foreach ($homevideo as $item)
								<img src="{{asset('img/' . $item->image)}}" alt="">
								<a href="{{$item->video}}" class="video-popup">
									<i class="fa fa-play"></i>
								</a>
								
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->