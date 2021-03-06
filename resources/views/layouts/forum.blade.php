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
    <meta name='twitter:site' content='{{'@'.config('constants.site_name')}}' />
    <meta name='twitter:creator' content='{{'@'.config('constants.site_name')}}' />
    <link rel = 'shortcut icon' type='image/png' href = '{{asset('/img/'.config('constants.site_name').'.png')}}'/>
    @yield('css')
    <link rel='stylesheet' type='text/css' href='{{ asset('/css/app.css')}}' />
</head>
<body>

<!--Navigation bar -->
@yield('navbar')
<!--Page content container -->

    <!--Page content -->

    @yield('content')

@include('inc.footer')

<!--JavaScript Dependencies -->
<script type='text/javascript' language='JavaScript' src='{{asset('/js/jquery.min.js')}}'></script>
<script type='text/javascript' language='JavaScript' src='{{asset('/js/materialize.min.js')}}'></script>
<script type='text/javascript' language='JavaScript' src="{{asset('/js/custom.js')}}"></script>
<!--Page JavaScript dependency -->
@yield('javascript')
</body>
</html>