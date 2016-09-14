@extends('layouts.app')
@section('header_title', 'کلمات کلیدی')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="pull-left col-md-6">Keywords</div>
                            <div class="col-md-6">
                                <a href="{{action('KeywordController@getNew')}}" class="btn btn-default pull-right">New Keyword</a>
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
                                @foreach($keywords as $keyword)
                                    <tr>
                                        <td>{{$keyword->title}}</td>
                                        <td><a href="{{action('KeywordController@getEdit',$keyword->id)}}" class="btn btn-primary btn-sm">ویرایش</a>
                                        <a href="{{action('KeywordController@getDelete',$keyword->id)}}" class="btn btn-primary btn-sm">حذف</a></td>
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