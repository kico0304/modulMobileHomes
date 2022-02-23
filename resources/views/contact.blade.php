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
                    <h1 class="mb-5 text-lg">Kontaktirajte nas</h1>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- <section class="section contact-info pb-0">
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
    </section> -->

    <section class="contact-form-wrap section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <!-- <h2 class="text-md mb-2"></h2> -->
                        <div class="divider mx-auto my-4"></div>
                        <h3>Izaberite zemlju distributera:</h3>
                        <select name="countryChoose" id="countryChoose">
                            <option value="none">Molimo izaberite zemlju...</option>
                            <option value="Bosna i Hercegovina">Bosna i Hercegovina</option>
                            <option value="Hrvatska">Hrvatska</option>
                            <option value="Slovenija">Slovenija</option>
                            <option value="Srbija">Srbija</option>
                            <option value="Grčka">Grčka</option>
                            <option value="Makedonija">Makedonija</option>
                        </select>
                        <div id="addressCounties"></div>
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
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Ime i prezime" disabled="true">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="email" id="email" type="email" class="form-control" placeholder="E-mail adresa" disabled="true">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="subject" id="subject" type="text" class="form-control" placeholder="Tema poruke" disabled="true">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="phone" id="phone" type="text" class="form-control" placeholder="Broj telefona" disabled="true">
                                </div>
                            </div>
                        </div>

                        <div class="form-group-2 mb-4">
                            <textarea name="message" id="message" class="form-control" rows="8" placeholder="Poruka" disabled="true"></textarea>
                        </div>

                        <div class="text-center">
                            <input id="submitContact" class="btn btn-main btn-round-full" name="submit" type="submit" value="Pošalji" disabled="true"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="1920" height="0" id="gmap_canvas" src="" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://123movies-to.org"></a><br>
            <style>
                .mapouter{
                    position:relative;
                    text-align:right;
                    height:0px;
                    width:100%;
                }
            </style>
            <!-- <a href="https://www.embedgooglemap.net">google embedded</a> -->
            <style>
                .gmap_canvas{
                    overflow:hidden;
                    background:none!important;
                    height:0px;
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

        function disableInputs() {
            //getting selected option
            var selectBoxCountry = $("#countryChoose option:selected").attr("Value");
            //addresses
            var bosniaAddress = "<div class='logoAddress'><img src='images/gradprojektgroup.jpg'></div><div class='textLogoAddress'><b>Grad Projekt Studio</b><br>Isaije Mitrovića 3<br>78 000 Banja Luka, RS<br>Bosnia and Hercegovina<br>TEL/VIBER: +38765959595<br>www.modulmobilehomes.com<br>info@modulmobilehomes.com</div>";
            var sloveniaAddress = "<div class='logoAddress'><img src='images/gradprojektgroup.jpg'></div><div class='textLogoAddress'><b>“GRAD PROJEKT BIRO” DOO</b><br>Ulica Gradnikove brigade 53<br>5000 Nova Gorica<br>Slovenia<br>www.modulmobilehomes.com<br>info@modulmobilehomes.com</div>";
            var srbijaAddress = "<div class='logoAddress'><img src='images/primavera-logo.png'></div><div class='textLogoAddress'><b>Primavera elektro doo</b><br>Ugrinovački Put 29<br>11080, Beograd (Zemun)<br>Serbia<br>+381 61 182 29 02<br>www.primavera.house<br>info@primavera.house</div>";
            //switch content function
            switch(selectBoxCountry){
                case "none":
                    $("#name, #email, #subject, #phone, #message, #submitContact").prop("disabled", true);
                    $("#name, #email, #subject, #phone, #message").val("");
                    $(".mapouter, .gmap_canvas, #gmap_canvas").css("height", "0px");
                    $("#gmap_canvas").prop("src", "")
                    $("#addressCounties").html("").animate({'opacity': 1}, 400);
                    break;
                case "Bosna i Hercegovina":
                    $("#name, #email, #subject, #phone, #message, #submitContact").prop("disabled", false);
                    $(".mapouter, .gmap_canvas, #gmap_canvas").css("height", "500px");
                    $("#gmap_canvas").prop("src", "https://maps.google.com/maps?q=Isaije%20MItrovi%C4%87a%203,%2078000%20Banja%20Luka&t=&z=13&ie=UTF8&iwloc=&output=embed");
                    $("#addressCounties").html(bosniaAddress).animate({'opacity': 1}, 400);
                    break;
                case "Hrvatska":
                    $("#name, #email, #subject, #phone, #message, #submitContact").prop("disabled", false);
                    $(".mapouter, .gmap_canvas, #gmap_canvas").css("height", "500px");
                    $("#gmap_canvas").prop("src", "https://maps.google.com/maps?q=5000%20Nova%20Gorica,%20%20Ulica%20Gradnikove%20brigade%2053&t=&z=13&ie=UTF8&iwloc=&output=embed");
                    $("#addressCounties").html(sloveniaAddress).animate({'opacity': 1}, 400);
                    break;
                case "Slovenija":
                    $("#name, #email, #subject, #phone, #message, #submitContact").prop("disabled", false);
                    $(".mapouter, .gmap_canvas, #gmap_canvas").css("height", "500px");
                    $("#gmap_canvas").prop("src", "https://maps.google.com/maps?q=5000%20Nova%20Gorica,%20%20Ulica%20Gradnikove%20brigade%2053&t=&z=13&ie=UTF8&iwloc=&output=embed");
                    $("#addressCounties").html(sloveniaAddress).animate({'opacity': 1}, 400);
                    break;
                case "Srbija":
                    $("#name, #email, #subject, #phone, #message, #submitContact").prop("disabled", false);
                    $(".mapouter, .gmap_canvas, #gmap_canvas").css("height", "500px");
                    $("#gmap_canvas").prop("src", "https://maps.google.com/maps?q=Ugrinova%C4%8Dki%20Put%2029%20%2011080,%20Beograd%20(Zemun)%20Serbia&t=&z=13&ie=UTF8&iwloc=&output=embed");
                    $("#addressCounties").html(srbijaAddress).animate({'opacity': 1}, 400);
                    break;
                case "Grčka":
                    $("#name, #email, #subject, #phone, #message, #submitContact").prop("disabled", false);
                    $(".mapouter, .gmap_canvas, #gmap_canvas").css("height", "500px");
                    $("#gmap_canvas").prop("src", "https://maps.google.com/maps?q=Ugrinova%C4%8Dki%20Put%2029%20%2011080,%20Beograd%20(Zemun)%20Serbia&t=&z=13&ie=UTF8&iwloc=&output=embed");
                    $("#addressCounties").html(srbijaAddress).animate({'opacity': 1}, 400);
                    break;
                case "Makedonija":
                    $("#name, #email, #subject, #phone, #message, #submitContact").prop("disabled", false);
                    $(".mapouter, .gmap_canvas, #gmap_canvas").css("height", "500px");
                    $("#gmap_canvas").prop("src", "https://maps.google.com/maps?q=Ugrinova%C4%8Dki%20Put%2029%20%2011080,%20Beograd%20(Zemun)%20Serbia&t=&z=13&ie=UTF8&iwloc=&output=embed");
                    $("#addressCounties").html(srbijaAddress).animate({'opacity': 1}, 400);
                    break;
            }

        }
        //do the functon on load
        $(document).ready(function() {
            disableInputs();
        });
        //do the function on change
        $('#countryChoose').on('change', function() {
            disableInputs();
        });

    </script>

@endsection
