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
                    <span class="text-white">O NAMA</span>
                    <h1 class="mb-5 text-lg">O nama</h1>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="section about-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 centered">
                    <h2 class="title-color resizedFont">PROJECT MANAGEMENT<br>& DESIGN</h2>
                    <img src='images/gradprojektgroup.jpg'>
                </div>
                <div class="col-lg-8 justified">
                    <p><b>GRAD PROJEKT GROUP</b> je specijalizovani servis za pružanje usluga iz svih oblasti projektovanja; arhitektonskog, urbanističkog i prostornog planiranja i konsaltinga u oblasti građevinarstva. Matična firma „GRAD PROJEKT“ d.o.o. je osnovana 1999. godine u Banjaluci (RS, BIH) i tokom proteklih 20 godina je realizovala više desetina individualnih i komercijalnih, kolektivnih, stambenih, stambeno-poslovnih, poslovnih, proizvodnih i javnih objekata za klijente širom Bosne i Hercegovine i Srbije. Jedna je od retkih firmi sa ovih prostora koja je u stanju da klijentima pruži kompletan servis, od stručnih i tehničkih analiza lokacije, pribavljanja urbanističkih saglasnosti za potrebe izgradnje objekata, idejnih i glavnih projekata za potrebe pribavljanja odobrenja za izgradnju, do finansijskih analiza isplativosti investicije, te kompletnog stručnog servisa kontrole kvaliteta izvedenih radova i nadzora nad izgradnjom objekata.</p>
                    <img src="images/about/sign.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 centered">
                    <h2 class="title-color resizedFont">MANUFACTURED BY</h2>
                    <img style="filter: drop-shadow(1px 1px 1px black)" src='images/metkon.png'>
                </div>
                <div class="col-lg-8 justified">
                    <p><b>METKON doo</b> je osnovana 2014. godine. Kompanija je specijalizovana za proizvodnju složenih metalnih konstrukcija i montažne radove.  Moto njenih zaposlenih jeste isporuka visokokvalitetnih proizvoda na vrijeme i prema potrebama kupca. Kupcima pruža prilagođene isporuke i usluge, kao i kontrolu proizvoda. Kvalifikovani zaposleni vode računa da svi proizvodi prođu detaljno i precizno testiranje kako bi se očuvali sigurnost i kvalitet. Cilj zaposlenih jeste i predstaviti sebe kao stručnjake, koji pružaju  pomoć u konkuretnom okruženju i poboljšavaju proizvode optimizacijom projekata i odabirom najpogodnijih rješenja. Kompanija Metkon pored usluga izrade i montaže, pruža pomoć i savjetovanje o tome kako se problemi na koje klijent nailazi mogu riješiti. Kroz saradnju kompanija dijeli stručnost, ali i kvalitet svojih proizvoda.</p>
                    <img src="images/about/sign.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="fetaure-page ">
        <div class="container">
            <h1 class="centered" style="margin: 0  0 50px 0;">PROJECT ASSOCIATES:</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="about-block-item mb-5 mb-lg-0">
                        <img src="images/drvoprodex.png" alt="" class="img-fluid w-100">
                        <h4 class="mt-3">Drvoprodex d.o.o.</h4>
                        <p class="justified">je porodična firma koja je osnovana 1992. godine. Na početku je proizvodnja bila bazirana na rezanu građu, a od 1999. godine firma proširuje proizvodni asortiman i počinje sa proizvodnjom parketa. Godine 2001, preduzeće započinje proizvodnju masivnih podova, a 2008. uvođenjem linije za proizvodnju višeslojnih podova, učinjen je značajan iskorak u širenju asortimana proizvodnje. U skladu sa željama i zahtevima kupaca, a u korak sa razvojem tehnologija i inovacijama u mogućnosti smo ponuditi različite završne obrade, a primenom najsavremenijih tehnika i na najsavremenijim tehnologijama. Drvo je oduvek bilo usko povezano sa životom čoveka i veoma poštovano u svim kulturama i vremenima. Veoma je dragocena sirovina, laka za obradu i upotrebljiva u različite svrhe.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="about-block-item mb-5 mb-lg-0">
                        <img src="images/unicoop-logo.jpg" alt="" class="img-fluid w-100">
                        <h4 class="mt-3">Unicoop Home</h4>
                        <p class="justified">deo je kompanije “Unicoop Trade d.o.o.”, koja već više od 25 godina gradi vodeću poziciju na domaćem tržištu u oblasti finih građevinskih radova i opremanja životnog prostora. Gradeći iskustvo u svojoj branši i slušajući potrebe naših kupaca, odlučili smo svima koji traže kvalitet ponuditi najveći izbor proizvoda. Ponosni smo zastupnici nekih od najvećih globalnih brendova u svetu keramike, rasvete, namještaja, fasadnih sistema, keramičkih lepila i hidroizolacije, krovnih prozora i aditiva za gradnju. Naš tim posebno edukovanih i posvećenih profesionalaca u stanju je izvršiti analizu svih potreba kupaca i na te potrebe odgovoriti ponudom izbalansiranog odnosa cijene i kvaliteta, te provesti ih kroz celokupan proces realizacije ideje uređenja njihovog doma ili poslovnog prostora.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="about-block-item mb-5 mb-lg-0">
                        <img src="images/doselektro.png" alt="" class="img-fluid w-100">
                        <h4 class="mt-3">DOS Elektro d.o.o.</h4>
                        <p class="justified">je osnovan 1993. godine, ali od 1998. godine radi pod sadašnjim nazivom. Sedište firme je u Banjaluci i radimo po celoj Bosni i Hercegovini. Svojim kupcima nudimo pouzdane usluge i u našem području imamo optimalan odnos između cene i kvaliteta. DOS elektro nudi uslugu koja slijedi svetske standarde, uspješno zadovoljavajući potrebe kupaca širom BiH.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section awards">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <h2 class="title-color">Project supported by:</h2>
                    <div class="divider mt-4 mb-5 mb-lg-0"></div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="award-img">
                                <img src="images/alumil.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="award-img">
                                <img src="images/aragosta.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="award-img">
                                <img src="images/ardor.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="award-img">
                                <img src="images/dacom.png" alt="" class="img-fluid">
                            </div>
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
    <script type="text/javascript">

    </script>

@endsection
