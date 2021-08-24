<?php /*a:9:{s:65:"/opt/lampp/htdocs/demo/application/admin/view/admin_menu/add.html";i:1628751448;s:62:"/opt/lampp/htdocs/demo/application/admin/view/public/base.html";i:1628751448;s:66:"/opt/lampp/htdocs/demo/application/admin/view/public/head_css.html";i:1628751448;s:65:"/opt/lampp/htdocs/demo/application/admin/view/public/head_js.html";i:1628751448;s:64:"/opt/lampp/htdocs/demo/application/admin/view/public/header.html";i:1628751448;s:65:"/opt/lampp/htdocs/demo/application/admin/view/public/sidebar.html";i:1628751448;s:72:"/opt/lampp/htdocs/demo/application/admin/view/public/content_header.html";i:1628751448;s:64:"/opt/lampp/htdocs/demo/application/admin/view/public/footer.html";i:1628751448;s:73:"/opt/lampp/htdocs/demo/application/admin/view/public/control_sidebar.html";i:1628751448;}*/ ?>
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
            <div class="box box-primary">

                <!-- 表单头部 -->
                <div class="box-header with-border">
                    <div class="btn-group">
                        <a class="btn flat btn-sm btn-default BackButton">
                            <i class="fa fa-arrow-left"></i>
                            返回
                        </a>
                    </div>
                </div>

                <form id="dataForm" class="dataForm form-horizontal" action="" method="post"
                      enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="fields-group">
                            <div class="form-group">
                                <label for="parent_id" class="col-sm-2 control-label">上级菜单</label>
                                <div class="col-sm-10 col-md-4">
                                    <select name="parent_id" id="parent_id" class="form-control select2">
                                        <option value="0">/</option>
                                        <?php echo $parents; ?>
                                    </select>
                                </div>
                            </div>
                            <script>
                                $('#parent_id').select2();
                            </script>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">名称</label>
                                <div class="col-sm-10 col-md-4">
                                    <input maxlength="50" id="name" name="name" value="<?php echo htmlentities((isset($data['name']) && ($data['name'] !== '')?$data['name']:'')); ?>"
                                           class="form-control" placeholder="请输入菜单名称">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="url" class="col-sm-2 control-label">url</label>
                                <div class="col-sm-10 col-md-4">
                                    <input maxlength="100" id="url" name="url" value="<?php echo htmlentities((isset($data['url']) && ($data['url'] !== '')?$data['url']:'')); ?>"
                                           class="form-control" placeholder="菜单url">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="icon" class="col-sm-2 control-label">图标</label>
                                <div class="col-sm-10 col-md-4">
                                    <div class="input-group iconpicker-container">
                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                        <input maxlength="30" id="icon" name="icon"
                                               value="<?php echo htmlentities((isset($data['icon']) && ($data['icon'] !== '')?$data['icon']:'fa-list')); ?>" class="form-control "
                                               placeholder="请输入图标class">
                                    </div>
                                </div>
                            </div>
                            <script>
                                $('#icon').iconpicker({placement: 'bottomLeft'});
                            </script>

                            <div class="form-group">
                                <label for="sort_id" class="col-sm-2 control-label">排序</label>
                                <div class="col-sm-10 col-md-4">
                                    <div class="input-group">
                                        <input max="9999" min="1" type="number" id="sort_id" name="sort_id"
                                               value="<?php echo htmlentities((isset($data['sort_id']) && ($data['sort_id'] !== '')?$data['sort_id']:'1000')); ?>"
                                               class="form-control input-number field-number" placeholder="默认1000">
                                    </div>
                                </div>
                            </div>
                            <script>
                                $('#sort_id')
                                    .bootstrapNumber({
                                        upClass: 'success',
                                        downClass: 'primary',
                                        center: true
                                    });
                            </script>

                            <div class="form-group">
                                <label for="is_show" class="col-sm-2 control-label">是否显示</label>
                                <div class="col-sm-10 col-md-4">
                                    <input class="input-switch" id="is_show" value="1"
                                           <?php if(!isset($data) || ($data['is_show']==1)): ?>checked<?php endif; ?> type="checkbox"/>
                                    <input class="switch" name="is_show" value="<?php echo htmlentities((isset($data['is_show']) && ($data['is_show'] !== '')?$data['is_show']:'1')); ?>"
                                           placeholder="" hidden/>
                                </div>
                            </div>
                            <script>
                                $('#is_show').bootstrapSwitch({
                                    onText: "是",
                                    offText: "否",
                                    onColor: "success",
                                    offColor: "danger",
                                    onSwitchChange: function (event, state) {
                                        $(event.target).closest('.bootstrap-switch').next().val(state ? '1' : '0').change();
                                    }
                                });
                            </script>
                            <div class="form-group">
                                <label for="log_method" class="col-sm-2 control-label">日志请求方式</label>
                                <div class="col-sm-10 col-md-4">
                                    <select name="log_method" id="log_method" class="form-control select2">
                                        <?php if(is_array($log_method) || $log_method instanceof \think\Collection || $log_method instanceof \think\Paginator): if( count($log_method)==0 ) : echo "" ;else: foreach($log_method as $key=>$item): ?>
                                        <option value="<?php echo htmlentities($item); ?>" <?php if(isset($data) &&
                                                $data['log_method']==$item): ?>selected<?php endif; ?>>
                                            <?php echo htmlentities($item); ?>
                                        </option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <script>
                                $('#log_method').select2();
                            </script>

                            <?php if(!isset($data)): ?>
                            <div class="form-group">
                                <label for="is_more" class="col-sm-2 control-label">是否自动生成增删改菜单</label>
                                <div class="col-sm-10 col-md-4">
                                    <input id="is_more" class="input-switch" placeholder="" type="checkbox"/>
                                    <input class="switch" name="is_more" value="0" hidden/>
                                </div>
                            </div>
                            <script>
                                $('#is_more').bootstrapSwitch({
                                    onText: "是",
                                    offText: "否",
                                    onColor: "success",
                                    offColor: "danger",
                                    onSwitchChange: function (event, state) {
                                        $(event.target).closest('.bootstrap-switch').next().val(state ? '1' : '0').change();
                                    }
                                });
                            </script>
                            <div class="form-group">
                                <label for="more_name" class="col-sm-2 control-label">增删改操作名称</label>
                                <div class="col-sm-10 col-md-4">
                                    <input maxlength="50" id="more_name" name="more_name"
                                           value="<?php echo htmlentities((isset($data['more_name']) && ($data['more_name'] !== '')?$data['more_name']:'')); ?>" class="form-control"
                                           placeholder="请输入操作名称">
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--表单底部-->
                    <div class="box-footer">
                        <?php echo token(); ?>
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-10 col-md-4">
                            <?php if(!isset($data)): ?>
                            <div class="btn-group pull-right">
                                <label class="createContinue">
                                    <input type="checkbox" value="1" id="_create" name="_create"
                                           title="继续添加数据">继续添加</label>
                            </div>
                            <?php endif; ?>
                            <div class="btn-group">
                                <button type="submit" class="btn flat btn-info dataFormSubmit">
                                    保存
                                </button>
                            </div>
                            <div class="btn-group">
                                <button type="reset" class="btn flat btn-default dataFormReset">
                                    重置
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    $("#dataForm").validate({
        rules: {
            name: {
                required: true,
            },
            url: {
                required: true
            },
            icon: {
                required: true
            },
            sort_id: {
                required: true
            }
        },
        messages: {
            name: {
                required: "名称不能为空",
            },
            url: {
                required: "url不能为空",
            },
            icon: {
                required: "图标不能为空",
            },
            sort_id: {
                required: "排序不能为空",
            },
        },
    });
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