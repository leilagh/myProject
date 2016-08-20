@extends('layouts.skin')

@section('content')


<div class="container">
<div class="row">

<div class="row"><a href="{{url('blog/admin/keyword')}}">کلمات کلیدی</a></div>
<div class="row"><a href="{{url('blog/admin/category')}}">دسته بندی</a></div>
<div class="row"><a href="{{url('blog/admin/picture')}}">گالری عکس</a></div>

</div>



</div>


@endsection