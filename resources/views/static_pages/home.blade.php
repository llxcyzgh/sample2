@extends('layouts.default')

@section('title','home')

@section('content')
    {{-- 引入session()->flash()提示 --}}
    @include('shared._messages')
<div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
        您现在看到的是 <a href="/">zhujw 的第二个 laravel 项目</a>
    </p>
    <p>一切, 从这里开始</p>
    <p><a href="{{ route('login') }}" class="btn btn-success">登陆</a> &nbsp;&nbsp;&nbsp; <a href="{{ route('users.create') }}" class="btn btn-info">注册</a></p>
    </div>
@endsection
