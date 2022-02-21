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
                    <span class="text-white">Kontakt</span>
                    <h1 class="mb-5 text-lg">Obratite nam se</h1>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="section contact-info pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-block mb-4 mb-lg-0">
                        <i class="icofont-live-support"></i>
                        <h5>Pozovite nas</h5>
                        +387 65 959 595
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-block mb-4 mb-lg-0">
                        <i class="icofont-support-faq"></i>
                        <h5>Pišite nam</h5>
                        info@modulmobilehomes.com
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-block mb-4 mb-lg-0">
                        <i class="icofont-location-pin"></i>
                        <h5>Posjetite nas</h5>
                        Isaije Mitrovića 3, Banja Luka, BiH
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-wrap section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2 class="text-md mb-2">Kontaktirajte nas</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p class="mb-5">Text text text.....</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form id="contact-form" class="contact__form " method="post" action="mail.php">
                    <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Vaša poruka je uspješno poslana.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Ime i prezime" >
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="email" id="email" type="email" class="form-control" placeholder="E-mail adresa">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="subject" id="subject" type="text" class="form-control" placeholder="Tema poruke">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="phone" id="phone" type="text" class="form-control" placeholder="Broj telefona">
                                </div>
                            </div>
                        </div>

                        <div class="form-group-2 mb-4">
                            <textarea name="message" id="message" class="form-control" rows="8" placeholder="Poruka"></textarea>
                        </div>

                        <div class="text-center">
                            <input class="btn btn-main btn-round-full" name="submit" type="submit" value="Pošalji"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="1920" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Isaije%20MItrovi%C4%87a%203,%2078000%20Banja%20Luka&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://123movies-to.org"></a><br>
            <style>
                .mapouter{
                    position:relative;
                    text-align:right;
                    height:500px;
                    width:100%;
                }
            </style>
            <!-- <a href="https://www.embedgooglemap.net">google embedded</a> -->
            <style>
                .gmap_canvas{
                    overflow:hidden;
                    background:none!important;
                    height:500px;
                    width:100%;
                }
            </style>
        </div>
    </div>

    <!-- FOOTER START -->
    @include('footer') 
    <!-- FOOTER END -->


@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {

        });

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_OHZ1nXAma84mIvxl4nK5U9H4Xieq6mU&callback=initMap&libraries=&v=weekly&channel=2"
      async></script>

@endsection
