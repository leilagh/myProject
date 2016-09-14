@extends('layouts.skin')

@section('content')

<?php
$user_role = unserialize($user_info->roles);

?>
<div class="container">
<div class="row">


<form class="col s12" role="form" enctype="multipart/form-data" method="POST" action="{{ url('/blog/admin/editrole/'.$user_info->id) }}">
{!! csrf_field() !!}

<input name="user_id" value="{{$id}}" type="hidden" class="validate" >
    <div class="row">
        <div class="col s6">
        @foreach($role_list as $val)
            <?php
                foreach($user_role AS $uval){
                    $checked = ($uval==$val->id)?'checked="checked"':"";
                    break;
                }

            ?>
            <p>
                <input type="checkbox" value="{{$val->id}}" name="roles[{{$val->id}}]" class="checkbox-orange filled-in" id="filled-in-box{{$val->id}}" {{ $checked }} />
                <label for="filled-in-box{{$val->id}}">{{$val->name}}</label>
            </p>

        @endforeach
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