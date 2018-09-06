<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>title</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .div-left {
            width: 20%;
            border: 1px solid #000;
        }

        .div-right {
            width: 80%;
            border: 1px solid #f00;
        }


    </style>
</head>


<body>
<div>
    <ul class="list-inline">
        <li>
            <h6>{{count($user->stars)}}</h6>
            <p>关注</p>
        </li>
        <li>
            <h6>{{count($user->fans)}}</h6>
            <p>粉丝</p>
        </li>
        <li>
            <h6>{{count($user->statuses)}}</h6>
            <p>微博</p>
        </li>

    </ul>
</div>
</body>
</html>