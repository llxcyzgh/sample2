<!-- 引用默认模板 -->
@extends('layouts.default')
<!-- 更改默认模板中的title -->
@section('title','用户列表')

<!-- 填充内容 -->
@section('content')
    <div class="col-md-8 col-md-offset-2">


        <h1>这是所有用户列表</h1>
        {!! $users->render() !!}
        <ul class="list-group">
            {{--        @foreach($data_arr as $data)--}}
            @foreach($users as $user)
                {{--用户名 - {{ $user->name }}  | 邮箱 - {{$user->email}}      <br>--}}
                <li class="list-group-item">
                    {{--@include('shared._user_info')--}}

                    @include('shared._user_info_img')
                    <a href="{{route('users.show',$user->id)}}">
                        <span>{{ $user->name }}</span>
                    </a>

                    @can('destroy',$user)
                        <form action="{{ route('users.destroy',$user->id) }}" method="post" class="pull-right">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-danger">删除该用户</button>
                        </form>
                    @endcan
                </li>
            @endforeach
        </ul>
        {!! $users->render() !!}
    </div>
@endsection
