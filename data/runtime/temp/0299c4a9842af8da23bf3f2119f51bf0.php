<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"D:\phpStudy\PHPTutorial\WWW\mofee\public/../application/admin\view\index\settle.html";i:1519358500;s:73:"D:\phpStudy\PHPTutorial\WWW\mofee\application\admin\view\common\head.html";i:1520611854;s:73:"D:\phpStudy\PHPTutorial\WWW\mofee\application\admin\view\common\foot.html";i:1520597035;}*/ ?>
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

<link rel="stylesheet" href="/static/ziliao/css/dataTables.bootstrap.css">
<link rel="stylesheet" href="/static/ziliao/css/dataTables.fixedHeader.css">
<link rel="stylesheet" href="/static/ziliao/css/dataTables.responsive.css">
<link rel="stylesheet" href="/static/ziliao/css/datatable.css">
<!--Page-->
<div class="page">
    <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel">
            <header class="panel-heading">
                <div class="panel-actions"></div>
                <h3 class="panel-title">我的结算记录(<?php echo $settleCount; ?>)</h3>
            </header>
            <div class="panel-body">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="dataTables_length" id="DataTables_Table_0_length">
                            </div></div>
                        <div class="col-sm-6"><div id="DataTables_Table_0_filter" class="dataTables_filter">
                            </div></div></div>
                    <div class="row">
                        <div class="col-sm-12"><table class="table table-hover dataTable table-striped w-full table_hosting_remark no-footer" data-plugin="dataTable" data-order="[[0,&quot;desc&quot;],[2,&quot;desc&quot;]]" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead>
                    <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="descending" aria-label="状态: 升序" style="width: 65px;">状态</th>
                        <th class="sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="产品/域名: 升序" style="width: 194px;">结算单号</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="账单周期: 升序" style="width: 76px;">结算金额</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="IP地址: 升序" style="width: 118px;">结算方式</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="价格: 升序" style="width: 86px;">创建时间/完成时间</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="操作: 升序" style="width: 106px;">操作</th></tr>
                    </thead>
                    <tbody>
                    <?php foreach($settleData as $vo): ?>
                    <tr role="row" class="odd">
                        <td class="work-status sorting_1">
                            <?php if($vo['status'] == 1): ?>
                            <span class="tag tag-warning">结算申请中</span>
                            <?php elseif($vo['status'] == 2): ?>
                            <span class="tag tag-success">结算完成</span>
                            <?php else: ?>
                            <span class="tag tag-danger">支付失败</span>
                            <?php endif; ?>
                        </td>
                        <td><?php echo $vo['onum']; ?></td>
                        <td>￥ <b><?php echo $vo['amount']; ?></b></td>
                        <td> <b><?php echo $vo['payment']; ?></b></td>
                        <td><?php echo $vo['create_time']; ?><br><?php echo $vo['update_time']; ?></td>
                        <td><a href="/user/clientarea.php?action=productdetails"><button class="btn btn-outline btn-success ">删除订单</button></a>

                    </tr>
                    <?php endforeach; ?>
                    </tbody>

                </table>
                </div>
                </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">共有1 项，正在展示第 1 到 1 项</div>
                        </div>
                        <div class="col-sm-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                </div></div></div></div>

            </div>

        </div>
        <script src="/static/ziliao/js/jquery.dataTables.js"></script>
        <script src="/static/ziliao/js/dataTables.fixedHeader.js"></script>
        <script src="/static/ziliao/js/dataTables.bootstrap.js"></script>
        <script src="/static/ziliao/js/dataTables.responsive.js"></script>
        <script src="/static/ziliao/js/dataTables.tableTools.js"></script>
        <script src="/static/ziliao/js/babel-external-helpers.js"></script>
    </div>
</div>
<!--//Page-->


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