<?php /*a:9:{s:65:"/opt/lampp/htdocs/demo/application/admin/view/nodelist/index.html";i:1629819349;s:62:"/opt/lampp/htdocs/demo/application/admin/view/public/base.html";i:1628751448;s:66:"/opt/lampp/htdocs/demo/application/admin/view/public/head_css.html";i:1628751448;s:65:"/opt/lampp/htdocs/demo/application/admin/view/public/head_js.html";i:1628751448;s:64:"/opt/lampp/htdocs/demo/application/admin/view/public/header.html";i:1628751448;s:65:"/opt/lampp/htdocs/demo/application/admin/view/public/sidebar.html";i:1628751448;s:72:"/opt/lampp/htdocs/demo/application/admin/view/public/content_header.html";i:1628751448;s:64:"/opt/lampp/htdocs/demo/application/admin/view/public/footer.html";i:1628751448;s:73:"/opt/lampp/htdocs/demo/application/admin/view/public/control_sidebar.html";i:1628751448;}*/ ?>
<?php if(!$admin['pjax']): ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
<?php endif; ?>

    
    <title><?php echo htmlentities((isset($admin['title']) && ($admin['title'] !== '')?$admin['title']:'Admin')); ?> | <?php echo htmlentities((isset($admin['name']) && ($admin['name'] !== '')?$admin['name']:'Admin')); ?></title>
    


<?php if(!$admin['pjax']): ?>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--头部css-->
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/bootstrap-switch/css/bootstrap-switch.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/iconpicker/css/iconpicker.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/select2/css/select2.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/fileinput/css/fileinput.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/css/AdminLTE.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/css/admin.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/css/skins.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/viewer/viewer.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/nprogress/nprogress.css" />
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!--头部js-->
<?php if(!$admin['pjax']): ?>
<script type="text/javascript" src="/static/admin/plugins/js-cookie/js.cookie-2.2.0.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/layer/layer.js"></script>
<script type="text/javascript" src="/static/admin/plugins/laydate/laydate.js"></script>
<script type="text/javascript" src="/static/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/jquery-validation/localization/messages_zh.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/bootstrap-number/bootstrap-number.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/fastclick/fastclick.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/nprogress/nprogress.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/iconpicker/js/iconpicker.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/fileinput/js/plugins/piexif.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/fileinput/js/fileinput.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/fileinput/js/locales/zh.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/static/admin/plugins/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/ueditor/lang/zh-cn/zh-cn.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/clipboard/clipboard.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/viewer/viewer.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/viewer/jquery-viewer.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/echarts/echarts.min.js"></script>
<!--勿必把地图api key更换成自己的-->
<script type="text/javascript" src='//webapi.amap.com/maps?v=1.4.15&key=cccf8ea926e153be0a013d55edd47c11&plugin=AMap.ToolBar,AMap.Autocomplete,AMap.PlaceSearch'></script>
<!-- UI组件库 1.0 -->
<script src="//webapi.amap.com/ui/1.0/main.js?v=1.0.11"></script>
<script>
    //是否为debug模式
    var adminDebug = <?php echo htmlentities($debug); ?>;
    //cookie前缀
    var cookiePrefix = '<?php echo htmlentities($cookie_prefix); ?>';
    //UEditor server地址
    var UEServer = "<?php echo url('editor/server'); ?>";
    //列表页当前选择的ID
    var dataSelectIds = [];
</script>
<script type="text/javascript" src="/static/admin/js/adminlte.min.js"></script>
<script type="text/javascript" src="/static/admin/js/jquery.pjax.js"></script>
<script type="text/javascript" src="/static/admin/js/admin.js"></script>
<script type="text/javascript" src="/static/admin/js/menu.js"></script>
<script type="text/javascript" src="/static/admin/js/app.js"></script>

<?php endif; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php endif; ?>

    <!-- 顶部 -->
    
    <!--网页头部-->
