<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"D:\phpStudy\PHPTutorial\WWW\mofee\public/../application/admin\view\index\index.html";i:1520932996;s:73:"D:\phpStudy\PHPTutorial\WWW\mofee\application\admin\view\common\head.html";i:1520611854;s:73:"D:\phpStudy\PHPTutorial\WWW\mofee\application\admin\view\common\foot.html";i:1520597035;}*/ ?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="MoPay">
    <title>后台管理 - Mofee聚合支付</title>
    <link rel="apple-touch-icon" href="/favicon.ico">
    <link rel="shortcut icon" href="/favicon.ico">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/static/ziliao/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/ziliao/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/static/ziliao/css/site.min.css?v=2.5">
    <!--<link rel="stylesheet" href="/static/ziliao/css/site.css">-->
    <!-- Plugins -->
    <link rel="stylesheet" href="/static/ziliao/css/animsition.css">
    <link rel="stylesheet" href="/static/ziliao/css/asscrollable.css">
    <link rel="stylesheet" href="/static/ziliao/css/switchery.css">
    <link rel="stylesheet" href="/static/ziliao/css/introjs.css">
    <link rel="stylesheet" href="/static/ziliao/css/slidepanel.css">
    <link rel="stylesheet" href="/static/ziliao/css/flag-icon.css">
    <link rel="stylesheet" href="/static/ziliao/css/aspieprogress.css">
    <link rel="stylesheet" href="/static/ziliao/css/pie-progress.css">
    <link rel="stylesheet" href="/static/ziliao/css/slidepanel.css">
    <link rel="stylesheet" href="/static/ziliao/css/chartist.css">
    <link rel="stylesheet" href="/static/ziliao/css/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="/static/ziliao/css/jquery-selective.css">
    <link rel="stylesheet" href="/static/ziliao/css/work.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="/static/ziliao/css/font-awesome.css">
    <link rel="stylesheet" href="/static/ziliao/css/mfglabs.css">
    <link rel="stylesheet" href="/static/ziliao/css/web-icons.min.css">
    <link rel="stylesheet" href="/static/ziliao/css/brand-icons.min.css">
    <link rel="stylesheet" href="/static/ziliao/css/bootstrap-select.css">

    <!-- Scripts -->
    <script src="/static/ziliao/js/jquery.js"></script>
    <script src="/static/ziliao/js/breakpoints.js"></script>
    <!--//加载提示-->
    <script>
        Breakpoints();
    </script>
</head>
<body class="animsition dashboard">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided unfolded" data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>

        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle">
            <img class="navbar-brand-logo" src="/alogo.png" class="navbar-brand-text hidden-xs-down">
            <img class="navbar-brand-logo" src="/blogo.png" title="Mofee聚合支付"></span></a>
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search" data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
    </div>
    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li class="nav-item hidden-float" id="toggleMenubar">
                    <a class="nav-link" data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-arrow-left ">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="nav-item hidden-float">
                    <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                       role="button">
                        <span class="sr-only">Toggle Search</span>
                    </a>
                </li>
            </ul>
            <!-- End Navbar Toolbar -->
            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                       data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="//q4.qlogo.cn/headimg_dl?dst_uin=1078509454&spec=100" alt="...">
                <i></i>
              </span>
                    </a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="/admin/logout" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> 退出账户</a>
                    </div>
                </li>
            </ul>
            <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="site-search" placeholder="请输入商户订单号...">
                        <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                                data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>

