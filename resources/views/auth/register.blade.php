@extends('layouts.skin')

@section('content')

<div class="container">
<div class="row">

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <script>
            @foreach ($errors->all() as $error)
               
            Materialize.toast('{{ $error }}', 8000);
            @endforeach
        </script>
    </div>
@endif

<form class="col s12" role="form" enctype="multipart/form-data" method="POST" action="{{ url('/auth/register') }}">
{!! csrf_field() !!}

<div class="row">
  <div class="register-logo left col s12 m12 l4 offset-l4">&nbsp;</div>
  <div class="font-size-25 left center-align col s12 m12 l4 offset-l4 grey-text text-darken-5">عضویت </div>
  <div class="left center-align col s12 m12 l4 offset-l4"><a href="#" class="red darken-4 waves-effect waves-light btn"><i class="flaticon-google-plus-logo left"></i>عضویت با جیمیل</a></div>
  <div class="font-size-16 left center-align col s12 m12 l4 offset-l4">شما می توانید بجای تکمیل فرم عضویت، با استفاده از جیمیل خود عضو شوید!
کافیست روی دکمه بالا کلیک کنید</div>
  <div style="display:none;" class="file-field left offset-s4 col s4">
    <div class="btn">
      <span>File</span>
      <input type="file">
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text">
    </div>
  </div>
</div>




<div class="row"> 
  

  <div class="input-field col s12">
    <div class="row">
      <div class="input-field col s3">
        <label>تاریخ تولد</label>
      </div>

      <div class="input-field col s3">
        <select name="b_day" id="b_day">
          <option value=""  selected >روز</option>
          @for ($i = 1; $i < 31; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
          @endfor
        </select> 
      </div>

      <div class="input-field col s3">
        <select name="b_month" id="b_month">
          <option value=""  selected >ماه</option>
          <option value="1">فروردین</option>
          <option value="2">اردیبهشت</option>
          <option value="3">خرداد</option>
          <option value="4">تیر</option>
          <option value="5">مرداد</option>
          <option value="6">شهریور</option>
          <option value="7">مهر</option>
          <option value="8">آبان</option>
          <option value="9">آذر</option>
          <option value="10">دی</option>
          <option value="11">بهمن</option>
          <option value="12">اسفند</option>
        </select>
      </div>

      <div class="input-field col s3">
        <select name="b_year" id="b_year">
          <option value=""  selected >سال</option>
          @for ($i = 1360; $i < 1380; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
          @endfor
        </select>
      </div>

    </div>

  </div>  

  </div> 


<div class="row">
  <div class="input-field col s12 m6 l3">
    <input type="email" class="validate" name="email" value="{{ old('email') }}">
    <label for="email">ایمیل</label>
  </div>

  <div class="input-field col s12 m6 l3">
    <input type="text" class="validate" name="name" value="{{ old('name') }}">
    <label for="name" data-error="wrong"  >نام کاربری</label>
  </div> 

  <div class="input-field col s12 m6 l3 ">
    <input type="password" class="validate" name="password">
    <label for="password">کلمه عبور</label>
  </div>
  <div class="input-field col s12 m6 l3">
    <input type="password" class="validate" name="password_confirmation">
    <label for="password_confirmation">تکرار کلمه عبور</label>
  </div>
</div>


<div class="row">
  <div class="col ">
  <div class="font-size-20">دسترسی :</div>
    <p>
      <input type="checkbox" value="1" name="roles[admin]" class="checkbox-orange filled-in" id="filled-in-box1"  />
      <label for="filled-in-box1">Admin</label>
    </p>

    <p>
      <input type="checkbox" value="2" name="roles[auther]" class="checkbox-orange filled-in" id="filled-in-box2"  />
      <label for="filled-in-box2">AUTHER</label>
    </p>

    <p>
      <input type="checkbox" value="3" name="roles[user]" class="checkbox-orange filled-in" id="filled-in-box3"  />
      <label for="filled-in-box3">USER</label>
    </p>
  </div>
</div>



<div class="row">
  <div class="col s6">
    <div class="font-size-20">قوانین :</div>
    <div class="grey-text" >با تکمیل این فرم تایید می‌کنید که <span class="amber-text text-darken-2">حریم خصوصی</span> و <span class="amber-text text-darken-2">شرایط و قوانین</span> استفاده از سرویس ها و خدمات را مطالعه کرده اید و با تمامی موارد آن موافق هستید.</div>
    <p>
      <input type="checkbox" value="1" name="newsletter" class="checkbox-orange filled-in" id="filled-in-box" checked="checked" />
      <label for="filled-in-box">می خواهم در خبرنامه ایمیلی عضو شوم.</label>
    </p>
  </div>

  <div class="input-field col s6">
    <p>من رباط نیستم!</p>
  </div>

</div>        


<div class="row">
  <div class="col s12 center ">
    <button class="btn waves-effect waves-orange" type="submit" >ثبت نام و ورود به پنل کاربری</button>
  </div>
</div>

</form>
</div>
</div>
@endsection