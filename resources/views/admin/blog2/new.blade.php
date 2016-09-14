@extends('layouts.app')
@section('header_title', 'افزودن کلمه کلیدی')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Keyword</div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <form action="{{action('KeywordController@postNew')}}" method="post" class="form-horizontal">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="form-group">
                                    <input required class="form-control" name="title" type="text" placeholder="عنوان">
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