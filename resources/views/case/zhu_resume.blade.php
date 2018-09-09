<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>朱姜炜的简历</title>
    <link rel="shortcut icon" href="https://a.photo/images/2018/09/08/apple-icon.th.jpg" type="images/x-icon">
{{--<link rel="icon" href="https://a.photo/images/2018/09/08/apple-icon.th.jpg">--}}

<!--bootstrap 本地引入-->
{{--<link rel="stylesheet" href="/css/app.css">--}}
{{--<link rel="stylesheet" href="./bootstrap-3.3.7/css/bootstrap.min.css">--}}
{{--<script src="./bootstrap-3.3.7/js/jquery-3.2.1.min.js"></script>--}}
{{--<script src="./bootstrap-3.3.7/js/bootstrap.min.js"></script>--}}

<!--bootstrap cdn引入-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /*css reset*/
        body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, input, textarea, p, blockquote, th, td {
            margin: 0;
            padding: 0
        }

        body {
            background-color: #232323;
        }

        .container {
            width: 900px;
            background-color: #e6e6e6;
        }

        .left {
            background-color: #254665;
            height: 1150px !important;
        }

        .left > div {
            margin-top: 20px;
            padding-left: 30px;
        }

        .left > div:nth-of-type(1) {
            padding-left: 0;
        }

        img {
            width: 150px;
            margin-top: 20px;
            border: 3px solid #fff;
        }

        .list-group-item {
            background: transparent;
            border: none;
            /*border: 1px solid #ff0;*/
        }

        div > h3 > span:nth-of-type(1) {
            display: inline-block;
            width: 35px;
            height: 35px;
            color: #254665;
            border-radius: 50%;
            border: 7px solid #fff;
            background-color: #fff;
        }

        dt > span {
            font-weight: normal;
            font-size: 20px;
        }

        .ability > li {
            /*margin-bottom: -15px;*/
            padding-top: 0;
            padding-bottom: 0;
        }

        .hobby > li {
            width: 68px;
            height: 90px;
            /*background: url(image/hobby_for_spirit.png) 0 0 no-repeat;*/
            background: url("https://a.photo/images/2018/09/08/hobby_for_spirit.png") 0 0 no-repeat;
        }

        .hobby > li:nth-of-type(1) {
            background-position: -5px 0;
        }

        .hobby > li:nth-of-type(2) {
            background-position: -5px -576px;
        }

        .hobby > li:nth-of-type(3) {
            background-position: -5px -767px;
        }

        .right > div {
            /*border: 1px solid #00f;*/
            margin-left: 40px;
            margin-top: 50px;
        }

        .right > .declaration {
            margin-top: 40px;
        }

        .left > div > ul.hobby, .right > .declaration, .right > .job_objective > ul, .right > .evaluation > p {
            padding-left: 15px;
        }

        .mydt {
            font-weight: normal;
            /*color: orange;*/
        }

        ol > li {
            margin-left: 40px;
        }

        div.right > div > h3 > span:nth-of-type(1) {
            font-size: 20px;
            color: #fff;
            border-radius: 50%;
            border: 7px solid #254665;
            background-color: #254665;
        }

        .right h3 .title {
            display: inline-block;
            width: 80%;
            padding-bottom: 3px;
            border-bottom: 1px solid #000;
        }

        .right > div {
            width: 80%;
        }

        .right > div > ul > li {
            padding-top: 0;
            padding-bottom: 0;
        }


    </style>
</head>

