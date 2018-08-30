<!--顶部导航栏 -->
<header class="navbar navbar-fixed-top navbar-inverse">
    <!-- navbar-default 和 navbar-inverse 相反, 代表不同的颜色背景-->
    <div class="container">
        <div class="col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-md-10 col-sm-10 col-xs-10">
            <a href="{{ route('home') }}" id="logo">Sample App</a>
            <nav>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('help')}}">帮助</a></li>
                    <li><a href="#">登陆</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
