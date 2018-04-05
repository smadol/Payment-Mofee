<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:80:"D:\phpStudy\PHPTutorial\WWW\mofee\public/../data/template/admin/login\login.html";i:1521971418;s:65:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\admin\layout.html";i:1513148674;s:70:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\admin\layout\head.html";i:1513788701;s:71:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\admin\layout\aside.html";i:1514460637;s:72:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\admin\layout\header.html";i:1513673712;s:72:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\admin\layout\footer.html";i:1513924063;s:72:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\admin\layout\bottom.html";i:1513874865;}*/ ?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>OneUI - 后台管理 </title>

    <meta name="description" content="OneUI - Admin Dashboard Template & UI Framework">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="/static/oenui/img/favicons/favicon.png">

    <link rel="icon" type="image/png" href="/static/oenui/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/static/oenui/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/static/oenui/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/static/oenui/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="/static/oenui/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="/static/oenui/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/static/oenui/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/static/oenui/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/static/oenui/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/static/oenui/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/static/oenui/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/static/oenui/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/static/oenui/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/static/oenui/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="/static/oenui/js/plugins/slick/slick.min.css">
    <link rel="stylesheet" href="/static/oenui/js/plugins/slick/slick-theme.min.css">
    <link rel="stylesheet" href="/static/oenui/js/plugins/summernote/summernote.min.css">
    <link rel="stylesheet" href="/static/oenui/js/plugins/summernote/summernote-bs3.min.css">
    <link rel="stylesheet" href="/static/oenui/js/plugins/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="/static/oenui/js/plugins/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/static/oenui/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="/static/oenui/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">




    <!-- OneUI CSS framework -->
    <link rel="stylesheet" id="css-main" href="/static/oenui/css/oneui.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="/static/oenui/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->
<!--
    Available Classes:

    'sidebar-l'                  Left Sidebar and right Side Overlay
    'sidebar-r'                  Right Sidebar and left Side Overlay
    'sidebar-mini'               Mini hoverable Sidebar (> 991px)
    'sidebar-o'                  Visible Sidebar by default (> 991px)
    'sidebar-o-xs'               Visible Sidebar by default (< 992px)

    'side-overlay-hover'         Hoverable Side Overlay (> 991px)
    'side-overlay-o'             Visible Side Overlay by default (> 991px)

    'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

    'header-navbar-fixed'        Enables fixed header
-->

<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
    <!-- Sidebar -->
    <nav id="sidebar">
        <!-- Sidebar Scroll Container -->
        <div id="sidebar-scroll">
            <!-- Sidebar Content -->
            <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="side-header side-content bg-white-op">
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times"></i>
                    </button>
                    <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                    <div class="btn-group pull-right">
                        <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                            <i class="si si-drop"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
                            <li>
                                <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">默认</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="/static/oenui/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">紫晶</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="/static/oenui/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">都市</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="/static/oenui/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">扁平</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="/static/oenui/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">新式</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="/static/oenui/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">光滑</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a class="h5 text-white" href="index.html">
                        <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">Momo</span>
                    </a>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="side-content">
                    <ul class="nav-main">
                        <li>
                            <a class="active" href="<?php echo url('admin/index/index'); ?>"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">数据统计</span></a>
                        </li>
                        <li class="nav-main-heading"><span class="sidebar-mini-hide">基本设置</span></li>
                        <li>
                            <a href="<?php echo url('admin/order/index'); ?>"><i class="si si-bar-chart"></i><span class="sidebar-mini-hide">订单管理</span></a>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">分类管理</span></a>
                            <ul>
                                <li>
                                    <a href="<?php echo url('admin/category/index'); ?>">分类列表</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-book-open"></i><span class="sidebar-mini-hide">文章管理</span></a>
                            <ul>
                                <li>
                                    <a href="<?php echo url('admin/article/index'); ?>">文章列表</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-users"></i><span class="sidebar-mini-hide">会员管理</span></a>
                            <ul>
                                <li>
                                    <a href="<?php echo url('admin/member/index'); ?>">会员列表</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading"><span class="sidebar-mini-hide">系统设置</span></li>
                        <li>
                            <a href="<?php echo url('admin/Attachment/index'); ?>"><i class="si si-docs"></i><span class="sidebar-mini-hide">附件管理</span></a>
                        </li>
                        <li>
                            <a href="<?php echo url('admin/inbox/index'); ?>"><i class="si si-rocket"></i><span class="sidebar-mini-hide">邮件服务</span></a>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-wrench"></i><span class="sidebar-mini-hide">权限管理</span></a>
                            <ul>
                                <li>
                                    <a href="<?php echo url('admin/rule/index'); ?>">菜单管理</a>
                                </li>
                                <li>
                                    <a href="<?php echo url('admin/user/index'); ?>">用户管理</a>
                                </li>
                                <li>
                                    <a href="<?php echo url('admin/rule_group/index'); ?>">角色管理</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-settings"></i><span class="sidebar-mini-hide">系统设置</span></a>
                            <ul>
                                <li>
                                    <a href="<?php echo url('admin/Webset/api'); ?>">API管理</a>
                                </li>
                                <li>
                                    <a href="<?php echo url('admin/Webset/index'); ?>">基本配置</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading"><span class="sidebar-mini-hide">拓展设置</span></li>
                        <li>
                            <a href="#"><i class="si si-support"></i><span class="sidebar-mini-hide">微信公众号</span></a>
                        </li>
                        <li>
                            <a href="<?php echo url('admin/extend/sendSms'); ?>"><i class="si si-bubbles"></i><span class="sidebar-mini-hide">短信服务</span></a>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">插件拓展</span></a>
                            <ul>
                                <li>
                                    <a href="<?php echo addon_url('test://Action/link',['id'=>2,'key'=>'sdafgarsrbaserb']); ?>">支付宝支付</a>
                                </li>
                                <li>
                                    <a href="<?php echo url('addons/wxpay/index'); ?>">微信支付</a>
                                </li>

                                <li>
                                    <a href="<?php echo url('admin/extend/qrcode'); ?>">Qrcode</a>
                                </li>
                                <li>
                                    <a href="base_layouts_default.html">导出wps</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- END Side Content -->
            </div>
            <!-- Sidebar Content -->
        </div>
        <!-- END Sidebar Scroll Container -->
    </nav>
    <!-- END Sidebar -->