<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div class="navbarclass">
                <ul class="site-menu" >
                    <li class="site-menu-category">会员中心</li>

                    <li  class="site-menu-item <?php if(\think\Request::instance()->action() == 'index'): ?>active<?php else: endif; ?>" >
                        <a class="animsition-link" href="/admin">
                            <i class="site-menu-icon fa fa-steam" aria-hidden="true"></i>
                            <span  class="site-menu-title">交易总览</span>
                        </a>
                    </li>
                    <li class="site-menu-category">服务管理</li>
                    <li  class="site-menu-item <?php if(\think\Request::instance()->action() == 'order'): ?>active<?php else: endif; ?>"  >
                        <a class="animsition-link" href="/admin/order?action=details">
                            <i class="site-menu-icon fa fa-dribbble" aria-hidden="true"></i>
                            <span class="site-menu-title">订单管理</span>
                        </a>
                    </li>
                    <li  class="site-menu-item  <?php if(\think\Request::instance()->action() == 'settle'): ?>active<?php else: endif; ?>"  >
                        <a class="animsition-link" href="/admin/settle?action=list">
                            <i class="site-menu-icon fa fa-th-large" aria-hidden="true"></i>
                            <span class="site-menu-title">结算管理</span>
                        </a>
                    </li>
                    <li  class="site-menu-item"  >
                        <a class="animsition-link" href="affiliates.php">
                            <i class="site-menu-icon fa fa-pie-chart" aria-hidden="true"></i>
                            <span class="site-menu-title">用户管理</span>
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </div>
    <div class="site-menubar-footer">
        <a href="/user/logout" data-placement="top" data-toggle="tooltip" data-original-title="退出账户" style="width: 100%;">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
    </div>