<body>
<div class="container">
    <div class="row">
        <!--左侧基本信息模块-->
        <div class="left col-md-4 col-sm-4 col-xs-7 bg-primary">
            <!--头像-->
            <div class="text-center">
                <img src="https://a.photo/images/2018/09/08/zjw.jpg" alt="个人照片" class="img-circle">
            </div>
            <!--个人基本信息-->
            <div>
                <ul class="list-group">
                    <li class="list-group-item"><i class="glyphicon glyphicon-calendar"></i>&emsp;27岁</li>
                    <li class="list-group-item"><i class="glyphicon glyphicon-map-marker"></i>&emsp;北京</li>
                    <li class="list-group-item"><i class="glyphicon glyphicon-phone"></i>&emsp;152-1097-4299</li>
                    <li class="list-group-item"><i class="glyphicon glyphicon-envelope"></i>&emsp;fowler@126.com</li>
                </ul>
            </div>
            <!--技能特长-->
            <div>
                <h3><span><i class="glyphicon glyphicon-wrench"></i></span>&emsp;技能特长</h3>
                <ul class="list-group ability">
                    <li class="list-group-item">
                        <dl>
                            <dt><span>php + mysql</span></dt>
                            <dd>
                                <div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80"
                                             aria-valuemin="10" aria-valuemax="100" style="width: 80%">熟练
                                        </div>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <li class="list-group-item">
                        <dl>
                            <dt><span>html + css + js</span></dt>
                            <dd>
                                <div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80"
                                             aria-valuemin="10" aria-valuemax="100" style="width: 80%">熟练
                                        </div>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <li class="list-group-item">
                        <dl>
                            <dt><span>bootstrap + jq</span></dt>
                            <dd>
                                <div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80"
                                             aria-valuemin="10" aria-valuemax="100" style="width: 80%">熟练
                                        </div>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <li class="list-group-item">
                        <dl>
                            <dt><span>Thinkphp + Laravel</span></dt>
                            <dd>
                                <div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                             aria-valuemin="10" aria-valuemax="100" style="width: 60%">良好
                                        </div>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <!--兴趣爱好-->
            <div>
                <h3><span><i class="glyphicon glyphicon-star"></i></span>&emsp;兴趣爱好</h3>
                <ul class="list-group list-inline hobby">
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                </ul>
            </div>
            <!--软件操作-->
            <div>
                <h3><span><i class="glyphicon glyphicon-star"></i></span>&emsp;软件操作</h3>
                <ul class="list-group">
                    <li class="list-group-item">phpstorm</li>
                    <li class="list-group-item">webstorm</li>
                    <li class="list-group-item">sublime text3</li>
                    <li class="list-group-item">notepad++</li>
                </ul>
            </div>
        </div>

        <!--右侧详细信息模块-->
        <div class="right col-md-8 col-sm-8 col-xs-7">
            <!--一句话个人简述-->
            <div class="declaration">
                <h2>朱姜炜</h2>
                <p>熟悉平面, 精通前端、PHP，热衷于web开发</p>
            </div>

            <!--求职意向-->
            <div class="job_objective">
                <h3>
                    <span><i class="glyphicon glyphicon-send"></i></span>
                    &emsp;
                    <span class="title">求职意向</span>
                </h3>
                <ul class="list-group list-inline">
                    <li class="list-group-item"><i class="glyphicon glyphicon-user"></i>&nbsp;前端, php工程师</li>&emsp;
                    <li class="list-group-item"><i class="glyphicon glyphicon-tasks"></i>&nbsp;全职</li>&emsp;
                    <li class="list-group-item"><i class="glyphicon glyphicon-refresh"></i>&nbsp;随时到岗</li>&emsp;
                </ul>
            </div>

            <!--工作经验-->
            <div class="expericence">
                <h3>
                    <span><i class="glyphicon glyphicon-briefcase"></i></span>
                    &emsp;
                    <span class="title">工作经验</span>
                </h3>

                <ul class="list-group">
                    <li class="list-group-item">
                        <dl>
                            <dt>
                                <ul class="list-inline">
                                    <li>2017.8-2018.4</li>
                                    <li>安徽合肥易卓软件有限公司</li>
                                    <li>php实习</li>
                                </ul>
                            </dt>
                            <dd>
                            <dt class="mydt">(1) 纯手写仿nubia手机商城首页:</dt>
                            <dd>
                                <ol>
                                    <li>使用由上至下,由左至右的顺序对页面进行分块,先用颜色填充各部分,最后再写入实际内容;</li>
                                    <li>对页面上的小图标,使用css spirit,减少http请求次数;</li>
                                    <li>使用css3实现图片hover时的动画.</li>
                                </ol>
                            </dd>

                            <dt class="mydt">(2) 参与合肥海立电器有限公司网站管理后台系统项目:</dt>
                            <dd>
                                <ol>
                                    <li>项目使用thinkphp5框架，前端使用X-admin1.0后台模板，完成文章、轮播图、分类、管理员和系统共5个管理模块;</li>
                                    <li>各个模块中数据的(除图片、文件) curd操作均采用jquery ajax实现，减少对服务器的重复请求.</li>
                                </ol>
                            </dd>


                            </dd>
                        </dl>
                    </li>
                    <li class="list-group-item">
                        <dl>
                            <dt>
                                <ul class="list-inline">
                                    <li>2016.3-2017.3</li>
                                    <li>北京昌平简凡图文</li>
                                    <li>平面设计</li>
                                </ul>
                            </dt>
                            <dd>
                                在学校周边的图文打印店实习、工作,负责名片设计,海报设计,熟练掌握了ps的操作及word、pdf文档编辑
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>

            <!--教育背景-->
            <div class="education">
                <h3>
                    <span><i class="glyphicon glyphicon-education"></i></span>
                    &emsp;
                    <span class="title">教育背景</span>
                </h3>

                <ul class="list-group">
                    <li class="list-group-item">
                        <dl>
                            <dt>
                                <ul class="list-inline">
                                    <li>2013.9-2016.7</li>
                                    <li>中国石油大学(北京)</li>
                                    <li>硕士</li>
                                    <li>地质资源与地质工程</li>
                                </ul>
                            </dt>
                            <dd>
                                获校内三等奖学金<br>
                                多次参加学院乒乓球团体比赛,获得二等奖,三等奖<br>
                                为学习便利,自学过photoshop、excel VB和正则表达式
                            </dd>
                        </dl>
                    </li>
                    <li class="list-group-item">
                        <dl>
                            <dt>
                                <ul class="list-inline">
                                    <li>2009.9-2013.7</li>
                                    <li>中国石油大学(北京)</li>
                                    <li>本科</li>
                                    <li>地质工程</li>
                                </ul>
                            </dt>
                            <dd>
                                获校内二等、三等奖学金,毕业时获得校优秀本科毕业生称号<br>
                                参加北京国际长走大会、世界草莓大会等志愿者活动<br>
                                学习了C语言程序设计,网页设计课程
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>

            <!--自我评价-->
            <div class="evaluation">
                <h3>
                    <span><i class="glyphicon glyphicon-pencil"></i></span>
                    &emsp;
                    <span class="title">自我评价</span>
                </h3>
                <p>
                    上学期间在主干专业的学习上开拓了视野,学习了ps,ai,cdr等软件、对pdf的编辑、数学图像数据化等技术,获得了较好的自主学习能力。
                    <br><br>
                    毕业后对web开发产生了兴趣,便自学了前端、后端php语言和mysql数据库。在php实习期间，使用tp5框架参加了几个项目，对面向对象编程有了深入理解。
                </p>
            </div>


        </div>
    </div>

</div>


</body>
</html>
