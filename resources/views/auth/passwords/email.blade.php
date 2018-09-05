@extends('layouts.default')

@section('title','重置密码')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>重置密码</h4>
            </div>
            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{route('password.email')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">邮箱地址</label>
                        <input type="text" name="email" id="email" class="form-control" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">发送密码重置邮件</button>
                </form>
            </div>

        </div>
    </div>

@endsection