@extends('layouts.app')

@section('content')
    <!--::::: POST CAROUSEL AREA START  :::::::-->

    <div class="fifth_bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="carousel_posts1 owl-carousel nav_style2 mb40 mt30">
                        <!--CAROUSEL START-->
                        @foreach ($postcarosalarea as $postcarosal)
                            <div class="single_post widgets_small post_type5">
                                <div class="post_img">
                                    <div class="img_wrap">
                                        <a href="#">
                                            <img src="{{ $postcarosal->image }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="single_post_text">
                                    <h4><a
                                            href="{{ route('single-post', $postcarosal->slug) }}">{{ $postcarosal->title }}</a>
                                    </h4>
                                    <p>{{ substr($postcarosal->content, 0, 20) }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!--CAROUSEL END-->
                </div>
            </div>
        </div>
    </div>
    <!--::::: POST CAREOUSEL AREA END :::::::-->


    <!--::::: POST GALLARY AREA START :::::::-->
    <div class="post_gallary_area fifth_bg mb40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="slider_demo2">
                                @foreach ($sliderposts as $sliderpost)
                                    <div class="single_post post_type6 xs-mb30">
                                        <div class="post_img gradient1">
                                            <img src="{{ $sliderpost->image }}" alt=""> <span class="tranding">
                                                <i class="fas fa-play"></i>
                                            </span>
                                        </div>
                                        <div class="single_post_text">
                                            <div class="meta meta_separator1"> <a
                                                    href="#">{{ $sliderpost->category->title }}</a>
                                                <a href="#">{{ $sliderpost->created_at->format('M d, Y') }}</a>
                                            </div>
                                            <h4><a class="play_btn" href="video_post1.html">{{ $sliderpost->title }}</a>
                                            </h4>
                                            <div class="space-10"></div>
                                            <p class="post-p">{{ $sliderpost->content }}</p>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="slider_demo1">
                                @foreach ($sliderposts as $sliderpost)
                                    <div class="single_gallary_item">
                                        <img src="{{ $sliderpost->image }}" alt="image">
                                    </div>
                                @endforeach

                            </div>
                        </div>


                        @include('home-parts.category-with-product')
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--::::: POST GALLARY AREA END ::::::: -->

    <!--::::: FEATURE_POST AREA START :::::::-->
    <div class="feature_carousel_area mb40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2 class="widget-title">Feature News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="feature_carousel owl-carousel nav_style1">
                        <!--CAROUSEL START-->
                        @foreach ($featured as $feature)
                            <div class="single_post post_type6 post_type7">
                                <div class="post_img gradient1">
                                    <a href="#">
                                        <img src="{{ $feature->image }}" alt="">
                                    </a>
                                </div>
                                <div class="single_post_text">
                                    <div class="meta5"> <a href="#">{{ $feature->category->title }}</a>
                                        <a href="#">March 26, 2020</a>
                                    </div>
                                    <h4>
                                        <a href="post1.html">{{ substr($feature->content, 0, 10) }}</a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!--CAROUSEL END-->
                </div>
            </div>
        </div>
    </div>
    <!--::::: FEATURE POST AREA END :::::::-->
    <!--::::: TRANDING CAROUSEL AREA START :::::::-->

    @include('home-parts.tranding-news')

    <!--::::: TRANDING CAROUSEL AREA END :::::::-->
    <!--::::: MIX CAROUSEL AREA START :::::::-->

    <div class="half_bg1 mix_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mix_carousel">
                        <!--CAROUSEL START-->
                        <div class="single_mix_carousel owl-carousel nav_style3">
                            @foreach ($sliderposts as $sliderpost)
                                <div class="single_post post_type6 post_type9">
                                    <div class="post_img gradient1">
                                        <div class="img_wrap">
                                            <a class="play_btn" href="#">
                                                <img src="{{ $sliderpost->image }}" alt="">
                                            </a>
                                        </div> <span class="tranding">
                                            <i class="fas fa-play"></i>
                                        </span>
                                    </div>
                                    <div class="single_post_text">
                                        <div class="meta"> <a
                                                href="{{ route('single-category', $sliderpost->category->slug) }}">{{ $sliderpost->category->title }}</a>
                                            <a href="#">{{ $sliderpost->created_at->format('M d, Y') }}</a>
                                        </div>
                                        <h4><a
                                                href="{{ route('single-category', $sliderpost->category->slug) }}">{{ $sliderpost->title }}</a>
                                        </h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!--CAROUSEL END-->
                </div>
            </div>
        </div>
        <div class="space-60"></div>
    </div>
    <!--::::: MIX CAROUSEL AREA END :::::::-->

    <!--::::: VIDEO POST AREA END :::::::-->
    <!--::::: ENTERTAINMENT AREA START :::::::-->

    <div class="entertrainments">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <h2 class="widget-title">Entertrainment News</h2>
                            </div>
                        </div>
                    </div>
                    <div class="entertrainment_carousel mb30">
                        <!--CAROUSEL START-->
                        <div class="entertrainment_item">
                            <div class="row justify-content-center">
                                @foreach ($lettestposts as $post)

                                @endforeach
                                <div class="col-md-6">
                                    <div class="single_post post_type3 mb30">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="{{ asset('frontend') }}/assets/img/entertrainment/enter1.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <div class="meta3"> <a href="#">TECHNOLOGY</a>
                                                <a href="#">March 26, 2020</a>
                                            </div>
                                            <h4><a href="post1.html">There may be no consoles in the future ea exec
                                                    says</a></h4>
                                            <div class="space-10"></div>
                                            <p class="post-p">The property, complete with 30-seat screening from room, a
                                                100-seat amphitheater and a swimming pond with sandy shower…</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="row">

                        <div class="col-lg-6 col-lg-12">
                            <div class="widget category mb30">
                                <div class="row">
                                    <div class="col-6 align-self-center">
                                        <h2 class="widget-title">Categories</h2>
                                    </div>
                                    <div class="col-6 text-right align-self-center"> <a href="#"
                                            class="see_all mb20">See All</a>
                                    </div>
                                </div>
                                <ul>
                                    @foreach ($categories as $category)


                                    <li>
                                        <a href="#"
                                            style="background: url({{ $category->image }});">
                                            <span>{{ $category->title }}</span>
                                            <img src="{{ asset('frontend') }}/assets/img/icon/union.png" alt="">
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--::::: ENTERTAINMENT AREA END :::::::-->
@endsection
