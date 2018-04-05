<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\phpStudy\PHPTutorial\WWW\mofee\public/../data/template/user/user\apply.html";i:1520672604;s:74:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\user\common\user-head.html";i:1521352260;s:75:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\user\common\index-foot.html";i:1520504522;}*/ ?>
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
        <span class="title">结算</span>
    </h2>
    <div class="section-main js-content-loading show-loading-conten" id="js_section">
        <div class="mod-form ext-form-info new-form-info">
            <h3 class="mod-title ext-subtitle-border">
                <span class="title">基础信息</span>
            </h3>
        <div class="g-row">
            <div class="form-line g-col-11">
                <label class="form-label float-l">商户ID：</label>
                <div class="form-element float-l">
                    <div class="form-info form-info-0" title="<?php echo $userInfo['uid']; ?>"><?php echo $userInfo['uid']; ?></div>
                </div>
            </div>
            <div class="form-line g-col-11">
                <label class="form-label float-l">商户名称：</label>
                <div class="form-element float-l">
                    <div class="form-info form-info-2" title="<?php echo $userInfo['merchant']; ?>"><?php echo $userInfo['merchant']; ?></div>
                </div>
            </div>
        </div>
        <div class="g-row">
            <div class="form-line g-col-11">
                <label class="form-label float-l">结算方式：</label>
                <div class="form-element float-l">
                    <div class="form-info"><?php echo $userInfo['payment']; ?></div>
                </div>
            </div>
            <div class="form-line g-col-11">
                <label class="form-label float-l">结算账号：</label>
                <div class="form-element float-l">
                    <div class="form-info"><?php echo $userInfo['account']; ?></div>
                </div>
            </div>
        </div>
    </div>
        <h3 class="mod-title ext-subtitle-border">
            <span class="title">申请结算</span>
        </h3>
        <div class="mod-form ext-form-large new-form-refund">
            <form method="post" >
                <!--这行别删，修复ie7bug:去掉的话第一行会换行-->
                <div class="refund-other" id="js_section_other">
                    <div class="form-line g-row">
                        <label class="form-label g-col-9">提现金额：</label>
                        <div class="form-element form-element-height g-col-15">
                            <div class="form-element-inner">
                                <div class="show-text-tips">
                                    <input id="amount" name="amount" placeholder="可结算金额<?php echo $wallet['total']; ?>元" class="form-text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-line g-row">
                        <label class="form-label g-col-9">验证码：</label>
                        <div class="form-element g-col-15">
                            <span class="form-text-tips" id="code-tip">请输入验证码</span>
                            <input name="code" class="form-text" id="code">
                            <a href="javascript:getCode();" class="drop_link">获取验证码</a>
                        </div>
                    </div>
                    <div class="form-line-btn g-row">
                        <div class="form-element g-col-15 g-col-offset-9">
                            <button class="mod-btn ext-btn-blue" type="button" onclick="settle()" >确定提现</button>
                        </div>
                    </div>
                </div>
            </form>
            <script type="text/javascript">
                $(function(){
                    document.onkeydown = function(e)
                    {
                        var ev = document.all ? window.event : e;
                        if(ev.keyCode==13)
                        {
                            settle();
                        }
                    }
                });

                //验证码
                function getCode() {
                    $.ajax({
                        type : 'GET',
                        dataType : 'json',
                        url : '/api/sendmail?action=getcode',
                        success : function(result) {
                            if (result.code == '1') {
                                layer.msg('发送成功',{icon:1});
                            } else {
                                layer.msg(result.msg,{icon:2})
                            }
                        }
                    })
                }

                //结算
                function settle() {
                    var amount = $("#amount").val();
                    if (amount == null || amount == ""|| amount == 0) {
                        layer.msg('请输入结算金额',{icon:2})
                        return;
                    }
                    var code = $("#code").val();
                    if (code == null || code == "") {
                        layer.msg('请输入验证码',{icon:2})
                        return;
                    }
                    var postData = {
                        "amount" : amount,
                        "code" : code
                    };
                    $.ajax({
                        type : 'POST',
                        dataType : 'json',
                        url : '/user/fund/apply?action=settle',
                        data : postData,
                        success : function(result) {
                            if (result.code == '1') {
                                layer.msg('申请结算成功',{icon:1});
                                setTimeout(function () {
                                    //跳转结算记录
                                    window.location.href = "/user/fund/settlement?action=record";
                                }, 1000);
                            } else {
                                layer.msg(result.msg,{icon:2})
                            }
                        }
                    })
                }

            </script>
        </div>
    </div>
        <div class="note" id="note">
            <span>注：</span>
            <ol>
                <li>1、结算金额=支付净额-手续费金额，划账金额指同一交易起止日期下的划账金额总和。</li>
                <li>2、结算金额从结算日起24小时内到账。</li>
                <li>例：结算100元整，平台收取+-1.20%；第三方平台收取0.60%。   =》 100-100*0.012=98.8</li>
            </ol>
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