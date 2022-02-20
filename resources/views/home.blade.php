@extends('layouts.app')

@php $lang = \Config::get('app.locale'); @endphp

@section('title', 'Home page')

@section('componentcss')
    <style>
        #test {
            color: red;
        }
    </style>
@endsection

@section('sidebar')
    <p>This is appended to the master navbar.</p>
@endsection

@section('content')

    <!-- TEMPLATE PART START -->
{{--@foreach($products as $product)--}}
{{--    <p>Product name: {{$product->names[0]->name}}</p>--}}
{{--    <p>Product price: {{$product->price}}</p>--}}
{{--    <p>Product surface: {{$product->surface}}</p>--}}
{{--    <p>Product text: {{$product->texts[0]->text}}</p>--}}
{{--    @foreach($product->images as $image)--}}
{{--        <p>Product image name: {{$image->name}}</p>--}}
{{--    @endforeach--}}
{{--    @foreach($product->product_parts as $part)--}}
{{--        <p>Product part name: {{$part->part_names[0]->name}}</p>--}}
{{--        <p>Product part text: {{$part->part_texts[0]->text}}</p>--}}
{{--        @foreach($part->part_images as $part_img)--}}
{{--            <p>Product part images: {{$part_img->name}}</p>--}}
{{--        @endforeach--}}
{{--    @endforeach--}}
{{--@endforeach--}}
    
    <!-- HEADER START -->
    @include('header') 
    <!-- HEADER END -->

    <!-- Slider Start -->
    <section class="banner" active-slide=1 active-text=1>
        <div id="arrow-left">&#171;</div>
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
        <div id="arrow-right">&#187;</div>
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

    <!-- HEADER START -->
    @include('footer') 
    <!-- HEADER END -->

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

<!-- BROJAC SLIKA ZA SLIDER START -->
<?php 
$directory = "images/slider/";
$filecount = 0;
$files = glob($directory . "*");
if ($files){$filecount = count($files);}
?>
<!-- BROJAC SLIKA ZA SLIDER END --> 

