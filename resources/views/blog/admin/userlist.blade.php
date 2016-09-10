@extends('layouts.skin')

@section('content')

<section class="home-section" id="home-sec-2" >
    <div class="container">

        <div class="home-new-cfshp row">



            <table class="striped highlight" >
                <thead>
                <tr>
                    <th data-field="id">شماره</th>
                    <th data-field="name">نام کاربری</th>
                    <th data-field="email">ایمیل</th>
                    <th data-field="created_at">تاریخ عضویت</th>
                    <th data-field="roles">سمت ها</th>
                    <th data-field="edit">ویرایش</th>
                </tr>
                </thead>

                <tbody>

            @foreach($list AS $val)

                <?php
                $date = \Morilog\Jalali\jDateTime::strftime('Y-m-d H:i:s', strtotime($val->created_at)); // 1395-02-19
                $date = \Morilog\Jalali\jDateTime::convertNumbers($date);
                ?>
                <tr>
                    <td>{{ $val->id }}</td>
                    <td>{{ $val->name }}</td>
                    <td>{{ $val->email }}</td>
                    <td>{{ $date  }}</td>
                    <td>{{ $val->roles }}</td>
                    <td><a href="{{url("blog/admin/editrole/".$val->id )}}">ویرایش</a></td>
                </tr>

            @endforeach

            {!! $list->render() !!}

                </tbody>
            </table>

        </div>
    </div>



</section>

@endsection