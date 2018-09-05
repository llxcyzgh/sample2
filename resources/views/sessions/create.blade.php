{{--继承 default 模板--}}
@extends('layouts.default')
{{--完成 @yield 的 title 的替换--}}
@section('title','登陆')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>登陆</h3>
            </div>

            @include('shared._messages')

            <div class="panel-body">
                <form action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email">邮箱</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="passowrd">密码 (<a href="{{ route('password.request') }}">忘记密码</a>)</label>
                        <input type="password" name="password" id="passowrd" class="form-control" value="{{old('password')}}">
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox" name="remember">记住我</label>
                    </div>

                    <div class="form-group">
                        {{--<input type="submit" value="登陆" class="btn btn-primary">--}}
                        <button type="submit" class="btn btn-primary">登陆</button>
                    </div>
                </form>
                <hr>
                <p>还没账号? <a href="{{ route('users.create') }}">现在注册</a></p>
            </div>
        </div>
    </div>
@endsection
