<!-- 引用默认模板 -->
@extends('layouts.default')
<!-- 更改默认模板中的title -->
@section('title',$user->name)

<!-- 填充内容 -->
@section('content')
    <div class="row">
        {{--<div class="col-md-offset-2 col-md-8">--}}
            {{--用户头像和用户名--}}
            <div class="col-md-12">
                <section class="user_info">
                    {{-- session() 是否有系统错误提示文件 --}}
                    @include('shared._errors')

                    {{-- session() 是否有自己写的提示文件 --}}
                    @include('shared._messages')

                    {{-- 引入个人信息局部页面 --}}
                    @include('shared._user_info')
                </section>
            </div>
            {{--用户状态列表--}}
            <div class="col-md-12">
                @if(count($statuses)>0)
                    <ul class="list-group">
                        @foreach($statuses as $status)
                            @include('statuses._status')
                        @endforeach
                    </ul>
                @endif
            </div>
        {{--</div>--}}
    </div>
@endsection
