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

@foreach($modules as $module)
     <p>Product name: {{$module->part_names[0]->name}}</p>
     <p>Product price: {{$module->price}}</p>
     <p>Product surface: {{$module->surface}}</p>
     <p>Product text: {{$module->part_texts[0]->text}}</p>

        <div class="col-lg-6 mb-5">
            @foreach($module->part_images as $part_img)
                <img style="max-width:200px; max-height: 200px;" src="{{asset('images/parts/part_'.$module->id.'/'.$part_img->name)}}">
            @endforeach
        </div>

@endforeach

@include('options')


<!-- FOOTER START -->
@include('footer')
<!-- FOOTER END -->


@endsection

@section('js')
    <script type="text/javascript">

    </script>

@endsection