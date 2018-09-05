<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册确认邮件</title>
</head>
<body>
<h1>Thanks for your signing up</h1>
<p>
    Please click the below link to complete your comfimation:
    <a href="{{ route('confirm_email',$user->activation_token) }}">
        {{ route('confirm_email',$user->activation_token) }}
    </a>
</p>

<p>
    如果这不是您本人的操作,请忽略此邮件~
</p>
</body>
</html>