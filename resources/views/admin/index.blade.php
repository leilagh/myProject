@extends('layouts.app')
@section('header_title', 'دسترسی به بلاگ')
@section('content')




<div class="container">
<div class="row">

<div class="row"><a href="{{url('keyword')}}">کلمات کلیدی</a></div>
{{--<div class="row"><a href="{{url('admin/category')}}">دسته بندی</a></div>
<div class="row"><a href="{{url('admin/picture')}}">گالری عکس</a></div>--}}
<div class="row"><a href="{{url('user')}}">کاربران</a></div>

</div>



</div>


@endsection