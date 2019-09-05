@extends('layouts.app')
@section('head-content')
    <title>{{config('constants.site_name_uppercase'). ' '. config('constants.bullet'). ' Create an account'}}</title>
    <script defer type="text/javascript" src="{{asset('js/register.js')}}"></script>
    <script type="text/javascript" src="{{@asset('js/bootstrap-select.min.js')}}" defer></script>
    <link rel="stylesheet" type="text/css" href="{{@asset('css/bootstrap-select.min.css')}}" />
@endsection
@php
$countries_codes = config('countries_codes');
$countries= config('countries');
//$ip_details = json_decode(file_get_contents(config('constants.ip_url')) , true);
                                            //$user_country = $ip_details['countryCode'];

                                        $user_country = 'NG';
@endphp

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name"  pattern="[a-zA-Z ]{2,60}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="contact" class="col-md-4 col-form-label text-md-right">Contact</label>

                                <div class="col-md-6">
                                    <div class="input-group">

                                        <span class="input-group-addon registration-country-code">
                                             <span data-countries-codes = "{{ json_encode($countries_codes) }}" id = "registration-country-code" class="registration-country-code-text">
                                                @if(key_exists($user_country , $countries))
                                                    +{!! $countries_codes[$user_country] !!}
                                                @else
                                                    +
                                                 @endif
                                            </span>
                                        </span>

                                        <input  placeholder="+1 (555) 555-1234" id="contact"  type="tel" class="form-control @error('contact') is-invalid @enderror registration-contact" name="contact" required autocomplete="contact" autofocus>
                                    </div>
                                    @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" />

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">Country</label>

                                <div class="col-md-6">
                                    <select data-show-icon="true" onchange="changeCountryCode()" id="country" type="text" class="form-control @error('country') is-invalid @enderror selectpicker" name="country">

                                        @php



                                            $products = config('constants.products');


                                        @endphp;

                                        @foreach($countries as $country => $name)

                                            @if($country == $user_country)
                                                <option value="{{$country}}" data-content="<img width = '15' src = '<?php echo asset('flags/').'/'.$country.'.png'?>'/> <span>{{$name}}</span>" selected>{{$name}}</option>
                                            @else
                                                <option value="{{$country}}" data-content="<img width ='15' src = '<?php echo asset('flags/').'/'.$country.'.png'?>'/> <span>{{$name}}</span>">{{$name}}</option>
                                            @endif

                                        @endforeach
                                    </select>
                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="product-type" class="col-md-4 col-form-label text-md-right">Product Type</label>

                                <div class="col-md-6">

                                <select name = "product-type" id="product-type" class="form-control @error('product-type') is-invalid @enderror">
                                @foreach($products as $product => $type)
                                    <option value= "{{$product}}">{{$product}}</option>
                                @endforeach
                            </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                                <div class="col-md-6">
                                    <input id="username" pattern="{{'[a-zA-Z0-9]{'.config('constants.minimum_username_length').','.config('constants.maximum_username_length').'}'}}" type="text" class="form-control @error('username') is-invalid @enderror" name="username"  required autocomplete="username">

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input value="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" value="password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
