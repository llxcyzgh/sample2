@extends('layouts.default')

@section('title','403错误')

@section('content')
    <div class="jumbotron">
        <h1>403 错误</h1>
        <p class="lead">
            {{ $exception->getMessage() ? $exception->getMessage(): "禁止访问 Permission Denied"  }}
        </p>
        <p>
            <a href="{{ route('home') }}" class="btn btn-primary">回到首页</a>
        </p>
    </div>
@endsection