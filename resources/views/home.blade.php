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

    <header>
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>info@modulmobilehomes.com</a></li>
                            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Isaije Mitrovića 3, Banja Luka, BiH </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="tel:+23-345-67890" >
                                <span>Tel./Viber: </span>
                                <span class="h4">+387 65 959 595</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="" class="img-fluid">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Početna</a>
                    </li>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Katalog + <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="#">MMH21.S01 – kuća za 2 osobe</a></li>
                            <li><a class="dropdown-item" href="#">MMH21.M01 – kuća za 4 osobe</a></li>
                            <li><a class="dropdown-item" href="#">MMH21.M02- kuća za 4 osobe</a></li>
                            <li><a class="dropdown-item" href="#">MMH21.L01- kuća za 6 osoba</a></li>
                            <li><a class="dropdown-item" href="#">MMH21.L.02- kuća za 6 osoba</a></li>
                            <li><a class="dropdown-item" href="#">MMH21.XL01- kuća za 8 osoba</a></li>
                            <li><a class="dropdown-item" href="#">NAPRAVI SVOJU KOMBINACIJU</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Za investitore</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Tehničke karakteristike</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">O nama</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Aktuelnosti</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Kontakt</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>

    <!-- Slider Start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing ">Zašto MMH?</span>
                        <h1 class="mb-3 mt-3">ModulMobileHomes</h1>
                        <p class="mb-4 pr-5">Zato što su naši objekti dimenziosani prema vašim stvarnim potrebama, zato što jednostavnost gradnje štedi vaše vreme, zato šte se moderan dizajn uklapa u svako prirodno okruženje.</p>
                        <div class="btn-container">
                            <a href="appoinment.html" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Kontaktirajte nas <i class="icofont-simple-right ml-2  "></i></a>
                        </div>
                    </div>
                </div>
            </div>
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

    <footer class="footer section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <img src="images/logo.png" alt="" class="img-fluid">
                        </div>
                        <div class="widget mb-5 mb-lg-0">
                            GRAD PROJEKT STUDIO d.o.o. <br/>
                            Isaije MItrovića 3, 78000 Banja Luka <br/>
                            Bosna i Hercegovina
                        </div>

                        <ul class="list-inline footer-socials mt-4">
                            <li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        SERBIA PROJEKT BIRO d.o.o. <br/>
                        Vlajkovićeva 29, 11000 Beograd <br/>
                        Serbia
                        <div class="divider mb-4 mb-4-exception"></div>
                        GRAD PROJEKT BIRO d.o.o. <br/>
                        Gradnikokve brigade 53, 5000 Nova Gorica <br/>
                        Slovenia
                        <div class="divider mb-4 mb-4-exception"></div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Kontaktirajte nas</h4>
                        <!-- <div class="divider mb-4"></div> -->

                        <div class="footer-contact-block mb-6">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-email mr-3"></i>
                                <span class="h6 mb-0">Svakim radnim danom</span>
                            </div>
                            <h4 class="mt-2"><a href="mailto:info@modulmobilehomes.com">info@modulmobilehomes.com</a></h4>
                        </div>

                        <div class="footer-contact-block">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-support mr-3"></i>
                                <span class="h6 mb-0">Pon do Pet : 08:00 - 16:00</span>
                            </div>
                            <h4 class="mt-2"><a href="tel:+38765959595">+387 65 959 595</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-btm py-4 mt-5">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-7">
                        <div class="copyright">
                            Copyright &copy; Reserved to 2021 Grad Projekt studio doo. Sva prava zadržana.
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
                            <form action="#" class="subscribe">
                                <input type="text" class="form-control" placeholder="Unesite e-mail adresu..">
                                <a href="#" class="btn btn-main-2 btn-round-full">Pretplatite se</a>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <a class="backtop js-scroll-trigger" href="#top">
                            <i class="icofont-long-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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
    <!-- <script type="text/javascript">
        $(document).ready(function() {

        });
    </script> -->
@endsection
