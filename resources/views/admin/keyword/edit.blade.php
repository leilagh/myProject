@extends('layouts.app')
@section('header_title', 'ویرایش کلمه کلیدی')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Keyword</div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <form action="{{action('KeywordController@postEdit',$keyword->id)}}" method="post" class="form-horizontal">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <input required class="form-control" value="{{$keyword->title}}" name="title" type="text" placeholder="عنوان">
                                </div>

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