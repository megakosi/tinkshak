@extends('layouts.forum')
@php
    $head_title = 'Dashboard '.config('constants.bullet').' '.ucfirst(Auth::user()->username);
    $head_description = "Welcome to your dashboard";
@endphp

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/materialize.min.css')}}" />
@endsection

@section('content')
    @include('inc.loggedin-nav')
@endsection

@section('javascript')
    <script type="text/javascript" src = '{{asset('/js/dashboard.js')}}'></script>
@endsection
