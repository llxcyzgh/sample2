<!-- 引用默认模板 -->
@extends('layouts.default')
<!-- 更改默认模板中的title -->
@section('title',$title)

<!-- 填充内容 -->
@section('content')
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <h3 class="page-header text-center">{{$title}}</h3>
            {!! $users->render() !!}
            <ul class="list-group">
                @foreach($users as $user)
                    <li class="list-group-item clearfix">
                        <div class="pull-left" style="width:40%">
                            @include('shared._user_info_img')
                        </div>

                        <div class="pull-right" style="width:60%">
                            {{ $user->name }}
                        </div>
                    </li>
                @endforeach
            </ul>
            {!! $users->render() !!}
        </div>
    </div>
@endsection

