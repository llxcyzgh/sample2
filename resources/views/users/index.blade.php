<!-- 引用默认模板 -->
@extends('layouts.default')
<!-- 更改默认模板中的title -->
@section('title','注册')

<!-- 填充内容 -->
@section('content')
    <h1>这是所有用户列表</h1>
    <ul>
        @foreach($data_arr as $data)
            {{--用户名 - {{ $user->name }}  | 邮箱 - {{$user->email}}      <br>--}}
            <li>@include('shared._user_info')</li>
        @endforeach
    </ul>
@endsection
