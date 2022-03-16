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
                <div class="col-lg-8 text-center">
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
                <p class="textJustify">Želite sigurno ulaganje i isplativu investiciju? Želite da svojim gostima pružite komfor kakav očekuju? Da li ste upoznati sa pojmom „glampinga“? Želite li brzo da saznate okvirnu procenu Vaše investicije? MMH tim ima odgovore na većinu Vaših pitanja! Način na koji živimo i putujemo se promenio. Ljudi više ne žele jednodimenzionalni odmor. Ne žele biti samo puki statisti u luksuzim hotelima, već žele biti deo prirode, zbog čega kampovanje postaje sve popularnije. Kako bi se omogućio aktivni odmor u prirodi i pri tome se odstupilo od loših navika tradicionalnog kampovanja, sa pogodnostima kakve postoje u hotelima sa pet zvezdica, glamping postaje nova dimenzija odmora. Ovo jedinstveno iskustvo Vam omogućava da odaberete udoban smeštaj, da birate okolinu, a da pritom uživate u luksuzu, udobnosti, kao i ostalim pogodnostima koje pruže savremena tehnologija. MMH tim Vam nudi mogućnost stručne analize lokacije i izradu idejnih rešenja za Vaše nove potrebe, kao i alat koji će Vam biti od pomoći prilikom procene odnosa vrednosti uloženih sredstava i potencijalnih prihoda, odnosno da Vam napravi procenu isplativosti investicije. Unošenjem odgovarajućih podataka u data polja, kroz par koraka, dobijate orjentacionu kalkulaciju prihoda i rashoda za projekat Vašeg novog kampa. Novo vreme. Nove navike. Nove odluke. Donesite svoju! Vaš MMH tim!</p>
            </div>
            <div class="row">
                <h3 class="margined30 centered flexGrow1 myMainColorForTexts">Orjentaciona kalkulacija za proračun prihoda i rashoda vašeg glamuroznog kampa</h3>
                <form id="calc-form" class="calc-form" method="post" action="calc.php">
                    <div class="row centered">
                        <div class="col-lg-6 col-md-6">
                            <div id="calculationButton" class="btn btn-main btn-round-full btn-active">Kalkulacija</div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div id="sendCalculationButton" class="btn btn-main btn-round-full btn-inactive">Kontakt</div>
                        </div>
                    </div>
                    <div class="row" id="calculationRow">
                        <div class="col-lg-12 col-md-12 margined10">
                            <div class="form-group">
                                <label>Cena zemljišta (€)</label>
                                <input name="landPrice" id="landPrice" type="number" class="form-control" placeholder="0 - posedujete zemljište">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 margined10">
                            <div class="form-group">
                                <label>Modul A (Garsonjera)</label>
                                <input name="modelAnumber" id="modelAnumber" type="number" class="form-control" placeholder="npr. 2">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 margined10">
                            <div class="part-image-fixed">
                                <img src="images/osnovni-modul-A_.png" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 margined10">
                            <div class="form-group">
                                <label>Modul B (Jednosoban stan)</label>
                                <input name="modelBnumber" id="modelBnumber" type="number" class="form-control" placeholder="npr. 2">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 margined10">
                            <div class="part-image-fixed">
                                <img src="images/osnovni-modul-B_.png" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 margined10">
                            <div class="form-group">
                                <label>Soba s kupatilom (D2)</label>
                                <input name="modelDnumber" id="modelDnumber" type="number" class="form-control" placeholder="npr. 2">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 margined10">
                            <div class="part-image-fixed">
                                <img src="images/veca-soba_.png" />
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 margined10">
                            <h3 class="myMainColorForTexts">Ukupan broj soba za izdavanje: <span id="ukupnoSoba">0</span></h3>
                        </div>
                        <div class="col-lg-12 col-md-12 margined10">
                            <h3 class="myMainColorForTexts">Ukupna investicija bez PDV-a: <span id="ukupnaInvesticija">0.00 €</span></h3>
                        </div>
                        <div class="col-lg-12 col-md-12 margined10" style="margin-top: 50px!important">
                            <h4 class="myMainColorForTexts">Kreditni kalkulator</h4>
                            <div class="divider mx-auto my-4" style="margin: 0 0 0 0px!important"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 margined10">
                            <div class="form-group">
                                <label>Broj godina kredita</label>
                                <input name="numberOfYears" id="numberOfYears" type="number" class="form-control" placeholder="Unesite broj godina kredita">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 margined10">
                            <div class="form-group">
                                <label>Godišnja kamatna stopa (%)</label>
                                <input name="yearlyInterest" id="yearlyInterest" type="number" class="form-control" placeholder="Unesite godišnju kamatnu stopu po kreditu">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 margined10">
                            <div class="form-group">
                                <label>Ukupni mesečni rashod (€)</label>
                                <input name="totalMinus" id="totalMinus" type="number" class="form-control" placeholder="" disabled="true">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 margined10">
                            <h4 class="myMainColorForTexts">Prihodi</h4>
                            <div class="divider mx-auto my-4" style="margin: 0 0 0 0px!important"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 margined10">
                            <div class="form-group">
                                <label>Cena najma sobe (€)</label>
                                <input name="dailyRentPrice" id="dailyRentPrice" type="number" class="form-control" placeholder="Unesite cenu najma po danu">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 margined10">
                            <div class="form-group">
                                <label>Prosečna popunjenost (%)</label>
                                <input name="averageRent" id="averageRent" type="number" class="form-control" placeholder="Unesite prosečnu popunjenost">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 margined10">
                            <div class="form-group">
                                <label>Ukupni mesečni prihod (€)</label>
                                <input name="totalPlus" id="totalPlus" type="number" class="form-control" placeholder="" disabled="true">
                            </div>
                        </div>
                    </div>
                    <div class="row" id="contactRow">
                        <div class="col-lg-12 col-md-6">
                            <h3 class="margined2030">Detalji Vaše kalkulacije:</h3>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <p>Cena zemljišta: <span id="landPrice_">0 €</span></p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <p>Modul A (Garsonjera): <span id="modelAnumber_">0</span></p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <p>Modul B (Jednosoban stan): <span id="modelBnumber_">0</span></p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <p>Soba s kupatilom (D2): <span id="modelDnumber_">0</span></p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <p>Ukupan broj soba za izdavanje: <span id="finalBrojSoba_">0</span></p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <p>Ukupna investicija bez PDV-a: <span id="totalInvestion_">0 €</span></p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <p>Broj godina kredita: <span id="numberOfYears_"></span></p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <p>Godišnja kamatna stopa: <span id="loanInterest_"></span></p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <p>Ukupni mesečni rashod: <span id="loanPayment_"></span></p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <p>Cena najma sobe: <span id="dailyRentPrice_"></span></p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <p>Prosečna popunjenost: <span id="averageRent_"></span></p>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <p>Ukupni mesečni prihod: <span id="totalIncome_"></span></p>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <h3 class="margined2030">Kontaktirajte nas</h3>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label>Ime i prezime</label>
                                <input name="name_" id="name_" type="text" class="form-control" placeholder="Ime i prezime">
                                <span class="requiredField">*obavezno polje</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input name="email_" id="email_" type="email" class="form-control" placeholder="E-mail adresa">
                                <span class="requiredField">*obavezno polje</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label>Telefon</label>
                                <input name="phone_" id="phone_" type="text" class="form-control" placeholder="Broj telefona">
                                <span class="requiredField">*nije obavezno polje</span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="form-group">
                                <label>Tema poruke</label>
                                <input name="subject_" id="subject_" type="text" class="form-control" placeholder="Tema poruke">
                                <span class="requiredField">*obavezno polje</span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="form-group">
                                <label>Poruka</label>
                                <textarea name="message_" id="message_" class="form-control" rows="8" placeholder="Poruka"></textarea>
                                <span class="requiredField">*obavezno polje</span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="form-group">
                                <input id="submitContact_" class="btn btn-main btn-round-full" name="submit_" type="submit" value="Pošalji" disabled="true"></input>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Vaše prve goste možete da primite za:</h2>
                    </div>
                </div>
                <div class="col-lg-8 text-center">
                    <div class="flipper" data-reverse="true" data-datetime="2023-01-01 00:00:00" data-template="ddd|HH|ii|ss" data-labels="Dana|Sati|Minuta|Sekundi" id="myFlipper"></div>
                </div>
            </div>
    </section>

    <!-- FOOTER START -->
    @include('footer') 
    <!-- FOOTER END -->