</div>
<!--Page-->
<div class="page" xmlns="http://www.w3.org/1999/html">
    <div class="page-content container-fluid index">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="page-content container-fluid">
                <div class="row" data-plugin="matchHeight" data-by-row="true">

                    <div class="col-xxl-4 col-xl-4 col-lg-12 col-xs-12">
                        <!-- Panel Web Designer -->
                        <div class="card card-shadow">
                            <div class="text-xs-center p-t-15 p-b-5">
                                <div class="avatar avatar-100 m-b-20">

                                    <img src="//q4.qlogo.cn/headimg_dl?dst_uin=1078509454&spec=100" alt="">
                                </div>
                                <p class="font-size-20 blue-grey-700">
                                    <span class="text-muted">Hi,</span> <a class="text-primary" href="javascript:;"><?php echo $userInfo['username']; ?></a>

                                </p>
                            </div>
                            <div class="card-block text-xs-center p-t-30 p-b-35">
                                <input type="text" value="当前时间:<?php echo date('Y-m-d h:i:s'); ?>" disabled="disabled" class="form-control font-size-14" style="border:0;background:#46be8a;color:#fff;">
                            </div>
                        </div>
                        <!-- End Panel Web Designer -->
                    </div>



                    <div class="col-xxl-8 col-xl-8 col-lg-12 col-xs-12">

                        <!-- Widget Linearea Color -->
                        <div class="card card-shadow card-responsive card-index col-sm-12" id="widgetLineareaColor">
                            <div class="card-block p-0">
                                <div class="p-t-30 p-30">
                                    <div class="row">
                                        <div class="col-xs-7">
                                            <p class="font-size-20 blue-grey-700">总交易额</p>
                                            <p class="hidden-xs-down"></p>
                                            <div class="counter counter-md text-xs-left">
                                                <div class="counter-number-group">
                                                    <p class="index-icon-money left">
                                                        <span class="counter-number orange-600 ">￥</span>
                                                    </p>
                                                    <p class="index-icon-money right"><a href="#"><button type="button" class="btn btn-outline btn-success"><?php echo $total; ?></button></a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-5">
                                            <div class="pull-xs-right clearfix">

                                                <ul class="list-unstyled">
                                                    <li class="m-b-5 text-truncate">
                                                        <i class="icon wb-medium-point green-600 m-r-5" aria-hidden="true"></i><a href="/admin/order?action=invoices">   待结算账单：0</a>
                                                    </li>
                                                    <li class="m-b-5 text-truncate">
                                                        <i class="icon wb-medium-point green-600 m-r-5" aria-hidden="true"></i><a href="/admin/order?action=settle">   已结算账单：0</a>
                                                    </li>
                                                    <li class="m-b-5 text-truncate">
                                                        <i class="icon wb-medium-point green-600 m-r-5" aria-hidden="true"></i><a href="/admin/order?action=export">   导出对账单</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Widget Linearea Color -->
                        <div class="clearfix"></div>
                        <div class="col-xl-4 col-lg-4 col-xs-12 form-group-region-left button-help">
                            <!-- Card -->
                            <a href="/admin/order?action=details"><div class="card card-shadow card-block p-20">
                                <div class="counter counter-lg">
                                    <div class="counter-label text-uppercase">订单总数</div>
                                    <div class="counter-number-group">
                                        <span class="counter-icon m-r-10 green-600">
                                          <i class="fa fa-first-order"></i>
                                        </span>
                                        <span class="counter-number font-size-34"><?php echo $orderCount; ?></span>
                                        <span class="counter-number-related"></span>
                                    </div>
                                </div>
                            </div></a>
                            <!-- End Card -->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-xs-12 form-group-region button-help">
                            <!-- Card -->
                            <a href="#"><div class="card card-shadow card-block p-20">
                                <div class="counter counter-lg">
                                    <div class="counter-label text-uppercase">今日交易</div>
                                    <div class="counter-number-group">
                                        <span class="counter-icon m-r-10 green-600">
                                          <i class="fa fa-paypal"></i>
                                        </span>
                                        <span class="counter-number font-size-34"><?php echo $now_day_count; ?></span>
                                        <span class="counter-number-related"></span>
                                    </div>
                                </div>
                            </div></a>
                            <!-- End Card -->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-xs-12 form-group-region-right button-help">
                            <!-- Card -->
                            <a href="#"><div class="card card-shadow card-block p-20">
                                <div class="counter counter-lg">
                                    <div class="counter-label text-uppercase">昨日交易</div>
                                    <div class="counter-number-group">
                                        <span class="counter-icon m-r-10 green-600">
                                          <i class="fa fa-signal"></i>
                                        </span>
                                        <span class="counter-number font-size-34">0</span>
                                        <span class="counter-number-related"></span>
                                    </div>
                                </div>
                            </div></a>
                            <!-- End Card -->
                        </div>
                        <div class="clearfix"></div>
                    </div>


                    <div class="clearfix"></div>
                    <div class="col-xxl-9 col-lg-8 col-xs-12 index-details">
                        <!-- Panel Watchlist -->
                        <div id="countriesVistsWidget" class="card card-shadow card-md h-357  p-b-10">
                            <div class="card-header card-header-transparent p-b-15">
                                <p class="font-size-14 blue-grey-700 m-b-0">最新记录</p>
                                <span class="tag tag-round tag-success"><a href="/user/order?action=more">more</a></span>
                            </div>
                            <div class="card-block p-x-30 p-t-0">
                                <div class="table-responsive">
                                    <table class="table table-hover" >
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_desc" style="width: 30px;">状态</th>
                                            <th class="sorting" style="width: 120px;">交易号</th>
                                            <th class="sorting" style="width: 50px;">商品金额</th>
                                            <th class="sorting" style="width: 50px;">支付方式</th>
                                            <th class="sorting" style="width: 100px;">创建时间</th>
                                        </thead>
                                        <tbody>
                                        <?php foreach($orderData as $vo): ?>
                                        <tr role="row">
                                            <td class="work-status sorting_1">
                                                <?php if($vo['status'] == 1): ?>
                                                <span class="tag tag-warning">下单完成</span>
                                                <?php elseif($vo['status'] == 2): ?>
                                                <span class="tag tag-success">支付完成</span>
                                                <?php else: ?>
                                                <span class="tag tag-danger">支付失败</span>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo $vo['trade_no']; ?></td>
                                            <td>￥ <b><?php echo $vo['amount']; ?></b></td>
                                            <td>
                                                <?php if($vo['method'] == 'WXPAY'): ?>
                                                <b>微信支付</b>
                                                <?php elseif($vo['method'] == 'ALIPAY'): ?>
                                                <b>支付宝支付</b>
                                                <?php else: ?>
                                                <b>Mofee支付</b>
                                                <?php endif; ?></td>
                                            <td><?php echo $vo['create_time']; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End Panel Watchlist -->
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-xs-12 index-news">
                        <!-- Widget Linepoint -->
                        <div class="card card-shadow" id="widgetLinepointDate">
                            <div class="card-block p-30">
                                <div class="index-head">
                                    <p class="font-size-14 blue-grey-700 m-b-0">公告通知</p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row text-xs-center m-y-25" style="font-weight: bold;">
                                    <i class="fa fa-fw  fa-diamond mr"></i> 客服时间：7*24 小时 /
                                    <i class="fa fa-fw  fa-diamond mr"></i> 客服QQ:702154416
                                </div>
                                <li class="list-group-item p-0" style="font-weight: bold;line-height: 20px;font-size: 14px;"><i class="fa fa-fw fa-volume-up mr"></i>
                                    申请结算请在当日18点前提交，我们将会在每日23：00进行全款结算
                                    <span class=" pull-xs-right">2018/03/01</span>
                                    <p></p>
                                </li>
                                <li class="list-group-item p-0" style="font-weight: bold;line-height: 20px;font-size: 14px;"><i class="fa fa-fw fa-volume-up mr"></i>
                                    官方结算群：7259491783(1群)
                                    <span class=" pull-xs-right">2018/03/01</span>
                                    <p></p>
                                </li>
                            </div>
                        </div>
                        <!-- End Widget Linepoint -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page -->


