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
                    <span class="text-white">MOGUĆNOSTI</span>
                    <h1 class="mb-5 text-lg">Za investitore</h1>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="section service-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2>Želite li da napravite MMH kamp?</h2>
                        <div class="divider mx-auto my-4"></div>
                        <img src="images/investors.png" alt="" style="width: 100%;">
                    </div>
                </div>
            </div>

            <div class="row centered">
                <div class="col-lg-3 col-md-6 ">
                    <div class="department-block mb-5">
                        <!-- <img src="images/service/service-1.jpg" alt="" class="img-fluid w-100"> -->
                        <div class="content">
                            <div class="feature-icon mb-4 newIcons">
                                <i class="icofont-users-alt-2"></i>
                            </div>
                            <h4 class="mt-4 mb-2 title-color eeeback">Konsalting</h4>
                            <p class="mb-4">Tehno-ekonomska analiza lokacije (Višegodišnje iskustvo članova našeg tima, pruža Vam sigurnost prilikom izrade Vaših objekata.)</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="department-block mb-5">
                        <!-- <img src="images/service/service-2.jpg" alt="" class="img-fluid w-100"> -->
                        <div class="content">
                            <div class="feature-icon mb-4 newIcons">
                                <i class="icofont-law"></i>
                            </div>
                            <h4 class="mt-4 mb-2  title-color eeeback">Bez građevinske dozvole</h4>
                            <p class="mb-4">MMH spadaju u mobilne objekte. Za većinu lokacija nije potrbna građevinska dozvola ni lokacijski uslovi.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="department-block mb-5">
                        <!-- <img src="images/service/service-3.jpg" alt="" class="img-fluid w-100"> -->
                        <div class="content">
                            <div class="feature-icon mb-4 newIcons">
                                <i class="icofont-money"></i>
                            </div>
                            <h4 class="mt-4 mb-2 title-color eeeback">ROI</h4>
                            <p class="mb-4">Izuzetno brz povrat investicije. S obzirom na kvalitet gradnje, troškovi održavanja su minimalni.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="department-block mb-5">
                        <!-- <img src="images/service/service-3.jpg" alt="" class="img-fluid w-100"> -->
                        <div class="content">
                            <div class="feature-icon mb-4 newIcons">
                                <i class="icofont-hail-rainy-sunny"></i>
                            </div>
                            <h4 class="mt-4 mb-2 title-color eeeback">Disperzija rizika</h4>
                            <p class="mb-4">MMH objeki, po svojim tehničkim karakteristikama odgovaraju svim klimatskim uslovima. <!-- Čelična konstrukcija osigurava da se objekti ne mogu oštetiti prilikom prenošenja objekta na drugu lokaciju. --></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <p>Želite sigurno ulaganje i isplativu investiciju? Želite da svojim gostima pružite komfor kakav očekuju? Da li ste upoznati sa pojmom „glampinga“? Želite li brzo da saznate okvirnu procenu Vaše investicije? MMH tim ima odgovore na većinu Vaših pitanja! Način na koji živimo i putujemo se promenio. Ljudi više ne žele jednodimenzionalni odmor. Ne žele biti samo puki statisti u luksuzim hotelima, već žele biti deo prirode, zbog čega kampovanje postaje sve popularnije. Kako bi se omogućio aktivni odmor u prirodi i pri tome se odstupilo od loših navika tradicionalnog kampovanja, sa pogodnostima kakve postoje u hotelima sa pet zvezdica, glamping postaje nova dimenzija odmora. Ovo jedinstveno iskustvo Vam omogućava da odaberete udoban smeštaj, da birate okolinu, a da pritom uživate u luksuzu, udobnosti, kao i ostalim pogodnostima koje pruže savremena tehnologija. MMH tim Vam nudi mogućnost stručne analize lokacije i izradu idejnih rešenja za Vaše nove potrebe, kao i alat koji će Vam biti od pomoći prilikom procene odnosa vrednosti uloženih sredstava i potencijalnih prihoda, odnosno da Vam napravi procenu isplativosti investicije. Unošenjem odgovarajućih podataka u data polja, kroz par koraka, dobijate orjentacionu kalkulaciju prihoda i rashoda za projekat Vašeg novog kampa. Novo vreme. Nove navike. Nove odluke. Donesite svoju! Vaš MMH tim!</p>
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
