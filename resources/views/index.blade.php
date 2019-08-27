
@extends('layouts.forum')
<!--Navigation bar -->
@section('navbar')
@include('inc.navbar')
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/materialize.min.css')}}" />
@endsection

@section('content')
    @include('inc.search-form')

    <div class="container">
        <h3 class="header text-darken-2 blue-grey-text">
            Hot Products

        </h3>
    </div>
@endsection