<!-- Footer -->


<script src="/static/ziliao/js/babel-external-helpers.js"></script>

<script src="/static/ziliao/js/tether.js"></script>
<script src="/static/ziliao/js/bootstrap.js"></script>
<script src="/static/ziliao/js/animsition.js"></script>
<script src="/static/ziliao/js/jquery.mousewheel.js"></script>
<script src="/static/ziliao/js/jquery-asscrollbar.js"></script>
<script src="/static/ziliao/js/jquery-asscrollable.js"></script>
<script src="/static/ziliao/js/jquery-ashoverscroll.js"></script>
<script src="/static/ziliao/js/public.js"></script>
<!-- Plugins -->
<script src="/static/ziliao/js/to-markdown.js"></script>
<script src="/static/ziliao/js/marked.js"></script>
<script src="/static/ziliao/js/markdown.js"></script>
<script src="/static/ziliao/js/bootstrap-markdown.js"></script>
<script src="/static/ziliao/js/bootstrap-select-one.js"></script>
<script src="/static/ziliao/js/switchery.min.js"></script>
<script src="/static/ziliao/js/intro.js"></script>
<script src="/static/ziliao/js/screenfull.js"></script>
<script src="/static/ziliao/js/jquery-slidepanel.js"></script>
<script src="/static/ziliao/js/chartist.min.js"></script>
<script src="/static/ziliao/js/chartist-plugin-tooltip.min.js"></script>
<script src="/static/ziliao/js/jquery-selective.min.js"></script>
<script src="/static/ziliao/js/jquery-aspieprogress.js"></script>
<script src="/static/ziliao/js/jquery.placeholder.js"></script>
<!-- Scripts -->
<script src="/static/ziliao/js/state.js"></script>
<script src="/static/ziliao/js/component.js"></script>
<script src="/static/ziliao/js/plugin.js"></script>
<script src="/static/ziliao/js/base.js"></script>
<script src="/static/ziliao/js/config.js"></script>
<script src="/static/ziliao/js/menubar.js"></script>
<script src="/static/ziliao/js/gridmenu.js"></script>
<script src="/static/ziliao/js/sidebar.js"></script>
<script src="/static/ziliao/js/pageaside.js"></script>
<script src="/static/ziliao/js/menu.js"></script>
<script src="/static/ziliao/js/colors.js"></script>
<script src="/static/ziliao/js/tour.js"></script>
<script>
    Config.set('assets', '../assets');
