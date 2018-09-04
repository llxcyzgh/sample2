<!-- 引用默认模板 -->
@extends('layouts.default')
<!-- 更改默认模板中的title -->
@section('title','注册')

<!-- 填充内容 -->
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>修改个人信息</h4>
            </div>

            <div class="panel-body">
                {{-- session() 是否有系统错误提示文件 --}}
                @include('shared._errors')

                {{--引入可能的提示信息--}}
                @include('shared._messages')

                {{--引入用户头像--}}
                <div class="text-center">
                    @include('shared._user_info_img')
                </div>

                <form action="{{route('users.update',$user)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('patch')}}

                    <div class="form-group">
                        <label for="name">名称</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱</label>
                        <input type="text" name="email" id="email" class="form-control" disabled="disabled"
                               value="{{$user->email}}">
                    </div>

                    <div class="form-group">
                        <label for="passowrd">密码</label>
                        <input type="password" name="password" id="passowrd" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="passowrd_confirmation">确认密码</label>
                        <input type="password" name="password_confirmation" id="passowrd_confirmation"
                               class="form-control">
                    </div>

                        <button class="btn btn-primary">确认修改</button>
                </form>
            </div>

        </div>
    </div>


@endsection
