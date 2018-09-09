<!--顶部导航栏 -->
<header class="navbar navbar-fixed-top navbar-inverse">
    <!-- navbar-default 和 navbar-inverse 相反, 代表不同的颜色背景-->
    <div class="container">
        {{--<div class="col-md-offset-1 col-sm-offset-1 col-xs-offset-3 col-md-10 col-sm-10 col-xs-6">--}}
        <div class="col-md-offset-1 col-md-10">
            <a href="{{ route('home') }}" id="logo" class="pull-left">Sample App</a>
            <nav>
                <ul class="nav navbar-nav navbar-right pull-right">
                    @if(Auth::check())
                        <li><a href="{{ route('users.index') }}">用户列表</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{ Auth::user()->name }} <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu text-center">
                                <li class="text-center"><a href="{{ route('users.show',Auth::user()->id) }}">个人中心</a></li>
                                <li class="text-center"><a href="{{ route('users.edit',Auth::user()->id) }}">编辑资料</a></li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <form action="{{ route('logout') }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-block btn-danger">退出</button>
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="pull-right"><a href="{{ route('login') }}">登陆</a></li>
                        <li class="pull-right"><a href="{{ route('help') }}">帮助</a></li>

                        <li class="pull-right"><a href="{{ route('case.resume') }}" style="color: tomato">个人简历</a></li>
                        <li class="pull-right"><a href="{{ route('case.zxindex') }}" style="color: tomato">仿中兴首页</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>
