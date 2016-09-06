@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="pull-left col-md-6">Access Level</div>
                            <div class="col-md-6">
                                <a href="{{action('RoleController@getNew')}}" class="btn btn-default pull-right">New Role</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>عنوان</th>
                                    <th>عملکرد</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{$role->title}}</td>
                                        <td><a href="{{action('RoleController@getEdit',$role->id)}}" class="btn btn-primary btn-sm">ویرایش</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection