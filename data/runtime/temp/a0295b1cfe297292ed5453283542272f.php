<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\phpStudy\PHPTutorial\WWW\mofee\public/../data/template/user/user\trade.html";i:1520684145;s:74:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\user\common\user-head.html";i:1521352260;s:75:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\user\common\index-foot.html";i:1520504522;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="keywords" content="Mofee聚合支付，免签聚合支付平台,提供安全快捷的支付方式" />
    <meta name="description" content="Mofee聚合支付，免签聚合支付平台,提供安全快捷的支付方式" />
    <link rel="shortcut icon" href="/favicon.ico"/>
    <link rel="bookmark" href="/favicon.ico"/>
    <title>Mofee聚合支付 - 免签聚合支付平台｜提供安全快捷的支付方式</title>
    <link href="/static/user/css/global_mod_min.css?t=201801052358" rel="stylesheet" type="text/css" />
    <link href="/static/user/css/all_min.css?t=201801052358" rel="stylesheet" type="text/css" />
    <link href="/static/user/css/style.css?t=201801052358" rel="stylesheet" type="text/css" />
    <script src="/static/user/js/jquery-1.9.1.js?t=201801052358"></script>
</head>
<body class="account all unsettled" id="all">
<div class="g-wrapper">
    <!-- 头部 -->
    <div class="g-header">
        <div class="header-wrap clearfix">
            <h1 class="header-logo">
                <a id="header_logo" class="header-logo-a" href="javascript:;">Mofee 聚合支付</a>
                <span class="ico-beta"></span>
            </h1>
            <ul class="header-nav">
                <li id="header_comp_name_li" class="header-nav-li header-nav-user js-mouse-event" data-class="on">
                    您好，<span id="header_comp_name"><?php echo $userInfo['merchant']; ?></span>
                    <a data-handler="logoutEvent" class="header-nav-a" href="/user/logout?action=true">退出</a>
                    <span class="v-line">|</span>
                </li>
                <li class="header-nav-li header-nav-develop">
                    <a href="/support/doc" class="header-nav-a" target="_blank">开发文档</a>
                    <span class="v-line">|</span>
                </li>
                <li class="header-nav-li header-nav-help">
                    <a href="/support/help" class="header-nav-a" target="_blank">帮助中心</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- 头部 //END -->
    <div class="g-container">
        <div class="g-sidebar" id="g_sidebar">
            <ul class="sidebar-ul" id="sidebar_ul">
                <li class="sidebar-li <?php if(\think\Request::instance()->action() == 'index'): ?>sidebar-on<?php endif; ?>" id="sidenav_all">
                    <a class="sidebar-a" href="/user?action=wellcome"><span class="iconfont icon-all"></span>总览</a>
                </li>
                <li class="sidebar-li <?php if(\think\Request::instance()->action() == 'trade'): ?>sidebar-on<?php endif; ?>" id="sidenav_trade">
                    <a data-handler="sidebarEvent" class="sidebar-droped" href="javascript:;"><span class="iconfont icon-trade"></span>交易管理<span class="sidebar-arr"><span class="sidebar-arr-b"></span></span></a>
                    <div class="sidebar-drop">
                        <a class="sidebar-drop-a <?php if(\think\Request::instance()->action() == 'trade'): ?>on<?php endif; ?>"  href="/user/trade?action=list">支付订单查询</a>
                    </div>
                </li>
                <li class="sidebar-li <?php if(\think\Request::instance()->action() == 'apply' || \think\Request::instance()->action() == 'settle'): ?>sidebar-on<?php endif; ?>" id="sidenav_fund">
                    <a data-handler="sidebarEvent" class="sidebar-droped" href="javascript:;"><span class="iconfont icon-fund"></span>资金管理<span class="sidebar-arr"><span class="sidebar-arr-b"></span></span></a>
                    <div class="sidebar-drop">
                        <a class="sidebar-drop-a <?php if(\think\Request::instance()->action() == 'apply'): ?>on<?php endif; ?>" href="/user/fund/apply?action=do">申请结算</a>
                        <a class="sidebar-drop-a <?php if(\think\Request::instance()->action() == 'settle'): ?>on<?php endif; ?>" href="/user/fund/settlement?action=record">结算记录</a>
                    </div>
                </li>
                <li class="sidebar-li <?php if(\think\Request::instance()->action() == 'account' || \think\Request::instance()->action() == 'security'): ?>sidebar-on<?php endif; ?>" id="sidenav_account">
                    <a data-handler="sidebarEvent" class="sidebar-droped" href="javascript:;"><span class="iconfont icon-account"></span>账户管理<span class="sidebar-arr"><span class="sidebar-arr-b"></span></span></a>
                    <div class="sidebar-drop">
                        <a class="sidebar-drop-a <?php if(\think\Request::instance()->action() == 'account'): ?>on<?php endif; ?>"  href="/user/account?action=details">账户信息</a>
                        <a class="sidebar-drop-a <?php if(\think\Request::instance()->action() == 'security'): ?>on<?php endif; ?>" href="/user/account/api_cert?action=setAk">API安全</a>
                    </div>
                </li>
            </ul>
        </div>
        <script type="text/javascript">
            $(function(){
                $('.sidebar-li>a').on('click',function(){
                    if ($(this).next().css('display') == "none") {
                        $('.sidebar-li').children('ul').slideUp(300);
                        $(this).next('ul').slideDown(300);
                        $(this).parent('li').addClass('sidebar-on on').siblings('li').removeClass('sidebar-on');
                    }else{
                        $(this).next('ul').slideUp(300);
                        $('.sidebar-li.sidebar-on .on').removeClass('sidebar-on');
                    }
                });
            });
        </script>
    <div class="g-content" id="content">
    <h2 class="mod-title">
        <span class="title">支付订单查询</span>
    </h2>
    <div class="section-main js-content-loading">
        <!-- 普通使用的查询表单结构 [[ -->
        <div class="mod-form ext-form-query" id="normal_role">
            <!--这行别删，修复ie7bug:去掉的话第一行会换行-->
            <div class="g-row g-high-zindex">
                <div class="form-line g-col-12">
                    <div class="g-row">
                        <label class="form-label g-col-4">支付方式 :</label>
                        <div class="form-element g-col-8">
                            <div class="form-element-inner show-text-tips">
                                <input class="form-text" type="text" id="type_id">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-line g-col-12">
                    <div class="g-row">
                        <label class="form-label g-col-4">订单号 :</label>
                        <div class="form-element g-col-8">
                            <div class="form-element-inner show-text-tips">
                                <input class="form-text" type="text" id="trans_id">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-btn-line g-row">
                <div class="form-element g-col-3 g-col-offset-3">
                    <a class="mod-btn ext-btn-blue-s" data-handler="searchEvent">查&nbsp;&nbsp;&nbsp;询</a>
                </div>
            </div>
        </div>
        <!-- 普通使用的查询表单结构 ]] -->

        <div class="mod-table ext-table-gray js-page-loading show-table-nodata" id="table_content"><!-- 无数据加class "show-table-nodata" -->
            <table>
                <caption>退款订单查询</caption>
                <thead>
                <tr><th class="col1" scope="col">状态</th>
                    <th scope="col">支付订单号/商户订单号</th>
                    <th scope="col">支付商品</th>
                    <th class="col14" scope="col">订单金额(元)</th>
                    <th class="col12" scope="col">支付方式</th>
                    <th class="col12" scope="col">交易时间/完成时间</th>
                </tr></thead>
                <tbody id="tbody">
                <?php foreach($orderData as $vo): ?>
                <tr>
                    <td>
                        <?php if($vo['status'] == 1): ?>
                        <b>下单完成</b> <?php elseif($vo['status'] == 2): ?><b>支付完成</b> <?php else: ?> <b>支付失败</b>
                        <?php endif; ?>
                    </td>
                    <td><?php echo $vo['pay_id']; ?><br><?php echo $vo['trade_no']; ?></td>
                    <td><?php echo $vo['subject']; ?></td>
                    <td>￥ <b><?php echo $vo['amount']; ?></b></td>
                    <td> <?php if($vo['method'] == 'WXPAY'): ?><b>微信支付</b><?php else: ?><b>支付宝</b> <?php endif; ?></td>
                    <td><?php echo $vo['create_time']; ?><br><?php echo $vo['update_time']; ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <?php if(empty($orderData) || (($orderData instanceof \think\Collection || $orderData instanceof \think\Paginator ) && $orderData->isEmpty())): ?>
            <div class="table-nodata">
                <div class="table-nodata-wrap">
                    <span class="ico-info"></span><span id="table_tips">暂无数据</span>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <!-- 翻页[[ -->
        <?php echo $orderData->render(); ?>
        <!-- 翻页]] -->
    </div>
</div>

</div>
</div>
<div class="g-footer" id="footer">
    <ul class="footer-ul clearfix">
        <li class="footer-li">
            <a href="/about.html" class="footer-a" target="_blank">关于Mofee</a>
        </li>
        <li class="footer-li">
            <a href="mailto:service@98imo.com" class="footer-a">联系邮箱</a>
        </li>
        <li class="footer-li">
            <a href="/qpay_mch_platform.shtml" class="footer-a" target="_blank">商户平台使用协议</a>
        </li>
    </ul>
    <p class="footer-desc">Powered By Mofee . Copry right © 2018 All Rights Reserved. 广西润轩商务信息咨询有限公司.</p>
</div>
<script src="/static/layer/layer.js?t=<?php echo date('Ymdhis'); ?>"></script>
</body>
</html>