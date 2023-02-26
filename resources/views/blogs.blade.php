@extends("layouts.app")

@section('content')

<div class="archives padding-top-30">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-8">
					<div class="entertrainment_carousel mb30">
						<!--CAROUSEL START-->
						<div class="entertrainment_item">
							<div class="row justify-content-center">
                                @foreach ($posts as $post)

								<div class="col-lg-6">
									<div class="single_post post_type3 mb30">
										<div class="post_img">
											<div class="img_wrap">
												<a href="{{ route('single-post',$post->slug) }}">
													<img src="{{ $post->image }}" alt="">
												</a>
											</div>
										</div>
										<div class="single_post_text">
											<div class="meta3">	<a href="{{ $post->category->slug }}">{{ $post->category->title }}</a>
												<a href="#">
                                                    {{ $post->created_at->format('M d, Y') }}
                                                </a>
											</div>
											<h4><a href="{{ route('single-post',$post->slug) }}">{{ $post->title }}</a></h4>
											<div class="space-10"></div>
											<p class="post-p">
                                                {{ $post->content }}
                                            </p>
										</div>
									</div>
								</div>

                                @endforeach

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="cpagination padding5050">
								<nav aria-label="Page navigation example">
									{{ $posts->links() }}
								</nav>
							</div>
						</div>
					</div>

				</div>

                @include("home-parts.sidebar")

			</div>
		</div>
	</div>


@endsection
