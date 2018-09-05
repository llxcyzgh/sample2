@extends('layouts.default')

@section('title','更新密码')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>更新密码</h4>
            </div>
            <div class="panel-body">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{route('password.update')}}"  method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{$token}}">

                    <div class="form-group">
                        <label for="email">邮箱地址</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ $email }}" disabled="disabled">

                        @if($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $erros->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password">密码</label>
                        <input type="password" name="password" id="password" class="form-control" required autofocus>

                        @if($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $erros->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">确认密码</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                               class="form-control" required>

                        @if($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $erros->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>


                    <button type="submit" class="btn btn-primary">修改密码</button>
                </form>
            </div>

        </div>
    </div>

@endsection