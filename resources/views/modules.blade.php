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
        <div class="row">
            <div class="col-lg-12 col-md-12 margined10">
                <h3 class="centered mainBlue">{{__('home.module_text3')}}</h3>
            </div>
            @foreach($products as $product)
                <div class="col-lg-4 col-md-6 margined10">
                    <div class="btn btn-main btn-round-full" id="{{$product->names[0]->name}}">{{$product->names[0]->name}}</div>
                </div>
            @endforeach
        </div>
    <section>

    <section class="section" style="padding: 30px 15px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 margined10">
                    <h3 class="centered mainBlue  margined30">{{__('home.module_text4')}}</h3>
                </div>
                <div class="col-sm-8" style="text-align: left;">
                    <div class="row">
                        @foreach($modules as $module)
                        <div class="col-sm-6">
                            <input class="veryImportantInput" style="width: 20px;height: 20px;position: absolute;top: 2px;left: 15px;" class="inlineFlex" type="checkbox" price="{{$module->price}}" itemName="{{$module->part_names[0]->name}}">
                            <p style="margin-left: 30px;" class="inlineFlex"><b>{{$module->part_names[0]->name}}</b></p>
                            <div class="hiddableQuantity" style="margin-left: 30px; margin-bottom: 15px; display: none;">
                                <p style="margin-bottom: 0;">Količina:</p>
                                <input type="number" placeholder="Unesite količinu">
                            </div>
                            <p style="margin-left: 30px;">{{$module->part_texts[0]->text}}</p>
                            <p style="margin-left: 30px;">Površina: {{$module->surface}}</p>
                            <p style="margin-left: 30px;"><b>Cena: {{$module->price}}</b></p>
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
                <div id="selectedResults" class="col-sm-4 fixedElement">
                    <div id="selectedElements">
                        <p>{{__('home.module_text6')}}</p>
                    </div>
                    <div id="selectedElementsPrice">
                        <p>{{__('home.module_text7')}} <span id="ukupnaCenaOdabranog"></span></p>
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
        $(document).ready(function(){
            $el = $('.fixedElement');
            $udaljenost = ($el.position().top).toFixed(0);
            console.log($udaljenost);
        });
        $(window).scroll(function(e){
            var isPositionFixed = ($el.css('position') == 'fixed');
            if ($(this).scrollTop() > $udaljenost && !isPositionFixed){
                $el.css({'position': 'fixed', 'top': '15px', 'right': '30px', 'width': 'calc(35% - 40px)'});
            }
            if ($(this).scrollTop() < $udaljenost && isPositionFixed){
                $el.css({'position': 'static', 'top': '0px'});
            }
        });

        /* input interaction */

        $(".veryImportantInput").click(function(){
            if($(this).is(":checked")){
                $(this).next().next().show();
                $(this).next().next().find('input').val(1);
            }else{
                $(this).next().next().hide();
                $(this).next().next().find('input').val(0);
            }
        });
    </script>

@endsection
