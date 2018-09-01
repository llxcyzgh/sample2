<!-- 引用默认模板 -->
@extends('layouts.default')
<!-- 更改默认模板中的title -->
@section('title',$data['user']->name)

<!-- 填充内容 -->
@section('content')
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <section class="user_info">
                {{-- session() 是否有成功提示文件 --}}
                @include('shared._messages')
                {{-- 引入个人信息局部页面 --}}
                @include('shared._user_info',compact('data'))
            </section>
        </div>
    </div>
@endsection
