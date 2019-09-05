@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.


                    {!! Form::open(['action' => ['UsersController@update' , Auth::user()->user_id , "1"], 'method' =>'POST']) !!}

                        <p></p>
                        <h6>
                            <label for="new-user-verification-email">Change email (<b style="color: tomato">{{Auth::user()->email}}</b>)</label>
                        </h6>
                        <div class="form-group">

                            {{Form::email('email' , '' , ['placeholder' => 'user@domain.com' , 'id' => 'new-user-verification-email' , 'class' => 'form-control'])}}
                        </div>

                        {{Form::hidden('change-verification-email' , '1')}}
                        {{Form::hidden('_method' , 'PUT')}}
                        {{Form::submit('Submit' , ['class' => 'btn btn-primary'])}}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
