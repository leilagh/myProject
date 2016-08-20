@extends('layouts.skin')

@section('content')
<div class="container">
    <div class="row">
        <form class="left col s12 m12 l6 offset-l3" role="form" method="POST" action="{{ url('/auth/login') }}">
            {!! csrf_field() !!}

          

         <!--    <h2>ورود کاربر</h2> -->

            <div class="row"> 
              <div class="input-field col s12">
                <input value="{{ old('email') }}" name="email" type="email" class="validate">
                <label for="email">آدرس ایمیل</label>
              </div>
            </div>

            <div class="row"> 
              <div class="input-field col s12">
                <input value="{{ old('password') }}" name="password" type="password" class="validate">
                <label for="password">کلمه عبور</label>
              </div>
            </div>




            <div class="row">
              <div class="col s12">
                <p>
                  <input type="checkbox"  name="remember" class="checkbox-orange" id="test5"  />
                  <label for="test5">مرا بخاطر بسپار</label>
                </p>
              </div>
            </div>   




            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-sign-in"></i>ورود
                    </button>

                    <a class="btn btn-link" href="{{ url('/password/reset') }}">رمزعبور خور را فراموش کردید؟</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection