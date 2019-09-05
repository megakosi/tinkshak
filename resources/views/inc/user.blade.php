<div class="container">
    <h5 class="header text-darken-2 blue-grey-text">
        @if($user->username == Auth::user()->username)
            Dashboard
        @else
           Profile
        @endif
            <i class="material-icons">keyboard_arrow_right</i> {{$user->name}}
    </h5>
<div class="profile-card center">
    <div title="{{ucfirst($user->name)}}" class="circle-image user-profile-img" style="background-image: url({{asset('profile/'.$user->profile)}})"></div>
    <p></p>
    <h5 class="user-profile-name inline">{{$user->name}}</h5>
    <img class="inline responsive-img user-profile-country-flag" src="{{asset('flags/').'/'.$user->country.'.png'}}" width="20" />
    <span class="user-profile-country-name" title="<?php echo config('countries.'.strtoupper($user->country))?>">{{strtoupper($user->country)}}</span>
    <span class="user-profile-verified-badge material-icons
    @if((int)$user->verified  == 1)
        blue-text
    @else
            grey-text
    @endif
     " title="
@if((int)$user->verified  == 1)Verified
@else
            Unverified
    @endif">check_circle</span>
    <p>
        Contact :  <a title="Send email" href="mailto:{{$user->email}}">{{$user->email}}</a> , <a href="tel:+{{config('countries_codes.'.strtoupper($user->country)).$user->contact}}" title="Call now">{{config('countries_codes.'.$user->country).$user->contact}}</a>
    </p>


    <p>
        Links :
        @php
            $socials = ['facebook' => 'blue','twitter' => 'blue-grey','instagram' => 'purple'];
            $count = 1;
            $any_account = false;
        @endphp

        @foreach($socials as $social => $color)
            @php
                $prop = $social.'_username';
                //$comma = ($count > 1) ? ' , ' : '';
                $count++;
            @endphp
            @if($user->$prop != config('constants.site_name'))
                @php
                  $any_account = true;
                @endphp
                <a title="{{ucfirst($social)}} account" href="https://{{$social}}.com/{{$user->$prop}}">
                    <span class="user-profile-social-icons fa fa-{{$social}} {{$color}}-text"></span>
                </a>
            @endif
        @endforeach

        @if(!$any_account)
            None
        @endif
    </p>
</div>
    <div>
        <h6 class="header text-darken-2 blue-grey-text">
Bio
        </h6>
        <div class="user-bio">
            {{{$user->bio}}}
        </div>
    </div>
    @if(Auth::user()->username != $user->username)
        <div class="center">
        <a href="/products-by/{{$user->username}}" class="btn btn-info">Products by this user</a>
        </div>
    @endif
</div>