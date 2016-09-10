@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Access Level</div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <form action="{{action('RoleController@postEdit',$role->id)}}" method="post" class="form-horizontal">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <input required class="form-control" value="{{$role->title}}" name="title" type="text" placeholder="عنوان">
                                </div>
                                @foreach($routeLists as $routeList)
                                    <div class="row">
                                        <label><input type="checkbox" value="{{$routeList}}" width="100"
                                                      name="roles[]" {{in_array($routeList,json_decode($role->roles,true))?'checked':''}}>{{$routeList}}</label>
                                    </div>
                                @endforeach
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection