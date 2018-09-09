<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','sample') - hello</title>
    <!-- 这里的视图文件都是从入口文件 public/index 而来, 导入的 css 文件的路径为 public/css/...-->
    <link rel="icon" href="https://a.photo/images/2018/09/08/apple-icon.th.jpg">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <!--引入顶部导航栏 -->
    @include('layouts._header')

    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <!--供修改的内容部分 -->
                @yield('content')
                <!--引入底部信息 -->
                @include('layouts._footer')
            </div>
        </div>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>
