@extends('User.pages.user')

@section('content')	
			<!-- End top-post Area -->
		<div class="site-main-container">
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-md-12">
							<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
								<h4 class="cat-title">Latest News</h4>
								@foreach($artikel as $artikel)
								<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img src="{{asset('private/storage/app/public/gambar/'.$artikel->gambar)}}" alt="">
										</div>
									</div>
									<div class="col-lg-7 post-right">
										<a href="{{route('DetailArtikel', $artikel->id)}}">
											<h4>{{$artikel->judul}}</h4>
										</a>
										<ul class="meta">
											<li><span class="lnr lnr-calendar-full"></span>{{$artikel->created_at}}</li>
										</ul>
										<p class="excert">
											{{substr($artikel->isi, 0, 100)}} ....
										</p>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End latest-post Area -->
		</div>
@stop