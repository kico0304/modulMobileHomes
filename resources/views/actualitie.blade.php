@extends('layouts.app')

@section('title', 'Home page')

@section('componentcss')
    <style>

    </style>
@endsection

@section('sidebar')
    <p>This is appended to the master navbar.</p>
@endsection

@section('content')

    <!-- HEADER START -->
    @include('header') 
    <!-- HEADER END -->

    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <!-- <span class="text-white">25. April 2021</span> -->
                    @foreach($actualities as $actualitie)
                    <h1 class="mb-5 text-lg">{{$actualitie->name}}</h1>
                    @endforeach                    
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="single-blog-item">
                        <!-- <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                            @foreach($actualitie->images as $image) 
                            <img src="" alt="" class="img-fluid">
                            <div class="gallery-cell"><img src="{{asset('images/actualities/actualities_'.$actualitie->id.'/'.$image->name)}}" ></div>
                            @endforeach
                        </div> -->
                        <div class="swiper mySwiper" style="max-height. 400px">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{asset('images/actualities/actualities_'.$actualitie->id.'/'.$image->name)}}" />
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="blog-item-content mt-5">
                            <!-- <div class="blog-item-meta mb-3">
                                <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-2"></i>25. April 2021</span>
                            </div>  -->
                            @foreach($actualities as $actualitie)
                            <h2 class="mb-4 text-md">{{$actualitie->name}}</h2>
                            <p class="lead mb-4">{{$actualitie->text}}</p>
                            @endforeach
                            <!-- <blockquote class="quote">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </blockquote> -->
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <!-- FOOTER START -->
    @include('footer') 
    <!-- FOOTER END -->


@endsection

@section('js')
    
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

@endsection
