@extends('layouts.skin')

@section('content')

        
    <section class="home-section" id="home-sec-1" >
        <div class="container">
            @if (Auth::guest())
                <div class="home-sec-btn" >
                    <a class="btn home-guest-btn" href="{{ url('auth/login') }}">ورود</a>
                    <a class="btn home-guest-btn" href="{{ url('auth/register') }}">عضویت</a>
                </div>
            @else
                <div class="home-sec-btn" >
                    <a class="btn home-guest-btn" href="{{ url('auth/logout') }}">خروج</a>
                </div>
            @endif
        </div>
    </section>

@endsection
