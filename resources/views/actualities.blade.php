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

    @foreach($actualities as $actualitie)
        <p>Actualities name: {{$actualitie->name}}</p>
        <p>Actualities text: {{$actualitie->text}}</p>
        @foreach($actualitie->images as $image)
            <img class="edit_img" alt="edit_image" src="{{asset('images/actualities/actualities_'.$actualitie->id.'/'.$image->name)}}">
        @endforeach
    @endforeach

    <!-- HEADER START -->
    @include('header')
    <!-- HEADER END -->

    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">NAJNOVIJE</span>
                    <h1 class="mb-5 text-lg">Aktuelnosti</h1>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-5">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <img src="images/aktuelnosti/blog-1.jpg" alt="" class="img-fluid ">
                                </div>
                                <div class="blog-item-content">
                                    <div class="blog-item-meta mb-3 mt-4">
                                        <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i>25. April 2021</span>
                                    </div>
                                    <h2 class="mt-3 mb-3"><a href="{{ route('singlearticle') }}">Postavljanje uzornog objekta</a></h2>
                                    <p class="mb-4">Danas smo postavili objekat MMH21.M01 na raskršću ulica Patre i Kralja Petra I Oslobodioca. Objekat ćemo koristiti kao SHOWROOM i moći ćete ga obići svaki radni dan od 12-16 sati (skraćeno zbog godišnjih odmora) ili po dogovoru sa našim prodajnim agentima. Obilazak možete zakazati na broj telefona 065 95 95 95 ili popunite formular na linku. </p>
                                    <a href="{{ route('singlearticle') }}" class="btn btn-main btn-icon btn-round-full">Opširnije<i class="icofont-simple-right ml-2  "></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 mb-5">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <img src="images/aktuelnosti/blog-1.jpg" alt="" class="img-fluid ">
                                </div>
                                <div class="blog-item-content">
                                    <div class="blog-item-meta mb-3 mt-4">
                                        <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i>25. April 2021</span>
                                    </div>
                                    <h2 class="mt-3 mb-3"><a href="{{ route('singlearticle') }}">Postavljanje uzornog objekta</a></h2>
                                    <p class="mb-4">Danas smo postavili objekat MMH21.M01 na raskršću ulica Patre i Kralja Petra I Oslobodioca. Objekat ćemo koristiti kao SHOWROOM i moći ćete ga obići svaki radni dan od 12-16 sati (skraćeno zbog godišnjih odmora) ili po dogovoru sa našim prodajnim agentima. Obilazak možete zakazati na broj telefona 065 95 95 95 ili popunite formular na linku. </p>
                                    <a href="{{ route('singlearticle') }}" class="btn btn-main btn-icon btn-round-full">Opširnije<i class="icofont-simple-right ml-2  "></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 mb-5">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <img src="images/aktuelnosti/blog-1.jpg" alt="" class="img-fluid ">
                                </div>
                                <div class="blog-item-content">
                                    <div class="blog-item-meta mb-3 mt-4">
                                        <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i>25. April 2021</span>
                                    </div>
                                    <h2 class="mt-3 mb-3"><a href="{{ route('singlearticle') }}">Postavljanje uzornog objekta</a></h2>
                                    <p class="mb-4">Danas smo postavili objekat MMH21.M01 na raskršću ulica Patre i Kralja Petra I Oslobodioca. Objekat ćemo koristiti kao SHOWROOM i moći ćete ga obići svaki radni dan od 12-16 sati (skraćeno zbog godišnjih odmora) ili po dogovoru sa našim prodajnim agentima. Obilazak možete zakazati na broj telefona 065 95 95 95 ili popunite formular na linku.</p>
                                    <a href="{{ route('singlearticle') }}" class="btn btn-main btn-icon btn-round-full">Opširnije<i class="icofont-simple-right ml-2  "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
	                    <div class="sidebar-widget search  mb-3 ">
		                    <h5>Pretraga</h5>
                            <form action="{{url('/actualities')}}" class="search-form" method="GET">
                                <input name="filter" type="text" value="{{$filter}}" class="form-control" placeholder="Traži...">
                                <i class="ti-search"></i>
                            </form>
	                    </div>
                        <div class="sidebar-widget latest-post mb-3">
                            <h5>Najpopularnije</h5>
                            <div class="py-2">
                                <span class="text-sm text-muted">25. April 2021</span>
                                <h6 class="my-2"><a href="{{ route('singlearticle') }}">Postavljanje uzornog objekta</a></h6>
                            </div>
                            <div class="py-2">
                                <span class="text-sm text-muted">25. April 2021</span>
                                <h6 class="my-2"><a href="{{ route('singlearticle') }}">Postavljanje uzornog objekta</a></h6>
                            </div>
                            <div class="py-2">
                                <span class="text-sm text-muted">25. April 2021</span>
                                <h6 class="my-2"><a href="{{ route('singlearticle') }}">Postavljanje uzornog objekta</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-8">
                    <nav class="pagination py-2 d-inline-block">
                        <div class="nav-links">
                            <a class="page-numbers" href="#"><i class="icofont-thin-double-left"></i></a>
                            <span aria-current="page" class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="page-numbers" href="#">3</a>
                            <a class="page-numbers" href="#"><i class="icofont-thin-double-right"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER START -->
    @include('footer')
    <!-- FOOTER END -->


@endsection

@section('js')
    <script type="text/javascript">

    </script>

@endsection
