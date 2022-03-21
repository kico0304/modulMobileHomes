@extends('layouts.app')

@php $lang = \Config::get('app.locale'); @endphp

@section('title', 'Home page')

@section('componentcss')
    <style>
        #test {
            color: red;
        }
        .swiper-button-next, .swiper-button-prev{
            color: var(--main-orange);
        }
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endsection

@section('sidebar')
    <p>This is appended to the master navbar.</p>
@endsection

@section('content')

    <!-- TEMPLATE PART START -->

    <!-- HEADER START -->
    @include('header')
    <!-- HEADER END -->

    <!-- Slider Start -->
    <section class="banner">
        <!-- <div id="arrow-left">&#171;</div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span id="smallText" class="text-uppercase text-sm letter-spacing animate">Zašto MMH?</span>
                        <h1 id="mainTitle" class="mb-3 mt-3 animate">ModulMobileHomes</h1>
                        <p id="descText" class="mb-4 pr-5 animate">Zato što su naši objekti dimenziosani prema vašim stvarnim potrebama, zato što jednostavnost gradnje štedi vaše vreme, zato šte se moderan dizajn uklapa u svako prirodno okruženje.</p>
                        <div class="btn-container">
                            <a id="buttonText" href="appoinment.html" target="_blank" class="btn btn-main-2 btn-icon btn-round-full animate">Kontaktirajte nas <i class="icofont-simple-right ml-2  "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="arrow-right">&#187;</div> -->


        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php

                    $sliderTexts = array (
                        array(
                            "ZAŠTO MMH?",
                            "ModulMobileHomes",
                            "MMH objekti su dimenzionisani prema stvarnim potrebama korisnika, a modularnost i jedinstvenost stambene strukture je postignuta zahvaljujući mogućnostima kombinovanja mobilnih jedinica, koje se modernim dizajnom uklapaju u svako prirodno okruženje.",
                            "Kontaktirajte nas "
                        ),
                        array(
                            "ZAŠTO MMH?",
                            "ModulMobileHomes",
                            "MMH objekti su dimenzionisani prema stvarnim potrebama korisnika, a modularnost i jedinstvenost stambene strukture je postignuta zahvaljujući mogućnostima kombinovanja mobilnih jedinica, koje se modernim dizajnom uklapaju u svako prirodno okruženje.",
                            "Kontaktirajte nas "
                            ),
                        array(
                            "ZAŠTO MMH?",
                            "ModulMobileHomes",
                            "MMH objekti su dimenzionisani prema stvarnim potrebama korisnika, a modularnost i jedinstvenost stambene strukture je postignuta zahvaljujući mogućnostima kombinovanja mobilnih jedinica, koje se modernim dizajnom uklapaju u svako prirodno okruženje.",
                            "Kontaktirajte nas "
                            )
                    );
                    $numberoftexts = count($sliderTexts);
                    $dir = "images/slider/";
                    $images = array();
                    if (is_dir($dir)){
                        if ($dh = opendir($dir)){
                            while (($file = readdir($dh)) !== false){
                                if (!is_dir($dir.$file)) $images[] = $file;
                            }
                            closedir($dh);
                        }
                    }
                    $numberofimages = count($images);

                    //getting images
                    $newArray = array();
                    $finalNumber = $numberofimages * $numberoftexts;
                    for($i=0; $i<$finalNumber; $i++){
                        $k = $i % count($images);
                        $newArray[$i] =  $images[$k];
                    }

                    //getting texts
                    $newArray_ = array();
                    for($i=0; $i<$finalNumber; $i++){
                        $k = $i % count($sliderTexts);
                        $newArray_[$i] =  $sliderTexts[$k];
                    }

                    for($i=0;$i<count($newArray);$i++) : ?>
                       <div class="swiper-slide">
                           <img src="images/slider/<?php echo $newArray[$i] ?>" />
                           <div class="sliderTextSingle">
                                <p class="text-uppercase text-sm letter-spacing animate"><?php echo $newArray_[$i][0] ?></p>
                                <h1  class="mb-3 mt-3 animate"><?php echo $newArray_[$i][1] ?></h1>
                                <p class="mb-4 pr-5 animate"><?php echo $newArray_[$i][2] ?></p>
                                <a id="buttonText" href="#" class="btn btn-main-2 btn-icon btn-round-full animate"><?php echo $newArray_[$i][3] ?><i class="icofont-simple-right ml-2  "></i></a>
                           </div>
                       </div>
                    <?php endfor;
                ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- Features Start -->
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-block d-lg-flex">
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-headphone-alt-2"></i>
                            </div>
                            <span>Tu smo za Vas</span>
                            <h4 class="mb-3">Online konsultacije</h4>
                            <p class="mb-4">Informišite se o našim proizvodima svakim radnim danom.</p>
                            <a href="appoinment.html" class="btn btn-main btn-round-full">Zakažite termin</a>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <span>Naš raspored</span>
                            <h4 class="mb-3">Radno vrijeme</h4>
                            <ul class="w-hours list-unstyled">
                                <li class="d-flex justify-content-between">Pon - Pet: <span>8:00 - 16:00</span></li>
                                <li class="d-flex justify-content-between">Subota: <span>9:00 - 14:00</span></li>
                                <li class="d-flex justify-content-between">Nedjelja: <span>Ne radimo</span></li>
                            </ul>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-support"></i>
                            </div>
                            <span>Podrška</span>
                            <h4 class="mb-3">+387 65 959 595</h4>
                            <p>Tu smo za Vas 24 sata snevno u slučaju hitnih slučajeva. Tu smo za Vas 24 sata snevno u slučaju hitnih slučajeva.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section cta-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <div class="cta-content">
                        <div class="divider mb-4"></div>
                        <h2 class="mb-5 text-lg">Za Vas smo postavili kućicu <span class="title-color">koju možete posjetiti svakim radnim danom uz prethodnu najavu</span></h2>
                        <a href="appoinment.html" class="btn btn-main-2 btn-round-full">Posjetite showroom<i class="icofont-simple-right  ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <!-- <div class="col-lg-4 col-sm-6">
                    <div class="about-img">
                        <img src="images/dijagram_MMH.png" alt="" class="img-fluid">
                        <img src="images/dijagram_MMH.png" alt="" class="img-fluid mt-4">
                    </div>
                </div> -->
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="images/dijagram_MMH.png" alt="" class="img-fluid img-fluid-exception">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <!-- <h2 class="title-color">Personal care <br>& healthy living</h2> -->
                        <p class="mt-4 mb-5 mb-5-exception">Zato što su naši objekti dimenziosani prema vašim stvarnim potrebama</p>
                        <p class="mt-4 mb-5 mb-5-exception">Zato što se mogućnošću kombinovanja modula može stvoriti jednistvena stambena struktura</p>
                        <p class="mt-4 mb-5 mb-5-exception">Zato što jednostavnost gradnje štedi vaše vreme</p>
                        <p class="mt-4 mb-5 mb-5-exception">Zato što vašu kuću možete u svakom trenutku dograditi  prema nekim novim potrebma</p>
                        <p class="mt-4 mb-5 mb-5-exception">Zato šte se moderan dizajn uklapa u svako prirodno okruženje</p>
                        <p class="mt-4 mb-5 mb-5-exception">Zato što se u cilju smanjenja utroška energije katrakteristike objekta mogu prilagoditi svim uslovima, lokalnim zahtevima i propisima i time stvoriti efikasan energetski sistem</p>
                        <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Kontaktirajte nas<i class="icofont-simple-right ml-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER START -->
    @include('footer')
    <!-- FOOTER END -->

    <!-- TEMPLATE PART END -->

    <!-- STOLETOV DIO ZA TESTIRANJE START -->
    <!-- <p>{{__('home.welcome')}}</p>
    @if(!$products->isEmpty())
        @foreach ($products as $product)
            <p>{{$product->name}}</p>
            <p>{{$product->$lang}}</p>
            @foreach ($product->product_parts as $b)
                <p>ovo je b {{$b['name']}}</p>
            @endforeach
        @endforeach
    @else
        <h1>No products!</h1>
    @endif -->
    <!-- STOLETOV DIO ZA TESTIRANJE END -->
@endsection

@section('js')

    <!-- Initialize Swiper -->
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
