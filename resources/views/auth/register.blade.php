@extends('layouts.app')
@section('head-content')
    <title>{{config('constants.site_name_uppercase'). ' '. config('constants.bullet'). ' Create an account'}}</title>
    <script type="text/javascript">
        let obj = {
            'username' : 'megakosi',
            'email' : 'itskosieric@gmail.com',
            'contact' : '07084419530',
            'name' : 'Kosi Eric'
        };
        let prop;
        window.addEventListener('DOMContentLoaded' , function (e) {

            for (prop in obj){
                document.getElementById(prop).value = obj[prop];
            }


        });


    </script>

@endsection

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
                                    <input  placeholder="+1 (555) 555-1234" id="contact" pattern="[\\+]?[(]?[0-9]{3}[)]?[-\\s\\.]?[0-9]{3}[-\\s\\.]?[0-9]{4,6}" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" required autocomplete="contact" autofocus>
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
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">

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
                                    <select id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country">

                                        @php


                                            $countries = config('countries');

                                            //$ip_details = json_decode(file_get_contents(config('constants.ip_url')) , true);
                                            //$user_country = $ip_details['countryCode'];

                                        $user_country = 'NG';
                                        @endphp;

                                        @foreach($countries as $country => $name)

                                            @if($country == $user_country)
                                                <option value="{{$country}}" selected>{{$name}}</option>
                                            @else
                                                <option value="{{$country}}">{{$name}}</option>
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