@section('js')
    
    <script src="{{ asset('js/slider.js') }}"></script>

    <script type="text/javascript">

        //get number of texts for slider
        var numberOfSliderTexts = Object.keys(slideTexts).length;

        function textSwitch(atn, side, ewa){
            if(side == "right"){
                if(atn == numberOfSliderTexts){

                    //smallText
                    $("#smallText").animate({'opacity': 0}, 400, function(){
                        $("#smallText").html(slideTexts[1].smallText).animate({'opacity': 1}, 400);    
                    });

                    //mainTitle
                    $("#mainTitle").animate({'opacity': 0}, 400, function(){
                        $("#mainTitle").html(slideTexts[1].mainTitle).animate({'opacity': 1}, 400);    
                    });

                    //descText
                    $("#descText").animate({'opacity': 0}, 400, function(){
                        $("#descText").html(slideTexts[1].descText).animate({'opacity': 1}, 400);    
                    });

                    //buttonText
                    $("#buttonText").animate({'opacity': 0}, 400, function(){
                        $("#buttonText").html(slideTexts[1].buttonText+'<i class="icofont-simple-right ml-2  "></i>').animate({'opacity': 1}, 400);    
                    });

                    //set new text attribute
                    ewa.attr("active-text", 1);
                }else{
                    var numberNeeded = parseInt(atn) + 1;

                    //smallText
                    $("#smallText").animate({'opacity': 0}, 400, function(){
                        $(this).html(slideTexts[numberNeeded].smallText).animate({'opacity': 1}, 400);    
                    });

                    //mainTitle
                    $("#mainTitle").animate({'opacity': 0}, 400, function(){
                        $("#mainTitle").html(slideTexts[numberNeeded].mainTitle).animate({'opacity': 1}, 400);    
                    });

                    //descText
                    $("#descText").animate({'opacity': 0}, 400, function(){
                        $("#descText").html(slideTexts[numberNeeded].descText).animate({'opacity': 1}, 400);    
                    });

                    //buttonText
                    $("#buttonText").animate({'opacity': 0}, 400, function(){
                        $("#buttonText").html(slideTexts[numberNeeded].buttonText+'<i class="icofont-simple-right ml-2  "></i>').animate({'opacity': 1}, 400);    
                    });

                    //set new text attribute
                    ewa.attr("active-text", numberNeeded);
                }
            }else if(side == "left"){
                if(atn == 1){

                    //smallText
                    $("#smallText").animate({'opacity': 0}, 400, function(){
                        $("#smallText").html(slideTexts[numberOfSliderTexts].smallText).animate({'opacity': 1}, 400);    
                    });

                    //mainTitle
                    $("#mainTitle").animate({'opacity': 0}, 400, function(){
                        $("#mainTitle").html(slideTexts[numberOfSliderTexts].mainTitle).animate({'opacity': 1}, 400);    
                    });

                    //descText
                    $("#descText").animate({'opacity': 0}, 400, function(){
                        $("#descText").html(slideTexts[numberOfSliderTexts].descText).animate({'opacity': 1}, 400);    
                    });

                    //buttonText
                    $("#buttonText").animate({'opacity': 0}, 400, function(){
                        $("#buttonText").html(slideTexts[numberOfSliderTexts].buttonText+'<i class="icofont-simple-right ml-2  "></i>').animate({'opacity': 1}, 400);    
                    });

                    //set new text attribute
                    ewa.attr("active-text", numberOfSliderTexts);
                    }else{
                    var numberNeeded = parseInt(atn) - 1;

                    //smallText
                    $("#smallText").animate({'opacity': 0}, 400, function(){
                        $(this).html(slideTexts[numberNeeded].smallText).animate({'opacity': 1}, 400);    
                    });

                    //mainTitle
                    $("#mainTitle").animate({'opacity': 0}, 400, function(){
                        $("#mainTitle").html(slideTexts[numberNeeded].mainTitle).animate({'opacity': 1}, 400);    
                    });

                    //descText
                    $("#descText").animate({'opacity': 0}, 400, function(){
                        $("#descText").html(slideTexts[numberNeeded].descText).animate({'opacity': 1}, 400);    
                    });

                    //buttonText
                    $("#buttonText").animate({'opacity': 0}, 400, function(){
                        $("#buttonText").html(slideTexts[numberNeeded].buttonText+'<i class="icofont-simple-right ml-2  "></i>').animate({'opacity': 1}, 400);    
                    });

                    //set new text attribute
                    ewa.attr("active-text", numberNeeded);
                    }
            }else{
                console.log("Slider side not defined");
            }
        };

        // SLIDER START
        $(document).ready(function() {
            $("#arrow-right").click(function(){

                //get element with attributes
                var elementWithAttrs = $(this).parent();

                //side clicked variable
                var x = "right";

                //get slide and text numbers
                var activeSlideNumber = $(this).parent().attr("active-slide");
                var activeTextNumber = $(this).parent().attr("active-text");


                if(activeSlideNumber == <?php echo $filecount ?>){
                    $(".banner").css('background', 'url("../images/slider/1.jpg")');
                    $(this).parent().attr("active-slide", 1);
                    textSwitch(activeTextNumber, x, elementWithAttrs);
                } else {
                    var activeSlide = parseInt(activeSlideNumber) + 1;
                    $(".banner").css('background', 'url("../images/slider/'+activeSlide+'.jpg")');
                    $(this).parent().attr("active-slide", activeSlide);
                    textSwitch(activeTextNumber, x, elementWithAttrs);
                }
            });
            $("#arrow-left").click(function(){

                //get element with attributes
                var elementWithAttrs = $(this).parent();

                //side clicked variable
                var x = "left";

                //get slide and text numbers
                var activeSlideNumber = $(this).parent().attr("active-slide");
                var activeTextNumber = $(this).parent().attr("active-text");

                if(activeSlideNumber == 1){
                    $(".banner").css('background', 'url("../images/slider/'+<?php echo $filecount ?>+'.jpg")');
                    $(this).parent().attr("active-slide", <?php echo $filecount ?>);
                    textSwitch(activeTextNumber, x, elementWithAttrs);
                } else {
                    var activeSlide = parseInt(activeSlideNumber) - 1;
                    $(".banner").css('background', 'url("../images/slider/'+activeSlide+'.jpg")');
                    $(this).parent().attr("active-slide", activeSlide);
                    textSwitch(activeTextNumber, x, elementWithAttrs);
                }
            });
        });
        // SLIDER END

    </script>
@endsection
