@extends('layouts.default')

@section('title','home')

@section('content')
<div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
        您现在看到的是 <a href="/">zhujw 的第二个 laravel 项目</a>
    </p>
    <p>一切, 从这里开始</p>
    <p><a href="{{ route('users.create') }}" class="btn btn-success">点击注册</a></p>
    </div>
@endsection
