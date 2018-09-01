<!-- 引用默认模板 -->
@extends('layouts.default')
<!-- 更改默认模板中的title -->
@section('title','注册')

<!-- 填充内容 -->
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3>注册</h3>
            </div>

            <div class="panel-body">
                {{--如果有错误,则引入错误提示框--}}
                @include('shared._errors')

                <form method="post" action="{{ route('users.store') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">名称</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">密码</label>
                        <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">确认密码</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">注册</button>


                </form>
            </div>

        </div>
    </div>

@endsection

<div class="container">

</div>