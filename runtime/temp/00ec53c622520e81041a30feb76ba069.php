<?php /*a:1:{s:61:"/opt/lampp/htdocs/demo/application/index/view/user/index.html";i:1628751448;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>

    <meta charset="UTF-8">
    <title>个人中心</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="登录demo">
    <meta name="author" content="i@yupoxiong.com">

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
    <link href="/static/index/css/cover.css" rel="stylesheet">
</head>
<body class="text-center">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <h3 class="masthead-brand">前台演示</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link" href="<?php echo url('index/index/index'); ?>">首页</a>
                <a class="nav-link active" href="#">个人中心</a>
            </nav>
        </div>
    </header>

    <main role="main" class="inner cover">
        <h1 class="cover-heading">当前登录：<?php echo htmlentities($user['nickname']); ?></h1>
        <p class="lead">用户等级：<?php echo htmlentities((isset($user['userLevel']['name']) && ($user['userLevel']['name'] !== '')?$user['userLevel']['name']:'')); ?></p>
        <p class="lead">手机号：<?php echo htmlentities($user['mobile']); ?></p>
        <p class="lead">注册时间：<?php echo htmlentities($user['create_time']); ?></p>
        <p class="lead">
            <a href="<?php echo url('index/auth/logout'); ?>" class="btn btn-lg btn-secondary">退出</a>
        </p>
    </main>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p>这是个demo页面，可自行修改.</p>
        </div>
    </footer>
</div>
</body>
</html>