@endsection

@section('js')

    <script type="text/javascript">

        $(document).ready(function(){
            //global variables
            let landPrice;
            let modelAnumber;
            let modelAnumberPrice = 25736;
            let modelBnumber;
            let modelBnumberPrice = 34789;
            let modelDnumber;
            let modelDnumberPrice = 20794;
            let finalBrojSoba;
            let totalInvestion;
            let numberOfYears;
            let loanPayment;
            let monthsNumber;
            let monthlyInterest;
            let dailyRentPrice;
            let averageRent;
            let totalIncome;
            let clickedButton;

            //function for room numbers
            $("#modelAnumber, #modelBnumber, #modelDnumber").change(function(){
                if($("#modelAnumber").val()){
                    modelAnumber = $("#modelAnumber").val();
                    $("#modelAnumber_").text(modelAnumber);
                } else{
                    modelAnumber = 0;
                }
                if($("#modelBnumber").val()){
                    modelBnumber = $("#modelBnumber").val();
                    $("#modelBnumber_").text(modelBnumber);
                } else{
                    modelBnumber = 0;
                }
                if($("#modelDnumber").val()){
                    modelDnumber = $("#modelDnumber").val();
                    $("#modelDnumber_").text(modelDnumber);
                } else{
                    modelDnumber = 0;
                }
                finalBrojSoba = parseInt(modelAnumber) + parseInt(modelBnumber)*2 + parseInt(modelDnumber);
                $("#ukupnoSoba").text(finalBrojSoba);
                $("#finalBrojSoba_").text(finalBrojSoba);
            });

            //function for prices and total investion
            $("#landPrice, #modelAnumber, #modelBnumber, #modelDnumber").change(function(){
                if($("#landPrice").val()){
                    landPrice = $("#landPrice").val();
                    $("#landPrice_").text(landPrice+"€");
                } else{
                    landPrice = 0;
                }
                if($("#modelAnumber").val()){
                    modelAnumber = $("#modelAnumber").val();
                } else{
                    modelAnumber = 0;
                }
                if($("#modelBnumber").val()){
                    modelBnumber = $("#modelBnumber").val();
                } else{
                    modelBnumber = 0;
                }
                if($("#modelDnumber").val()){
                    modelDnumber = $("#modelDnumber").val();
                } else{
                    modelDnumber = 0;
                }
                totalInvestion = 
                    parseInt(landPrice) + 
                    parseInt(modelAnumber)*parseInt(modelAnumberPrice) + 
                    parseInt(modelBnumber)*parseInt(modelBnumberPrice) + 
                    parseInt(modelDnumber)*parseInt(modelDnumberPrice);
                
                $("#ukupnaInvesticija").text(totalInvestion.toFixed(2)+" €");
                $("#totalInvestion_").text(totalInvestion.toFixed(2)+" €");
            });

            //function for loan calculation
            $("#numberOfYears, #yearlyInterest, #landPrice, #modelAnumber, #modelBnumber, #modelDnumber, #dailyRentPrice, #averageRent").change(function(){
                if(totalInvestion != undefined){
                    if($("#numberOfYears").val()){
                        numberOfYears = $("#numberOfYears").val();
                        $("#numberOfYears_").text(numberOfYears);
                    } else{
                        numberOfYears = 0;
                    }
                    if($("#yearlyInterest").val()){
                        yearlyInterest = $("#yearlyInterest").val();
                        $("#loanInterest_").text(yearlyInterest + "%");
                    } else{
                        yearlyInterest = 0;
                    }
                    //number of months
                    monthsNumber = parseInt(numberOfYears) * 12;
                    //monthly interest
                    monthlyInterest = parseInt(yearlyInterest) / 100 / 12;
                    //getting loan payment
                    loanPayment = (totalInvestion * monthlyInterest * Math.pow(1 + monthlyInterest, monthsNumber)) / (Math.pow(1 + monthlyInterest, monthsNumber) - 1);
                    //writing result to input
                    $("#totalMinus").val(loanPayment.toFixed(2));
                    $("#loanPayment_").text(loanPayment.toFixed(2)+ " €");
                }
                if(finalBrojSoba != undefined){
                    if($("#dailyRentPrice").val()){
                        dailyRentPrice = $("#dailyRentPrice").val();
                        $("#dailyRentPrice_").text(dailyRentPrice+ " €");
                    } else{
                        dailyRentPrice = 0;
                    }
                    if($("#averageRent").val()){
                        averageRent = $("#averageRent").val();
                        $("#averageRent_").text(averageRent+ "%");
                    } else{
                        averageRent = 0;
                    }

                    //getting total income
                    totalIncome = finalBrojSoba * dailyRentPrice * ((averageRent * 30) / 100);

                    $("#totalPlus").val(totalIncome.toFixed(2));
                    $("#totalIncome_").text(totalIncome.toFixed(2)+ " €");
                }
            });

            var targetDate = new Date();
            targetDate.setDate(targetDate.getDate() + 60);
            var dd = targetDate.getDate();
            var mm = targetDate.getMonth() + 1; // 0 is January, so we must add 1
            var yyyy = targetDate.getFullYear();
            var hours = targetDate.getHours() + 1;
            var minutes = targetDate.getMinutes();
            var seconds = targetDate.getSeconds();
            var dateString = yyyy + "-" + mm + "-" + dd + " " + hours + ":" + minutes + ":" + seconds;
            $("#myFlipper").attr("data-datetime", dateString);

            $('#myFlipper').flipper('init');

            $("#myFlipper>div>div:first").css("font-size", "0");
            $("#myFlipper").css("width", "90%");

        });

        /* calc and contact switch */

        $("#calculationButton, #sendCalculationButton").click(function(){
            if($(this).hasClass("btn-inactive")){
                $(".btn-active").removeClass("btn-active").addClass("btn-inactive");
                $(this).removeClass("btn-inactive").addClass("btn-active");
                clickedButton = $(this).attr("id");
            }
            if(clickedButton == "calculationButton"){
                $("#calculationRow").css("display", "flex");
                $("#contactRow").hide();
            }else{
                $("#contactRow").css("display", "flex");
                $("#calculationRow").hide();
            }
        });

        //function for loan calculation
        $("#name_, #email_, #phone_, #subject_, #message_").change(function(){
                if(($("#name_").val()) && ($("#email_").val()) && ($("#subject_").val()) && ($("#message_").val())){
                    $("#submitContact_").attr("disabled", false);
                } else {
                    $("#submitContact_").attr("disabled", true);
                }
            });

    </script>

@endsection
