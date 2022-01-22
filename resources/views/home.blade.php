@extends('layouts.app')

@php $lang = \Config::get('app.locale'); @endphp

@section('title', 'Home page')

@section('componentcss')
    <style>
        #test {
            color: red;
        }
    </style>
@endsection

@section('sidebar')
    <p>This is appended to the master navbar.</p>
@endsection

@section('content')
    <p>{{__('home.welcome')}}</p>
    @if(!$products->isEmpty())
        @foreach ($products as $product)
            <p>{{$product->name}}</p>
            <p>{{$product->$lang}}</p>
            @foreach ($product->product_parts as $b)
                <p>ovo je b {{$b['name']}}</p>
            @endforeach
        @endforeach
    @else
        <h1>No products!</h1>
    @endif
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {

        });
    </script>
@endsection