<!-- Header -->
<header id="header-navbar" class="content-mini content-mini-full">
    <!-- Header Navigation Right -->
    <ul class="nav-header pull-right">
        <li>
            <div class="btn-group">
                <button class="btn btn-default btn-image dropdown-toggle" style="background-color: #ffffff;border: 0px;" data-toggle="dropdown" type="button">
                    <img src="/static/oenui/img/avatars/avatar10.jpg" alt="Avatar">
                    <?php echo $userData['nickname']; ?>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-header">Profile</li>
                    <li>
                        <a tabindex="-1" href="<?php echo url('admin/inbox/index'); ?>">
                            <i class="si si-envelope-open pull-right"></i>
                            <span class="badge badge-primary pull-right">3</span>邮件
                        </a>
                    </li>
                    <li>
                        <a tabindex="-1" href="base_pages_profile.html">
                            <i class="si si-user pull-right"></i>
                            <span class="badge badge-success pull-right">1</span>个人资料
                        </a>
                    </li>
                    <li>
                        <a tabindex="-1" href="javascript:void(0)">
                            <i class="si si-settings pull-right"></i>设置
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Action</li>
                    <li>
                        <a tabindex="-1" href="<?php echo url('admin/index/userLock'); ?>">
                            <i class="si si-lock pull-right"></i>锁定
                        </a>
                    </li>
                    <li>
                        <a tabindex="-1" href="<?php echo url('admin/login/logout'); ?>">
                            <i class="si si-logout pull-right"></i>退出
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <!-- END Header Navigation Right -->

    <!-- Header Navigation Left -->
    <ul class="nav-header pull-left">
        <li class="hidden-md hidden-lg">
            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
            <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                <i class="fa fa-navicon"></i>
            </button>
        </li>
        <li class="hidden-xs hidden-sm">
            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
            <button class="btn btn-default" style="background-color: #ffffff;border: 0px;" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                <i class="fa fa-th-list"></i>
            </button>
        </li>
        <li class="visible-xs">
            <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
            <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                <i class="fa fa-search"></i>
            </button>
        </li>
        <li class="js-header-search header-search">
            <form class="form-horizontal" action="<?php echo url('admin/index/search'); ?>" method="post">
                <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                    <input class="form-control" type="text" id="base-material-text" name="keywords" placeholder="全局搜索..">
                    <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                </div>
            </form>
        </li>
    </ul>
    <!-- END Header Navigation Left -->
</header>
<!-- END Header -->

