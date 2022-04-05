@extends('layouts.app')

@section('title', 'Home page')

@section('componentcss')
    <style>

    </style>
@endsection

@section('sidebar')
{{--    <p>This is appended to the master navbar.</p>--}}
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
                    <span class="text-white">{{__('home.module_text1')}}</span>
                    <h1 class="mb-5 text-lg">{{__('home.module_text2')}}</h1>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="section centered" style="padding: 30px 0 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 margined10">
                    <h3 class="centered mainBlue">{{__('home.module_text3')}}</h3>
                </div>
                @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 margined10">
                        <div class="btn btn-main btn-round-full select_product" id="{{$product->names[0]->name}}" data-atrb="@foreach($product->product_parts as $part){{$part->id}},@endforeach">{{$product->names[0]->name}}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section" style="padding: 30px 15px;">
        <div class="container" id="positionNeeded">
            <div class="row">
                <div class="col-lg-12 col-md-12 margined10">
                    <h3 class="centered mainBlue  margined30">{{__('home.module_text4')}}</h3>
                </div>
            </div>
            <div class="row udaljeniElement" style="position:relative">
                <div class="col-sm-8" style="text-align: left;">
                    <div class="row">
                        @foreach($modules as $module)
                        <div class="col-sm-6">
                            <input class="veryImportantInput inlineFlex" style="width: 20px;height: 20px;position: absolute;top: 2px;left: 15px;" type="checkbox" price="{{$module->price}}" itemName="{{$module->part_names[0]->name}}" data-id="{{$module->id}}">
                            <p style="margin-left: 30px;" class="inlineFlex"><b>{{$module->part_names[0]->name}}</b></p>
                            <div class="hiddableQuantity" style="margin-left: 30px; margin-bottom: 15px; display: none;">
                                <p style="margin-bottom: 0;">{{__('home.module_text8')}}</p>
                                <input class="quantityInputEach" moduleName="{{$module->part_names[0]->name}}" price="{{$module->price}}" type="number" placeholder="{{__('home.module_text11')}}">
                            </div>
                            <p style="margin-left: 30px;">{{$module->part_texts[0]->text}}</p>
                            <p style="margin-left: 30px;">{{__('home.module_text9')}} {{$module->surface}}</p>
                            <p style="margin-left: 30px;"><b>{{__('home.module_text10')}} {{$module->price}}</b></p>
                        </div>
                        <div class="col-sm-6 centered">
                            @foreach($module->part_images as $part_img)
                            <img style="max-width:90%;" src="{{asset('images/parts/part_'.  $module->id.'/'.$part_img->name)}}">
                            @endforeach
                        </div>
                        @endforeach
                        <div class="col-sm-12">
                            <h3 class="centered mainBlue">{{__('home.module_text5')}}</h3>
                        </div>
                        @include('options')
                    </div>
                </div>
                <div id="selectedResults" class="col-sm-4">
                    <div class="selectedResultsInner fixedElement">
                        <div id="selectedElements">
                            <p style="font-weight:bold;"><!--{{__('home.module_text6')}}-->Izabrani moduli:</p>
                            <p id="nothingSelected">Nije izabran ni jedan modul.</p>
                        </div>
                        <div id="selectedOptions">
                            <p style="font-weight:bold;">Izabrane dodatne opcije:</p>
                            <p id="noOptionSelected">Nije izabrana ni jedna dodatna opcija.</p>
                        </div>
                        <div id="selectedElementsPrice">
                            <p>{{__('home.module_text7')}} <span id="ukupnaCenaOdabranog">0.00 €</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>

    .fixedElement {
        position:static;
        top:0;
        width:100%;
        z-index:100;
    }

    </style>


<!-- FOOTER START -->
@include('footer')
<!-- FOOTER END -->


@endsection

