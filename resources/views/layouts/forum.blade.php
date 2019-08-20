<!DOCTYPE html>
<html lang = '{{str_replace(app()->getLocale() , '_' , '-')}}' dir = 'ltr'>
<head>
    <title>{{$head_title}}</title>
    <meta name = 'charset' content='utf-8' />
    <meta name='description' content='{{$head_description}}' />
    <meta name = 'author' content='{{config('constants.site_author')}}' />
    <meta content='{{$head_title}}' property='og:title' />
    <meta content='{{$head_description}}' property='og:description' />
    <meta content='309972533028313' property='fb:profile_id' />
    <meta name= 'viewport' content='width=device-width, initial-scale=1, user-scalable=no' />
    <meta name='robot' content='index, follow' />
    <meta name='referrer' content='no-referrer-when-downgrade' />
    <meta content='{{str_replace(app()->getLocale() , '_' , '-')}}' property="og:locale" />
    <meta content='website' property='og:type' />
    <meta content='{{config('constants.site_url')}}' property='og:url' />
    <meta content='{{config('constants.site_logo')}}' property='og:image' />
    <meta content='https://www.twitter.com/{{config('constants.site_name')}}' property='og:see_also' />
    <meta content='https://www.facebook.com/{{config('constants.site_name')}}' property='og:see_also' />
    <meta content='https://www.instagram.com/{{config('constants.site_name')}}' property='og:see_also' />
    <meta content='https://www.youtube.com/user/{{config('constants.site_name')}}' property='og:see_also' />
    <meta name='twitter:card' content='summary_large_image' />
    <meta name='twitter:site' content='@'.{{config('constants.site_name')}} />
    <meta name='twitter:creator' content='@'.{{config('constants.site_name')}} />
    <link rel = 'shortcut icon' type='image/png' href = '{{asset('/img/tinkshak.png')}}' />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css')}}" />

</head>
<body>

<!--Navigation bar -->
@include('inc.navbar')

<!--Page content container -->
<div class="container">
    <!--Page content -->
    @yield('content')
</div>

<!--Floating action button -->
<footer class="container">
    <ul class="footer-links-container">
        <li class="footer-link"><a class="footer-floating-links blue-grey-text" href="/about" title="About us">About us</a></li>
        <li class="footer-link"><a class="blue-grey-text" href="/contact" title="Contact us">Contact us</a></li>
        <li class="footer-link"><a class="blue-grey-text" href="/terms" title="Terms of usage">Terms</a></li>
        <li class="footer-link"><a class="blue-grey-text" href="/privacy" title="Privacy policy">Privacy</a></li>
    </ul>

</footer>

<!--JavaScript Dependencies -->
<script type='text/javascript' language='JavaScript' src="{{asset('/js/jquery.min.js')}}"></script>
<script type='text/javascript' language='JavaScript' src="{{asset('/js/materialize.min.js')}}"></script>
<script type='text/javascript' language='JavaScript' src="{{asset('/js/custom.js')}}"></script>

<!--Page JavaScript dependency -->
@yield('javascript')
</body>
</html>