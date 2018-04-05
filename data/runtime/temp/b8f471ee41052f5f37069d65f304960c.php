<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:80:"D:\phpStudy\PHPTutorial\WWW\mofee\public/../data/template/admin/index\index.html";i:1521973142;s:65:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\admin\layout.html";i:1513148674;s:70:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\admin\layout\head.html";i:1513788701;s:71:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\admin\layout\aside.html";i:1514460637;s:72:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\admin\layout\header.html";i:1521973090;s:72:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\admin\layout\footer.html";i:1513924063;s:72:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\admin\layout\bottom.html";i:1521973108;}*/ ?>
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
                    <?php echo $userData['username']; ?>
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
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Header -->
        <div class="content bg-image overflow-hidden" style="background-image: url('/static/oenui/img/photos/photo3@2x.jpg');">
            <div class="push-50-t push-15">
                <h1 class="h2 text-white animated zoomIn">后台首页</h1>
                <h2 class="h5 text-white-op animated zoomIn">欢迎 <?php echo \think\Session::get('user.nickname'); ?></h2>
            </div>
        </div>
        <!-- END Page Header -->

        <!-- Stats -->
        <div class="content bg-white border-b">
            <div class="row items-push text-uppercase">
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">订单</div>
                    <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Today</small></div>
                    <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">300</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">新用户</div>
                    <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> This Month</small></div>
                    <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">8,790</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">销售金额</div>
                    <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
                    <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">￥ 93,880</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">访客</div>
                    <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
                    <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">2.7w</a>
                </div>
            </div>
        </div>
        <!-- END Stats -->

        <!-- Page Content -->
        <div class="content">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Main Dashboard Chart -->
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">每周概述</h3>
                        </div>
                        <div class="block-content block-content-full bg-gray-lighter text-center">
                            <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                            <div style="height: 374px;"><canvas class="js-dash-chartjs-lines"></canvas></div>
                        </div>
                        <div class="block-content text-center">
                            <div class="row items-push text-center">
                                <div class="col-xs-6 col-lg-3">
                                    <div class="push-10"><i class="si si-graph fa-2x"></i></div>
                                    <div class="h5 font-w300 text-muted">+ 205 订单</div>
                                </div>
                                <div class="col-xs-6 col-lg-3">
                                    <div class="push-10"><i class="si si-users fa-2x"></i></div>
                                    <div class="h5 font-w300 text-muted">+ 25% 用户</div>
                                </div>
                                <div class="col-xs-6 col-lg-3 visible-lg">
                                    <div class="push-10"><i class="si si-star fa-2x"></i></div>
                                    <div class="h5 font-w300 text-muted">+ 10 销售</div>
                                </div>
                                <div class="col-xs-6 col-lg-3 visible-lg">
                                    <div class="push-10"><i class="si si-share fa-2x"></i></div>
                                    <div class="h5 font-w300 text-muted">+ 35k 分享</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Main Dashboard Chart -->
                </div>
                <div class="col-lg-4">
                    <!-- Latest Sales Widget -->
                    <div class="block">
                        <div class="block-header">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">最新订单</h3>
                        </div>
                        <div class="block-content bg-gray-lighter">
                            <div class="row items-push">
                                <div class="col-xs-4">
                                    <div class="text-muted"><small><i class="si si-calendar"></i> 24 小时</small></div>
                                    <div class="font-w600">18 Sales</div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="text-muted"><small><i class="si si-calendar"></i> 7 天</small></div>
                                    <div class="font-w600">78 Sales</div>
                                </div>
                                <div class="col-xs-4 h1 font-w300 text-right">￥769</div>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="pull-t pull-r-l">
                                <!-- Slick slider (.js-slider class is initialized in App() -> uiHelperSlick()) -->
                                <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
                                <div class="js-slider remove-margin-b" data-slider-autoplay="true" data-slider-autoplay-speed="2500">
                                    <div>
                                        <table class="table remove-margin-b font-s13">
                                            <tbody>
                                            <tr>
                                                <td class="font-w600">
                                                    <a href="javascript:void(0)">Admin Template</a>
                                                </td>
                                                <td class="hidden-xs text-muted text-right" style="width: 70px;">23:01</td>
                                                <td class="font-w600 text-success text-right" style="width: 70px;">+ ￥21</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                                <td class="hidden-xs text-muted text-right">22:15</td>
                                                <td class="font-w600 text-success text-right">+ ￥52</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">HTML Template</a></td>
                                                <td class="hidden-xs text-muted text-right">22:01</td>
                                                <td class="font-w600 text-success text-right">+ ￥16</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                                <td class="hidden-xs text-muted text-right">21:45</td>
                                                <td class="font-w600 text-success text-right">+ ￥23</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                                <td class="hidden-xs text-muted text-right">21:15</td>
                                                <td class="font-w600 text-success text-right">+ ￥48</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                                <td class="hidden-xs text-muted text-right">20:11</td>
                                                <td class="font-w600 text-success text-right">+ ￥23</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                                <td class="hidden-xs text-muted text-right">20:01</td>
                                                <td class="font-w600 text-success text-right">+ ￥50</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">HTML Template</a></td>
                                                <td class="hidden-xs text-muted text-right">19:35</td>
                                                <td class="font-w600 text-success text-right">+ ￥16</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                                <td class="hidden-xs text-muted text-right">19:17</td>
                                                <td class="font-w600 text-success text-right">+ ￥60</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                                <td class="hidden-xs text-muted text-right">17:49</td>
                                                <td class="font-w600 text-success text-right">+ ￥59</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div>
                                        <table class="table remove-margin-b font-s13">
                                            <tbody>
                                            <tr>
                                                <td class="font-w600">
                                                    <a href="javascript:void(0)">Admin Template</a>
                                                </td>
                                                <td class="hidden-xs text-muted text-right" style="width: 70px;">16:10</td>
                                                <td class="font-w600 text-success text-right" style="width: 70px;">+ ￥21</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                                <td class="hidden-xs text-muted text-right">16:06</td>
                                                <td class="font-w600 text-success text-right">+ ￥48</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                                <td class="hidden-xs text-muted text-right">15:21</td>
                                                <td class="font-w600 text-success text-right">+ ￥52</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                                <td class="hidden-xs text-muted text-right">12:10</td>
                                                <td class="font-w600 text-success text-right">+ ￥23</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                                <td class="hidden-xs text-muted text-right">12:09</td>
                                                <td class="font-w600 text-success text-right">+ ￥23</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">HTML Template</a></td>
                                                <td class="hidden-xs text-muted text-right">11:39</td>
                                                <td class="font-w600 text-success text-right">+ ￥16</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                                <td class="hidden-xs text-muted text-right">11:33</td>
                                                <td class="font-w600 text-success text-right">+ ￥23</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                                <td class="hidden-xs text-muted text-right">11:18</td>
                                                <td class="font-w600 text-success text-right">+ ￥23</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                                <td class="hidden-xs text-muted text-right">09:49</td>
                                                <td class="font-w600 text-success text-right">+ ￥50</td>
                                            </tr>
                                            <tr>
                                                <td class="font-w600"><a href="javascript:void(0)">HTML Template</a></td>
                                                <td class="hidden-xs text-muted text-right">09:35</td>
                                                <td class="font-w600 text-success text-right">+ ￥16</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END Slick slider -->
                            </div>
                        </div>
                    </div>
                    <!-- END Latest Sales Widget -->
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

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