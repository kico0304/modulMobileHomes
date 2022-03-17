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
                    <span class="text-white">KATALOG</span>
                    <h1 class="mb-5 text-lg">Konfigurator</h1>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="section centered" style="padding: 30px 0;">
        <div class="row">
            <div class="col-lg-12 col-md-12 margined10">
                <h3 class="centered mainBlue">Standardne kombinacije:</h3>
            </div>
            <div class="col-lg-4 col-md-6 margined10">
                <div class="btn btn-main btn-round-full" id="MMH21_S.01">MMH21_S.01</div>
            </div>
            <div class="col-lg-4 col-md-6 margined10">
                <div class="btn btn-main btn-round-full" id="MMH21_M.02">MMH21_M.02</div>
            </div>
            <div class="col-lg-4 col-md-6 margined10">
                <div class="btn btn-main btn-round-full" id="MMH21_XL.01">MMH21_XL.01</div>
            </div>
            <div class="col-lg-4 col-md-6 margined10">
                <div class="btn btn-main btn-round-full" id="MMH21_L.01">MMH21_L.01</div>
            </div>
            <div class="col-lg-4 col-md-6 margined10">
                <div class="btn btn-main btn-round-full" id="MMH21_M.01">MMH21_M.01</div>
            </div>
            <div class="col-lg-4 col-md-6 margined10">
                <div class="btn btn-main btn-round-full" id="MMH21_L.02">MMH21_L.02</div>
            </div>
        </div>
    <section>

    <section class="section" style="padding: 30px 15px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 margined10">
                    <h3 class="centered mainBlue  margined30">Svoju konfiguraciju možete odabrati izborom donjih modula i dodataka.</h3>
                </div>
                <div class="col-sm-8" style="text-align: left;">
                    <div class="row">
                        @foreach($modules as $module)
                        <div class="col-sm-6">
                            <input style="width: 20px;height: 20px;position: absolute;top: 2px;left: 15px;" class="inlineFlex" type="checkbox" price="{{$module->price}}" itemName="{{$module->part_names[0]->name}}">
                            <p style="margin-left: 30px;" class="inlineFlex"><b>{{$module->part_names[0]->name}}</b></p>
                            <div id="hiddableQuantity" style="margin-left: 30px; margin-bottom: 15px; display: none;">
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
                    </div>
                </div>
                <div id="selectedResults" class="col-sm-4">
                    <div id="selectedElements">
                        <p>Izabrali ste:</p>
                        <p>1x model A</p>
                        <p>1x model A</p>
                        <p>1x model A</p>
                        <p>1x model A</p>
                        <p>1x model A</p>
                        <p>1x model A</p>
                        <p>1x model A</p>
                    </div>
                    <div id="selectedElementsPrice">
                        <p>Ukupna cena: 5000€</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('options')


<!-- FOOTER START -->
@include('footer')
<!-- FOOTER END -->


@endsection

@section('js')
    <script type="text/javascript">

    </script>

@endsection