@extends('User.pages.user')

@section('content')	
			<!-- End top-post Area -->
		<div class="site-main-container">
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
								<h4 class="cat-title">Latest News</h4>
								@foreach($artikel as $artikel)
								<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img src="{{asset('private/storage/app/public/gambar/'.$artikel->gambar)}}" >
										</div>
									</div>
									<div class="col-lg-7 post-right">
										<a href="{{route('DetailArtikel', $artikel->id)}}">
											<h4>{{$artikel->judul}}</h4>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$artikel->created_at}}</a></li>
										</ul>
										<p class="excert">
											{{substr($artikel->isi, 0, 100)}} ....
										</p>
									</div>
								</div>
								@endforeach
							<!-- End latest-post Area -->
							
							<!-- Start popular-post Area -->
							<!-- End popular-post Area -->

							<!-- Start relavent-story-post Area -->
							<!-- End relavent-story-post Area -->
						</div>
					</div>
						<div class="col-lg-4">
							<div class="sidebars-area">				
								<div class="single-sidebar-widget most-popular-widget">
									<h6 class="title">Movie List</h6>
									@foreach($movie as $movie)
									<div class="single-list flex-row d-flex">
										<img src="{{asset('private/storage/app/public/gambar/'.$movie->gambar)}} " alt="" style="width: 30%" >
										<div class="details">
											<a href="{{route('Detail', $movie->id)}}">
												<h6>{{$movie->movie}}</h6>
											</a>
											<ul class="meta">
												<li><span class="lnr lnr-calendar-full"></span>{{$movie->created_at}}</li>
												<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
											</ul>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End latest-post Area -->
		</div>
@stop