@section('js')
    <script type="text/javascript">
        //podešavanje side fixed info panela
        let $el;
        let $udaljenost;
        let $nopviel;
        let $novaUdalj;
        $(document).ready(function(){
            $el = $('.fixedElement');
            $el2 = $('.udaljeniElement');
            $udaljenost = ($el2.position().top).toFixed(0);
            //console.log($udaljenost);
            $noviel = $('#positionNeeded');
            $novawidth = $noviel.width() / 3 + 10;
            $novaUdalj = ($(window).width()-$noviel.width())/2 - 15;
            $windowWidth = $(window).width();
            console.log($(window).width());
            //console.log($noviel.outerWidth(true));
            //console.log($noviel.outerWidth(true)/2);
            //console.log($noviel.width()/2);
            //console.log($novaUdalj);
            //var sirinakolone = $(".col-sm-8").width() / 2;
        });
        $(window).scroll(function(e){
            var isPositionFixed = ($el.css('position') == 'fixed');
            if ($(this).scrollTop() > $udaljenost && !isPositionFixed && $windowWidth > 575){
                $el.css({'position': 'fixed', 'width': $novawidth, 'right': $novaUdalj });
            }
            if ($(this).scrollTop() < $udaljenost && isPositionFixed && $windowWidth > 575){
                $el.css({'position': 'static', 'width': '100%'});
            }
        });

        /* input interaction */

        let moduleName;
        let moduleNameNoSpace;
        let moduleQuantity;

        function sabiranjeCijena() {
            let finalPriceAll = 0;
            let singledPrice = 0;
            $(".singlepriceForCalc").each(function(){
                singledPrice = parseInt($(this).html());
                finalPriceAll = finalPriceAll + singledPrice;
            })
            //console.log(finalPriceAll);
            $("#ukupnaCenaOdabranog").text(finalPriceAll+".00 €");
        }

        $(".veryImportantInput").click(function(){
            //get module info
            moduleName = $(this).attr("itemname");
            moduleNameNoSpace = moduleName.replace(/\s/g, '');
            //showing quantity
            if($(this).is(":checked")){
                //show quantity input
                $(this).next().next().show();
                //set quantity to 1
                $(this).next().next().find('input').val(1);
                //set quantity attribute to 1
                $(this).attr("modulequantity", "1");
                //get module info
                moduleQuantity = $(this).attr("modulequantity");
                // if($(this).attr("valueOption")){
                //     console.log($(this).attr("valueOption"));
                // };
                //appending module
                $("#selectedElements").append("<p id="+moduleNameNoSpace+"><span id="+moduleNameNoSpace+"_>"+moduleQuantity+"</span>x "+moduleName+"</p>");

                //adding price of module
                modulePrice = $(this).attr("price");
                $("#selectedElementsPrice").prepend("<p class='singlepriceForCalc' style='display:none' id="+moduleNameNoSpace+"_price>"+modulePrice+"</p>");
                sabiranjeCijena();
            }else{
                //hide quantity input
                $(this).next().next().hide();
                //
                $(this).next().next().find('input').val("");
                //delete appended element
                document.getElementById(moduleNameNoSpace).remove();
                //delete price element
                moduleNameNoSpacePrice = moduleNameNoSpace.concat("_price");
                //console.log(moduleNameNoSpacePrice);
                document.getElementById(moduleNameNoSpacePrice).remove();
                sabiranjeCijena();
            }

            if("#nothingSelected"){
                $("#nothingSelected").css("display", "none");
            }
            if($("#selectedElements").children("p").length == 2){
                $("#nothingSelected").css("display", "block");
            }
        });

        $(".veryImportantInput2").click(function(){
            optionName = $(this).attr("name");
            optionNameNoSpace = optionName.replace(/\s/g, '');
            if($(this).is(":checked")){
                if($(this).attr("type") == "radio"){
                    //kupimo value
                    let valueOption = $(this).attr("value");
                    if(valueOption == 0){
                        document.getElementById(optionNameNoSpace).remove();
                    }else{
                        $("#selectedOptions").append("<p id="+optionNameNoSpace+">"+optionName+" ["+valueOption+"]</p>");
                    }
                }else{
                    $("#selectedOptions").append("<p id="+optionNameNoSpace+">"+optionName+"</p>");
                }
            }else{
                document.getElementById(optionNameNoSpace).remove();
            }

            if("#noOptionSelected"){
                $("#noOptionSelected").css("display", "none");
            }
            if($("#selectedOptions").children("p").length == 2){
                $("#noOptionSelected").css("display", "block");
            }
        });

        $(".quantityInputEach").change(function(){
            //izmjena html-a
            moduleNameFromQuantityInput = $(this).attr("modulename");
            moduleNameFromQuantityInputNoSpace = moduleName.replace(/\s/g, '');
            let novaVrijednost = $(this).val();
            document.getElementById(moduleNameFromQuantityInputNoSpace+"_").innerHTML = novaVrijednost;
            //izmjena cijene
            let jedinicnaCijena = $(this).attr("price");
            let finalnaCijena = novaVrijednost * jedinicnaCijena;
            document.getElementById(moduleNameFromQuantityInputNoSpace+"_price").innerHTML = finalnaCijena.toFixed(2);
            //pricesArray.push(finalnaCijena.toFixed(2));
            //console.log(pricesArray);
            sabiranjeCijena();
        });

        $('.select_product').click(function (){
            //clear html
            let cntnt = $("#selectedElements");
            while (cntnt.children("p").length > 2) {
                cntnt.children().last().remove();
            }
            //reset price
            $(".singlepriceForCalc").each(function(){
                $(".singlepriceForCalc").remove();
            });
            //select elements
            $('.veryImportantInput').prop('checked', false);
            $('.hiddableQuantity').hide();
            let id_str = $(this).data('atrb');
            let id_arr = id_str.split(",").slice(0,-1);
            $.each(id_arr, function(index, item) {
                $('.veryImportantInput[data-id="'+ item +'"]').click();
            });
        })
    </script>

@endsection
