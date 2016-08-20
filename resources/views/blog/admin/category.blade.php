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

<form class="col s12" role="form" enctype="multipart/form-data" method="POST" action="{{ url('/blog/admin/category') }}">
{!! csrf_field() !!}

<input name="user_id" value="2" type="hidden" class="validate" >

<div class="row">
  <div class="input-field col s12">
    <input name="title" value="{{ old('title') }}" type="text" class="validate" >
    <label for="title">عنوان</label>
  </div>
</div>
     

<div class="row">
  <div class="col s12 center ">
    <button class="btn waves-effect waves-orange" type="submit" >ثبت</button>
  </div>
</div>



</form>
</div>



</div>


@endsection