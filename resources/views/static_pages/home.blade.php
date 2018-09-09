@extends('layouts.default')

@section('title','home')

@section('content')
    {{-- 引入session()->flash()提示 --}}
    @include('shared._messages')
    @if(Auth::check())
        <div class="row">
            <div class="col-md-4 text-center">
                @include('shared._user_info_img',['user' => Auth::user()])
                <br>
                <p>{{Auth::user()->name}}</p>
                @include('shared._stats',['user'=>Auth::user()])
            </div>

            <div class="col-md-8" style="margin-top: 20px">
                @include('shared._status_form')
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                @include('shared._feed')
            </div>
        </div>

    @else
        <div class="jumbotron" style="position: relative">
            <h3>您现在看到的是 zhujw 的项目案例之 <a href="/">类微博项目</a></h3>
            <div style="margin-top: 100px">
                <a href="{{ route('login') }}" class="btn btn-success">登陆</a>
                &nbsp;&nbsp;&nbsp;
                <a href="{{ route('users.create') }}" class="btn btn-info">注册</a>
            </div>

            <div style="position: absolute;right: 0;bottom: 0;border: 1px solid rgb(255,255,255);" class="text-left">
                <p style="font-size: 12px;margin: 0;padding: 0;">测试账号:</p>
                <p style="font-size: 12px;margin: 0;padding: 0;">邮箱: xcyz360@yeah.net</p>
                <p style="font-size: 12px;margin: 0;padding: 0;">密码: password</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title">本项目主要功能包括</p>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">用户注册与登陆 (前后台验证)</li>
                            <li class="list-group-item">登陆用户发表微博, 删除微博</li>
                            <li class="list-group-item">用户之间关注, 取消关注</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-offset-2 col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title">本项目涉及到的框架有</p>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">后台 Laravel 框架</li>
                            <li class="list-group-item">前端 Bootstrap 框架</li>
                            <li class="list-group-item">前端 Jquery 框架</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



    @endif
@endsection
