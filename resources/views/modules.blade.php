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
    <section>

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
                <div id="selectedResults" class="col-sm-4" style="position:absolute; top:0;right:0;">
                    <div class="selectedResultsInner fixedElement">
                        <div id="selectedElements">
                            <p>{{__('home.module_text6')}}</p>
                            <p>-</p>
                        </div>
                        <div id="selectedElementsPrice">
                            <p>{{__('home.module_text7')}} <span id="ukupnaCenaOdabranog"></span></p>
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
        let $el;
        let $udaljenost;
        let $nopviel;
        let $novaUdalj;
        $(document).ready(function(){
            $el = $('.fixedElement');
            $el2 = $('.udaljeniElement');
            $udaljenost = ($el2.position().top).toFixed(0);
            console.log($udaljenost);
            $noviel = $('#positionNeeded');
            $novaUdalj = $noviel.position().left + $noviel.width();
            console.log($novaUdalj);
        });
        $(window).scroll(function(e){
            var isPositionFixed = ($el.css('position') == 'fixed');
            if ($(this).scrollTop() > $udaljenost && !isPositionFixed){
                $el.css({'position': 'fixed', 'width': '33.333333%', 'right': $novaUdalj + '20px'});
            }
            if ($(this).scrollTop() < $udaljenost && isPositionFixed){
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
            $("#ukupnaCenaOdabranog").text(finalPriceAll);
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
            $('.veryImportantInput').prop('checked', false);
            let id_str = $(this).data('atrb');
            let id_arr = id_str.split(",").slice(0,-1);
            $.each(id_arr, function(index, item) {
                $('.veryImportantInput[data-id="'+ item +'"]').prop('checked', true);
            });
        })
    </script>

@endsection
