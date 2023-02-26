@extends("layouts.app")

@section('content')
<!--::::: MENU AREA END :::::::-->
	<!--::::: ARCHIVE AREA START :::::::-->
	<div class="archives post post1 padding-top-30">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bridcrumb">	<a href="#">Home</a> / Archive / {{ $post->title }}</div>
				</div>
			</div>
			<div class="space-30"></div>
			<div class="row">
				<div class="col-md-6 col-lg-8">
					<div class="shadow6">
						<div class="padding20 white_bg
						">
							<div class="row">
								<div class="col-12">
									<div class="page_comments">
										<ul class="inline">
											<li class="page_category">{{ $post->category->title }}</li>
											<li><i class="fas fa-comment"></i>563</li>
											<li><i class="fas fa-fire"></i>536</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="space-30"></div>
							<div class="single_post_heading">
								<h1>{{ $post->title }}</h1>
								<div class="space-10"></div>
								<p>{{ $post->content }}</p>
							</div>
							<div class="space-20"></div>
							<div class="row">
								<div class="col-lg-6 align-self-center">
									<div class="author">
										<div class="author_img">
											<div class="author_img_wrap">
												<img src="{{ $post->user->image }}" alt="">
											</div>
										</div>	<a href="#">{{ $post->user->name }}</a>
										<ul>
											<li><a href="#">{{ $post->user->created_at->format('M d, Y') }}</a>
											</li>
											<li>Updated {{ $post->user->updated_at->format('h,i,s a') }}</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-6 align-self-center">
									<div class="author_social inline text-right">
										<ul>
											<li><a href="#"><i class="fab fa-instagram"></i></a>
											</li>
											<li><a href="#"><i class="fab fa-facebook-f"></i></a>
											</li>
											<li><a href="#"><i class="fab fa-youtube"></i></a>
											</li>
											<li><a href="#"><i class="fab fa-instagram"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="space-20"></div>
						</div>



					</div>
					<div class="space-30"></div>
					<div class="next_prev">
						<div class="row">
							<div class="col-lg-6 align-self-center">
								<div class="next_prv_single padding20 shadow6 next_prv_single3">
									<p>PREVIOUS NEWS &nbsp; <i class="fas fa-angle-right"></i>
									</p>
									<h3><a href="#">Kushner puts himself in middle of white house’s chaotic coronavirus response.</a></h3>
								</div>
							</div>
							<div class="col-lg-6 align-self-center">
								<div class="next_prv_single padding20 shadow6 next_prv_single3">
									<p>NEXT NEWS &nbsp; <i class="fas fa-angle-right"></i>
									</p>
									<h3><a href="#">C.I.A. Hunts for authentic virus totals in china, dismissing government tallies</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>

                @include("home-parts.sidebar")
			</div>
		</div>
	</div>
	<!--::::: ARCHIVE AREA END :::::::-->
	<div class="space-60"></div>
	<!--::::: LATEST BLOG AREA START :::::::-->

    <div class="fourth_bg padding6030">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2 class="widget-title">Our Latest Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($ourlettestblog as $post)
                <div class="col-md-6 col-lg-4">
                    <div class="single_post post_type3 mb30">
                        <div class="post_img">
                            <a href="#">
                                <img src="{{ $post->image }}" alt="">
                            </a>
                        </div>
                        <div class="single_post_text">
                            <div class="meta3">	<a href="{{ $post->category->slug }}">{{ $post->category->title }}</a>
                                <a href="#">{{ $post->created_at->format('M d, Y') }}</a>
                            </div>

                            <h4><a href="{{ route("single-post", $post->slug ) }}">{{ $post->title }}</a></h4>
                            <div class="space-10"></div>
                            <p class="post-p">{{ $post->content }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

	<!--::::: LATEST BLOG AREA END :::::::-->
	<div class="space-60"></div>
	<!--:::::  COMMENT FORM AREA START :::::::-->
	<div class="comment_form2">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-10 m-auto">
					<form action="#">
						<div class="row">
							<div class="col-md-6">
								<input type="text" placeholder="Full name">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Email address">
							</div>
							<div class="col-12">
								<textarea name="messege" id="messege" cols="30" rows="5" placeholder="Tell us about your opinion…"></textarea>
							</div>
							<div class="col-12">
								<input type="button" value="POST OPINION" class="cbtn2">
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="space-60"></div>
			<div class="comment_list comment_list2">
				<div class="row">
					<div class="col-12 col-lg-10 m-auto">
						<h3>Our latest news</h3>
						<div class="single_comment white_bg shadow6">
							<div class="comment_img">
								<img src="assets/img/author/author2.png" alt="">
							</div>
							<div class="row">
								<div class="col-sm-6">	<a href="#">QuomodoSoft</a>
								</div>
								<div class="col-sm-6">
									<div class="replay text-right">	<a href="#">replay</a>
									</div>
								</div>
							</div>
							<div class="space-5"></div>
							<p>We’ve invested every aspect of how we serve our users over the past Pellentesque rutrum ante in nulla suscipit, vel posuere leo tristique.</p>
						</div>
						<div class="single_comment white_bg shadow6">
							<div class="comment_img">
								<img src="assets/img/author/author2.png" alt="">
							</div>
							<div class="row">
								<div class="col-sm-6">	<a href="#">QuomodoSoft</a>
								</div>
								<div class="col-sm-6">
									<div class="replay text-right">	<a href="#">replay</a>
									</div>
								</div>
							</div>
							<div class="space-5"></div>
							<p>We’ve invested every aspect of how we serve our users over the past Pellentesque rutrum ante in nulla suscipit, vel posuere leo tristique.</p>
						</div>
						<div class="single_comment white_bg shadow6">
							<div class="comment_img">
								<img src="assets/img/author/author2.png" alt="">
							</div>
							<div class="row">
								<div class="col-sm-6">	<a href="#">QuomodoSoft</a>
								</div>
								<div class="col-sm-6">
									<div class="replay text-right">	<a href="#">replay</a>
									</div>
								</div>
							</div>
							<div class="space-5"></div>
							<p>We’ve invested every aspect of how we serve our users over the past Pellentesque rutrum ante in nulla suscipit, vel posuere leo tristique.</p>
						</div>
						<div class="single_comment inner_cm  white_bg shadow6">
							<div class="comment_img">
								<img src="assets/img/author/author2.png" alt="">
							</div>
							<div class="row">
								<div class="col-sm-6">	<a href="#">QuomodoSoft</a>
								</div>
								<div class="col-sm-6">
									<div class="replay text-right">	<a href="#">replay</a>
									</div>
								</div>
							</div>
							<div class="space-5"></div>
							<p>We’ve invested every aspect of how we serve our users over the past Pellentesque rutrum ante in nulla suscipit, vel posuere leo tristique.</p>
						</div>
						<div class="space-20"></div>	<a href="#" class="cbtn2">Load More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="space-100"></div>
	<!--:::::  COMMENT FORM AREA END :::::::-->
	<!--::::: BANNER AREA START :::::::-->
	<div class="padding5050 fourth_bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 m-auto">
					<div class="banner1">
						<a href="#">
							<img src="assets/img/bg/banner1.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

    @endsection
