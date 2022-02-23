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
                    <span class="text-white">Tehničke karakteristike</span>
                    <h1 class="mb-5 text-lg">Tehničke karakteristike</h1>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="section doctor-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="doctor-details mt-4 mt-lg-0">
                        <h2 class="text-md">Dizajn</h2>
                        <div class="divider my-4"></div>
                        <img style="width: 300px;float: left;margin-right: 30px;margin-bottom: 30px;" src="images/tech1.jpg" >
                        <p>Prilikom dizajniranja naših mobilnih kuća smo pazili smo na svaki detalj. Kombinacijom savremenih i prirodnih materijala postigli smo pravi odnos kvaliteta i dizajna koji se lako može uklopiti u svaki prirodni ambijent. MMH kuće su odličan spoj tehnologije i prirode u njenom izvornom obliku.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="doctor-details mt-4 mt-lg-0">
                        <h2 class="text-md">Konstrukcija</h2>
                        <div class="divider my-4"></div>
                        <p>Konstruktivni sistem MMH objekata čini primarna i sekundarna čelična konstrukcija. Primarnu konstrukciju čine čelični stubovi od kutijastih profila, dimenzija 100x100x4mm i čelične grede, dimenzija 100x160x4mm. Sekundarnu konstrukciju čine čelični “U” profili, dimenzija 50x100x3mm.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="doctor-details mt-4 mt-lg-0">
                        <h2 class="text-md">Podovi</h2>
                        <div class="divider my-4"></div>
                        <img style="width: 300px;float: left;margin-right: 30px;margin-bottom: 30px;" src="images/tech2.png" >
                        <p>Prilikom izrade MMH objekata posebna pažnja je posvećena konstrukciji poda, kako bi se sprečilo ugibanje i stvorio stabilan oslonac. Slojeve poda čine termoizolacija od kamene vune, debljine 10cm; preko koje su postavljene OSB ploče, debljine 25mm; termoizolacione ploče od drvenih vlakana, debljine 35mm; OSB ploča, debljine 15mm; koja služi kao podloga za završnu oblogu poda. Završna obloga poda, dnevne zone i spavaćih soba, u standardnoj opremi, je laminat klase 33/AC5, debljine 12mm, dok je u kupatilima predviđena italijanska keramika I klase. Kao dodatnu opciju, uz doplatu, moguće je poručiti pod od prirodnog drveta (višeslojni parket), kao i pod od granitne keramike, po izboru.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="doctor-details mt-4 mt-lg-0">
                        <h2 class="text-md">Krov</h2>
                        <div class="divider my-4"></div>
                        <p>Krovni pokrivač je PVC krovna membrana, debljine 3mm; koja se postavlja preko OSB ploče, debljine 25mm; u blagom padu ka oluku. Termoizolaciju krova čine ploče kamene vune, debljine 10cm, u paketu sa dve OSB ploče i sloj termoizolacionih ploča od drvenih vlakana, debljine 50mm. Završna obloga plafona su gips-kartonske ploče, na metalnoj potkonstrukciji, sa dodatnim slojem termoizolacije od stiropora, debljine 30mm. Ukupna debljina svih slojeva krova je 24cm.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="doctor-details mt-4 mt-lg-0">
                        <h2 class="text-md">Zidovi</h2>
                        <div class="divider my-4"></div>
                        <p>Spoljašnji, fasadni zidovi su izrađeni od gotovih termopanela, debljine 8cm. Sa unutrašnje strane postavljena je termoizolacija od kamene vune, debljine 10cm, preko koje je postavljena završna obloga od gips-kartonskih ploča, debljine 12,5mm, na metalnoj potkonstrukciji, koje se finalno gletuju i boje bojom po izboru kupca. Unutrašnjost kuće moguće je dodatno oplemeniti drvenim oblogama, uz doplatu. Spoljašnja dekorativna obloga fasadnog zida je puno drvo (sibirski ariš ili bagrem), finalno zaštićeno specijalnim uljima za drvo za vanjsku upotrebu. Ukupna debljina zidne termoizolacije je 21cm. Unutrašnji, pregradni zidovi su suhomontažni od gips-kartonskih ploča, sa ispunom od kamene vune, kao zvučnim izolatorom, debljine 10cm i 15cm. Svi unutrašnji zidovi se gletuju i boje poludisperzivnom bojom, osim zidova kupatila, koji su obloženi keramičkim pločicama, vrhunskog kvaliteta i dizajna.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="doctor-details mt-4 mt-lg-0">
                        <h2 class="text-md">Stolarija</h2>
                        <div class="divider my-4"></div>
                        <p>Standardni paket opreme objekta podrazumeva fasadnu stolariju od petokomornih PVC profila, renomiranih evropskih proizvođača, sa dvoslojnim termoizolacionim staklom i standardnim aluminijuskim roletnama. Opciono, po želji kupca i uz doplatu, moguće je ugraditi šestokomorne PVC ili aluminijumske profile, sa troslojnim termoizolacionim staklom, punjenim argonom. Poseban ugođaj boravka u MMH kućama, uz doplatu, mogu pružiti “solomatic” žaluzine od aluminijumskih profila, širine 80mm, koje u dodatnom paketu elektroinstalacija mogu biti opremljene senzorima za vetar.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="doctor-details mt-4 mt-lg-0">
                        <h2 class="text-md">Elektro instalacija</h2>
                        <div class="divider my-4"></div>
                        <p>Elektroinstalacije su izvedene sa dvostruko izolovanim provodnicima. Svi kablovi su vođeni u zaštitnim crevima. Razvodna tabla je smeštena iznad vrata, opremljena FID sklopkom i osiguračima brendiranih svetskih proizvođača. Ambijentalna rasveta izvedena je LED trakama postavljenim u spuštenom stropu. Sva rasvetna tela se isporučuju u osnovnom paketu. Opciono je moguće poručiti SMART instalaciju, koja podrazumeva upravljanje svim potrošačima glasom ili telefonom preko aplikacije. Napajanje je izvedeno industrijskom utičnicom 32A, 3P.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="doctor-details mt-4 mt-lg-0">
                        <h2 class="text-md">Grejanje i hlađenje objekta</h2>
                        <div class="divider my-4"></div>
                        <p>Standardni paket opreme podrazumeva grejanje preko električnih, panelnih konvektora. Opciono, uz doplatu, moguće je ugraditi niskoemisiono podno grejanje na struju, regulisano wi-fi termostatom. Za objekte sa blažim temperaturnim režimom, moguće je ugraditi inverter klima uređaje, preko kojih se kuća može i grejati i hladiti.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="doctor-details mt-4 mt-lg-0">
                        <h2 class="text-md">Kuhinja</h2>
                        <div class="divider my-4"></div>
                        <p>U dodatnom paketu opreme, moguće je poručiti kuhinju sa svim aparatima.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="doctor-details mt-4 mt-lg-0">
                        <h2 class="text-md">Sanitarni uređaji i oprema</h2>
                        <div class="divider my-4"></div>
                        <p>MMH objekti su opremljeni vrhunskim sanitarnim uređajima i opremom renomiranih svetskih proizvođača. Jedinica za pripremu tople vode je opremljena wi-fi tehnologijom. Za ljubitelje čiste prirode, u dodatnom paketu opreme, se može poručiti biorazgradiva septička jama, kao i rezervoar za sanitarnu vodu sa pumpom.</p>
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
