@extends('User.pages.user')

@section('content')

		<div class="site-main-container">
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start single-post Area -->
							<div class="single-post-wrap">
								
								<div class="feature-img-thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="{{asset('private/storage/app/public/gambar/'.$detail_movie->gambar)}}" alt="">
								</div>
								<div class="content-wrap">
										<h3>{{$detail_movie->movie}}</h3>
									<ul class="meta pb-20">
										
										<li><span class="lnr lnr-calendar-full"></span>{{$detail_movie->created_at}}</li>
										
									</ul>
									<p>
										{{$detail_movie->sinopsis}}
									</p>
								</div>
								
						</div>
						<!-- End single-post Area -->
					</div>
					<div class="col-lg-4">
						<div class="sidebars-area">
							<div class="single-sidebar-widget editors-pick-widget">
								<h6 class="title">Editor’s Pick</h6>
								<div class="editors-pick-post">
									<div class="feature-img-wrap relative">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="{{asset('private/storage/app/public/gambar/'.$detail_movie->gambar)}}" alt="">
										</div>
									</div>
									<div class="details">
										<a href="image-post.html">
											<h4 class="mt-20">{{$detail_movie->movie}}</h4>
										</a>
										<ul class="meta">
											<li><span class="lnr lnr-calendar-full"></span>{{$detail_movie->created_at}}</li>
										</ul>
										<p class="excert">
											{{substr($detail_movie->sinopsis, 0, 100)}} ....
										</p>
									</div>
									</div>
								</div>

							
							<div class="single-sidebar-widget most-popular-widget">
								<h6 class="title">Most Popular</h6>
								@foreach($artikel as $artikel)
								<div class="single-list flex-row d-flex">
									<div class="thumb">
										<img src="{{asset('private/storage/app/public/gambar/'.$artikel->gambar)}}" alt="" style="width: 100px; ">
									</div>
									<div class="details">
										<a href="image-post.html">
											<h6>{{$artikel->judul}}</h6>
										</a>
										<ul class="meta">
											<li><span class="lnr lnr-calendar-full"></span>{{$artikel->created_at}}</li>
											
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