<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    THIS IS THE DEMO VERSION OF THE UI FRAMEWORK!
    COMMENTS ARE REMOVED, CODE IS COMPRESSED AND CODE STYLE IS ALTERED!
    
    IN THE FULL VERSION
        THE CODE IS INDENTED CORRECTLY AND WELL COMMENTED!
        YOU GET AN EXTENSIVE DOCUMENTATION TO GET YOU STARTED!
        YOU GET THE PHP VERSION (ALONG WITH THE HTML VERSION) WHICH HAS EXTRA FEATURES!
        YOU GET THE AngularJS VERSION!
        YOU GET HIGH QUALITY PSD UI KITS!
        YOU GET THE LessCSS FILES OF THE UI FRAMEWORK
        YOU GET A GRUNTFILE FOR LIVE-COMPILING LessCSS FILES AND BUILDING YOU OWN UI FRAMEWORK
        YOU GET ACCESS TO FRAMEWORK UPDATES WITH NEW FEATURES AND PLUGIN UPGRADES
        WE CAN PROVIDE SUPPORT IF YOU NEED IT :-)
    
    THANK YOU FOR HAVING A LOOK!
    
    ** A LICENSE MUST BE ACQUIRED FOR LEGAL USE -> LINK: http://goo.gl/vNS3I **
    ** PLEASE SUPPORT US IF YOU LIKE OUR WORK, IT HELPS US CONTINUE, THANK YOU VERY MUCH! **
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    -->
    <title>OneUI - Admin Dashboard Template &amp; UI Framework | DEMO</title>
    <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest | This is the demo of OneUI! You need to purchase a license for legal use! | DEMO">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">
    <link rel="shortcut icon" href="__ONEUI__/img/favicons/favicon.png">
    <link rel="icon" type="image/png" href="__ONEUI__/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="__ONEUI__/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="__ONEUI__/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="__ONEUI__/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="__ONEUI__/img/favicons/favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" sizes="57x57" href="__ONEUI__/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="__ONEUI__/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="__ONEUI__/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="__ONEUI__/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="__ONEUI__/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="__ONEUI__/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="__ONEUI__/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="__ONEUI__/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="__ONEUI__/img/favicons/apple-touch-icon-180x180.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700"><link rel="stylesheet" href="__ONEUI__/css/bootstrap.min-3.0.css">
    <link rel="stylesheet" id="css-main" href="__ONEUI__/css/oneui.min-3.3.css">
</head>
<body><div class="bg-white pulldown">
    <div class="content content-boxed overflow-hidden">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <div class="push-30-t push-50 animated fadeIn">
                    <div class="text-center">
                        <i class="fa fa-2x fa-circle-o-notch text-primary"></i>
                        <p class="text-muted push-15-t">A perfect match for your project</p>
                    </div>
                    <form class="js-validation-login form-horizontal push-30-t" action="base_pages_dashboard.php" method="post">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary floating">
                                    <input class="form-control" type="text" id="login-username" name="login-username">
                                    <label for="login-username">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary floating">
                                    <input class="form-control" type="password" id="login-password" name="login-password">
                                    <label for="login-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label class="css-input switch switch-sm switch-primary">
                                    <input type="checkbox" id="login-remember-me" name="login-remember-me"><span></span> Remember Me?
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <div class="font-s13 text-right push-5-t">
                                    <a href="base_pages_reminder_v2.php">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group push-30-t">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                <button class="btn btn-sm btn-block btn-primary" type="submit">Log in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pulldown push-30-t text-center animated fadeInUp">
    <small class="text-muted"><span class="js-year-copy"></span> &copy; OneUI 3.4</small>
</div>
<script src="__ONEUI__/js/oneui.min-3.4.js"></script><script src="__ONEUI__/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="__ONEUI__/js/pages/base_pages_login.js"></script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-16158021-6', 'auto');ga('send', 'pageview');</script>
</body>
</html>

<!-- Footer -->
<footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
    <div class="pull-right">
        Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="" target="_blank">Single Dog</a>
    </div>
    <div class="pull-left">
        <a class="font-w600" href="javascript:void(0)" target="_blank">Momo V2.02</a> &copy; 2017
    </div>
</footer>
<!-- END Footer -->
</div>
<!-- END Page Container -->
<?php echo $error; ?>
<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="/static/oenui/js/core/jquery.min.js"></script>
<script src="/static/oenui/js/core/bootstrap.min.js"></script>
<script src="/static/oenui/js/core/jquery.slimscroll.min.js"></script>
<script src="/static/oenui/js/core/jquery.scrollLock.min.js"></script>
<script src="/static/oenui/js/core/jquery.appear.min.js"></script>
<script src="/static/oenui/js/core/jquery.countTo.min.js"></script>
<script src="/static/oenui/js/core/jquery.placeholder.min.js"></script>
<script src="/static/layer/layer.js" type="text/javascript"></script>
<script src="/static/oenui/js/core/js.cookie.min.js"></script>
<script src="/static/oenui/js/app.js"></script>

<!-- Page Plugins -->
<script src="/static/oenui/js/plugins/slick/slick.min.js"></script>
<script src="/static/oenui/js/plugins/chartjs/Chart.min.js"></script>
<script src="/static/oenui/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="/static/oenui/js/plugins/summernote/summernote.min.js"></script>
<script src="/static/oenui/js/plugins/magnific-popup/magnific-popup.min.js"></script>
<script src="/static/oenui/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/static/oenui/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>



<!-- Page JS Code -->
<script src="/static/oenui/js/pages/base_pages_dashboard.js"></script>
<script src="/static/oenui/js/pages/base_tables_datatables.js"></script>

<script>
    $(function () {
        // Init page helpers
        App.initHelpers(['slick','summernote','magnific-popup','tags-inputs']);
    });
</script>
</body>
</html>