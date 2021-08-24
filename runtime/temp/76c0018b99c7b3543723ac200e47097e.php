<?php /*a:1:{s:61:"/opt/lampp/htdocs/demo/application/index/view/auth/login.html";i:1628751448;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="登录demo">
    <meta name="author" content="i@yupoxiong.com">
    <title>登录</title>

    <link href="/static/index/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <link href="/static/index/css/login.css" rel="stylesheet">
</head>
<body class="text-center">
<form class="form-signin" action="" method="post">
    <img class="mb-4" src="/favicon.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">登录(测试账号：test001,密码123456)</h1>
    <label for="username" class="sr-only">用户名</label>
    <input type="text" id="username" name="username" class="form-control" placeholder="请输入用户名" required autofocus>
    <label for="password" class="sr-only">密码</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="请输入密码" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
</form>
</body>
</html>