</script>
<!-- Page -->
<script src="/static/ziliao/js/site.js"></script>
<script src="/static/ziliao/js/asscrollable.js"></script>
<script src="/static/ziliao/js/slidepanel.js"></script>
<script src="/static/ziliao/js/switchery.js"></script>
<script src="/static/ziliao/js/jquery-placeholder.js"></script>
<script src="/static/ziliao/js/material.js"></script>
<script src="/static/ziliao/js/aspaginator.js"></script>
<script src="/static/ziliao/js/baseapp.js"></script>
<script src="/static/ziliao/js/work.js"></script>
<script src="/static/ziliao/js/work-one.js"></script>
<script src="/static/layer/layer.js"></script>
<!-- Page -->
<?php if(\think\Request::instance()->action() == 'security'): ?>
<script src="/static/ziliao/js/aspieprogress.js"></script>
<?php endif; if(\think\Request::instance()->action() == 'ticket'): ?>
<!-- Page -->
<script src="/static/ziliao/js/bootstrap-select.js"></script>
<script src="/static/ziliao/js/dropify.min.js"></script>
<?php endif; ?>
<script>
    (function(document, window, $) {
        'use strict';
        var Site = window.Site;
        $(document).ready(function() {
            Site.run();
        });
    })(document, window, jQuery);
    $('.clientarea-action-emails').on('click', function(){
        //iframe层-父子操作

        var area_w=$(window).width()-700;
        var area_t=$("#site-navbar-collapse").outerHeight(true);
        var area_h=$(window).height();
        //console.info(area_t);
        layer.open({
            type: 2,
            area: ['700px', area_h+'px'],
            fixed: true, //不固定
            maxmin: false,
            scrollbar: false,
            shadeClose: true,
            offset: ['0px',area_w+'px'],
            move: false,
            shade: 0.1,
            anim: 3,
            closeBtn: 0,
            title: false,
            content: $(this).attr("alter-url"),
            cancel: function(){
                //右上角关闭回调
                layer.closeAll();
                //return false 开启该代码可禁止点击该按钮关闭
            }
        });


    });


    $(".has-sub").click(function(){
        if($(this).hasClass("open")) {
            $(".has-sub").removeClass("open");
        }else {
            $(this).addClass("open");
        }
    });
    // Ticket Rating Click Handler
    jQuery('.ticket-reply .zhiliaoyun_rating .wb-star').click(function(event) {
        window.location = 'viewticket.php?tid=' + jQuery(this).parent('.zhiliaoyun_rating').attr("ticketid") + '&c=' + jQuery(this).parent('.zhiliaoyun_rating').attr("ticketkey") + '&rating=rate' + jQuery(this).parent('.zhiliaoyun_rating').attr("ticketreplyid") + '_' + jQuery(this).attr("rate");
    });
    jQuery(".ticket-reply .zhiliaoyun_rating .wb-star").hover(
        function(){
            jQuery(".ticket-reply .zhiliaoyun_rating .wb-star").removeClass("orange-600");
            var star=$(this).index();
            for(var x=0;x<=star;x++){
                jQuery(".ticket-reply .zhiliaoyun_rating .wb-star").eq(x).addClass("orange-600");
            }
        },function(){
            jQuery(".ticket-reply .zhiliaoyun_rating .wb-star").removeClass("orange-600");
        }
    );
    /**
     * Append additional file upload input field.
     */
    function extraTicketAttachment() {
        jQuery("#fileUploadsContainer").append('<input type="file" name="attachments[]" class="form-control" />');
    }
</script>

<script type="text/javascript">
    $(function(){
        $("#user-menu li:first").before("<li><a href=\"/index.php?m=clientloginemail&no=email\" class=\"settings\">登录不发邮件</a></li>");
    });

</script>


</body>
</html>


  


