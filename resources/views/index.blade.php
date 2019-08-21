@extends('layouts.forum')
@section('content')

    <div id="index-banner" class="parallax-container home-page-banner-container">
        <div class="section no-pad-bot">
            <div class = "container home-page-header-texts-container">
                <br><br>
                <h4 class="header left left-align white-text text-darken-1">No.1 store for Digital Products</h4>
                <div class="row">
                    <h6 class="header col s12 light white-text  text-darken-4">Search for Audio Books, Games , Softwares, E.t.c</h6>

                </div>

                <form method="GET" action="/search">
                <div class="input-field home-search-field col s6">
                    <input type="text" id = "homepage-search-text" name="query" class="autocomplete">
                    <label for="autocomplete-input">Keyword...</label>
                </div>

                    <button class="btn waves-effect waves-light" type="submit" name="action">Search
                        <i class="material-icons right">search</i>
                    </button>

                </form>
            </div>
        </div>
        <!--div class="parallax"><img src="{{asset('img/digital.jpg')}}" alt="Unsplashed background img 1"></div-->
    </div>


@endsection