<?php if(!$admin['pjax']): ?>
<header class="main-header" id="mainHeader">
    <a class="logo">
        <span class="logo-mini"><?php echo htmlentities((isset($admin['short_name']) && ($admin['short_name'] !== '')?$admin['short_name']:'Backend')); ?></span>
        <span class="logo-lg"><?php echo htmlentities((isset($admin['name']) && ($admin['name'] !== '')?$admin['name']:'Backend')); ?></span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle ReloadButton" title="刷新页面" data-toggle="dropdown">
                        <i class="fa fa-refresh"></i>
                    </a>
                </li>

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo htmlentities((isset($admin['user']['avatar']) && ($admin['user']['avatar'] !== '')?$admin['user']['avatar']:'/static/admin/images/avatar.png')); ?>" class="user-image" alt="用户头像">
                        <span class="hidden-xs"><?php echo htmlentities((isset($admin['user']['nickname']) && ($admin['user']['nickname'] !== '')?$admin['user']['nickname']:'')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="<?php echo htmlentities((isset($admin['user']['avatar']) && ($admin['user']['avatar'] !== '')?$admin['user']['avatar']:'/static/admin/images/avatar.png')); ?>" class="img-circle" alt="用户头像">
                            <p>
                                <?php echo htmlentities((isset($admin['user']['nickname']) && ($admin['user']['nickname'] !== '')?$admin['user']['nickname']:'')); ?>
                                <small><?php echo htmlentities((isset($admin['user']['username']) && ($admin['user']['username'] !== '')?$admin['user']['username']:'')); ?></small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo url('admin_user/profile'); ?>" class="btn btn-default btn-flat">个人资料</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo url('auth/logout'); ?>" class="btn btn-default btn-flat">退出</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<?php endif; ?>

    
    <!-- 左侧 -->
    
    <!--左侧菜单-->
<?php if(!$admin['pjax']): ?>
<aside class="main-sidebar" id="mainSidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo htmlentities((isset($admin['user']['avatar']) && ($admin['user']['avatar'] !== '')?$admin['user']['avatar']:'__BACKEND_IMAGES__/avatar.png')); ?>" class="img-circle" alt="用户头像">
            </div>
            <div class="pull-left info">
                <p><?php echo htmlentities((isset($admin['user']['nickname']) && ($admin['user']['nickname'] !== '')?$admin['user']['nickname']:'')); ?></p>
                <a><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>
        <form method="get" class="sidebar-form" id="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="搜索菜单" id="search-input">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">导航菜单</li>
            <?php echo (isset($admin['menu']) && ($admin['menu'] !== '')?$admin['menu']:''); ?>
        </ul>
    </section>
</aside>
<?php endif; ?>
    
    <!-- 内容 -->
    <div class="content-wrapper" id="pjax-container">
        
<!--内容头部-->
<section class="content-header">
    <h1>
        <?php echo (isset($admin['title']) && ($admin['title'] !== '')?$admin['title']:'admin'); ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo url('index/index'); ?>"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li class="active"><?php echo (isset($admin['title']) && ($admin['title'] !== '')?$admin['title']:'Admin'); ?></li>
    </ol>
</section>

<?php if(app('session')->get('error_message')): ?>
<!--如果有错误或者成功的消息-->
<script>
    layer.msg('<?php echo htmlentities(app('session')->get('error_message')); ?>',{icon:2});
    $.pjax({
        url: "<?php echo htmlentities(app('session')->get('url')); ?>",
        container: '#pjax-container'
    });
</script>
<?php endif; if(app('session')->get('success_message')): ?>
<script>
    layer.msg('<?php echo htmlentities(app('session')->get('success_message')); ?>',{icon:1});
    $.pjax({
        url: '<?php echo htmlentities(app('session')->get('url')); ?>',
        container: '#pjax-container'
    });
</script>
<?php endif; ?>



<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <form class="form-inline searchForm" id="searchForm" action="<?php echo url('index'); ?>" method="GET">

                        <div class="form-group">
                            <input value="<?php echo !empty($_keywords) ? htmlentities($_keywords) :  '' ;; ?>"
                                   name="_keywords" id="_keywords" class="form-control input-sm" placeholder="昵称/账号">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-search"></i> 查询
                            </button>
                        </div>
                        <div class="form-group">
                            <button onclick="clearSearchForm()" class="btn btn-sm btn-default" type="button"><i
                                    class="fa  fa-eraser"></i> 清空查询
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!--数据列表顶部-->
                <div class="box-header">
                    <div>
                        <a title="添加" data-toggle="tooltip" class="btn btn-primary btn-sm "  href="<?php echo url('add'); ?>">
                            <i class="fa fa-plus"></i> 添加
                        </a>
                        <a class="btn btn-danger btn-sm AjaxButton" data-toggle="tooltip" title="删除选中数据" data-confirm-title="删除确认" data-confirm-content="您确定要删除选中的数据吗？" data-id="checked" data-url="<?php echo url('del'); ?>">
                            <i class="fa fa-trash"></i> 删除
                        </a>

                        <a class="btn btn-success btn-sm AjaxButton" data-toggle="tooltip" title="启用选中数据"
                           data-confirm-title="启用确认" data-confirm-content="您确定要启用选中的数据吗？" data-id="checked"
                           data-url="<?php echo url('enable'); ?>">
                            <i class="fa fa-circle"></i> 启用
                        </a>

                        <a class="btn btn-warning btn-sm AjaxButton" data-toggle="tooltip" title="禁用选中数据"
                           data-confirm-title="禁用确认" data-confirm-content="您确定要禁用选中的数据吗？" data-id="checked"
                           data-url="<?php echo url('disable'); ?>">
                            <i class="fa fa-circle"></i> 禁用
                        </a>

                        <a class="btn btn-success btn-sm ReloadButton" data-toggle="tooltip" title="刷新" data-id="checked" data-url="<?php echo url('del'); ?>">
                            <i class="fa fa-refresh"></i> 刷新
                        </a>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table class="table table-hover table-bordered datatable" width="100%">
                        <thead>
                        <tr>
                            <th>
                                <input id="dataCheckAll" type="checkbox" onclick="checkAll(this)" class="checkbox" placeholder="全选/取消">
                            </th>
<!--                            <th>ID</th>-->
                            <th>IP</th>
                            <th>Website</th>
                            <th>Other</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$item): ?>
                        <tr>
                            <td>
                                <input type="checkbox" onclick="checkThis(this)" name="data-checkbox"
                                       data-id="<?php echo htmlentities($item['id']); ?>" class="checkbox data-list-check" value="<?php echo htmlentities($item['id']); ?>"
                                       placeholder="选择/取消">
                            </td>
