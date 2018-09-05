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
                <p>
                <h3>{{Auth::user()->name}}</h3></p>
            </div>

            <div class="col-md-8">
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
        <div class="jumbotron">
            <h1>Hello Laravel</h1>
            <p class="lead">
                您现在看到的是 <a href="/">zhujw 的第二个 laravel 项目</a>
            </p>
            <p>一切, 从这里开始</p>
            <p>
                <a href="{{ route('login') }}" class="btn btn-success">登陆</a>
                &nbsp;&nbsp;&nbsp;
                <a href="{{ route('users.create') }}" class="btn btn-info">注册</a></p>
        </div>
    @endif
@endsection
