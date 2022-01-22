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
    <p>About Us</p>
    <p>{{__('home.welcome')}}</p>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {

        });
    </script>
@endsection