<!--                            <td><?php echo htmlentities($item['id']); ?></td>-->
                            <td><?php echo htmlentities($item['ip']); ?></td>
                            <td><?php echo htmlentities($item['website']); ?></td>
                            <td><?php echo htmlentities($item['other']); ?></td>
                            <td class="td-do">


                                <a class="btn btn-warning btn-xs AjaxButton" data-toggle="tooltip" title="安装"
                                   data-id="<?php echo htmlentities($item['id']); ?>" data-confirm-title="安装提醒？"
                                   data-confirm-content='您确定要为 <span class="text-red"><?php echo htmlentities($item['ip']); ?></span> 安装吗？'
                                   data-url="<?php echo url('install'); ?>">
                                    <i class="fa fa-circle"></i>
                                </a>


                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <!-- 数据列表底部 -->
                <div class="box-footer">
                    <?php echo $page; ?>
                    <label class="control-label pull-right" style="margin-right: 10px; font-weight: 100;">
                        <small>共<?php echo htmlentities($total); ?>条记录</small>&nbsp;
                        <small>每页显示</small>
                        &nbsp;
                        <select class="input-sm" onchange="changePerPage(this)">
                            <option value="10" <?php if($admin['per_page']==10): ?>selected<?php endif; ?>>10</option>
                            <option value="20" <?php if($admin['per_page']==20): ?>selected<?php endif; ?>>20</option>
                            <option value="30" <?php if($admin['per_page']==30): ?>selected<?php endif; ?>>30</option>
                            <option value="50" <?php if($admin['per_page']==50): ?>selected<?php endif; ?>>50</option>
                            <option value="100" <?php if($admin['per_page']==100): ?>selected<?php endif; ?>>100</option>
                        </select>
                        &nbsp;
                        <small>条记录</small>
                    </label>
                </div>
            </div>
        </div>
    </div>




</section>
<script>

    var wsServer = 'ws://0.0.0.0:2345';
    var websocket = new WebSocket(wsServer);
    websocket.onopen = function (evt) {
        console.log("Connected to WebSocket server.");
    };

    websocket.onclose = function (evt) {
        console.log("Disconnected");
    };

    websocket.onmessage = function (evt) {
        console.log('Retrieved data from server: ' + evt.data);
    };

    websocket.onerror = function (evt, e) {
        console.log('Error occured: ' + evt.data);
    };
</script>

    </div>
    
    <!--页面底部-->
<?php if(!$admin['pjax']): ?>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> <?php echo htmlentities((isset($admin['version']) && ($admin['version'] !== '')?$admin['version']:'1.0')); ?>
    </div>
    <strong>Copyright &copy; 2021 <a href="<?php echo htmlentities((isset($admin['link']) && ($admin['link'] !== '')?$admin['link']:'#')); ?>"><?php echo htmlentities((isset($admin['author']) && ($admin['author'] !== '')?$admin['author']:'admin')); ?></a>.</strong> All rights
    reserved.
</footer>
<?php endif; ?>
    

    
    <!--侧边栏-->
<?php if(!$admin['pjax']): ?>
<aside class="control-sidebar control-sidebar-dark">
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    </ul>
    <div class="tab-content">
        <div class="tab-pane" id="control-sidebar-home-tab">
        </div>
    </div>
</aside>
<div class="control-sidebar-bg"></div>
<?php endif; if(!$admin['pjax']): ?>
</div>
<?php endif; if(!$admin['pjax']): ?>
</body>
</html>
<?php endif; ?>