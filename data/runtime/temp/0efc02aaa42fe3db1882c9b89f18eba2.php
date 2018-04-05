<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"D:\phpStudy\PHPTutorial\WWW\mofee\public/../data/template/user/index\index.html";i:1521298371;s:75:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\user\common\index-head.html";i:1521335864;s:77:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\user\common\login-script.html";i:1521352255;s:75:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\user\common\index-foot.html";i:1520504522;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="keywords" content="Mofee聚合支付，免签聚合支付平台,提供安全快捷的支付方式" />
    <meta name="description" content="Mofee聚合支付，免签聚合支付平台,提供安全快捷的支付方式" />
    <link rel="shortcut icon" href="/favicon.ico"/>
    <link rel="bookmark" href="/favicon.ico"/>
    <meta content="" name="pgv">

    <title>商户平台登陆 - 免签聚合支付平台｜提供安全快捷的支付方式</title>

    <link href="/static/user/css/global_mod_min.css?t=201801052358" rel="stylesheet" type="text/css" />

    <link href="/static/user/css/index_min.css?t=201801052358" rel="stylesheet" type="text/css" />

    <link href="/static/user/css/wiki_min.css?t=201801052358" rel="stylesheet" type="text/css" />

    <link href="/static/user/css/style.css?t=201801052358" rel="stylesheet" type="text/css" />

    <script src="/static/user/js/jquery-1.9.1.js?t=201801052358"></script>

</head>
<body class="index apply all" data-page="index">
<style >
    .mod-topbar {
        color: #878787;
        height: 30px;
        line-height: 30px;
        background-color: #f5f5f5;
        border-bottom: 1px solid #ebebeb;
        font-size: 12px;
        position: relative;
        z-index: 1;
    }
    .mod-topbar .layout {
        height: 100%;
    }
    .layout {
        width: 1200px;
        margin: 0 auto;
    }
    .mod-topbar-links {
        float: left;
    }
    .mod-topbar-right {
        float: right;
        height: 30px;
    }
    .mod-topbar-links a {
        padding: 0 10px;
        line-height: 1;
        vertical-align: inherit;
    }
    .mod-topbar a {
        color: #878787;
    }
    .mod-topbar-right .user {
        height: 30px;
        border: 1px solid transparent;
        border-top: none;
        position: relative;
    }
    .mod-topbar-right .name {
        color: #323232;
    }
    .mod-topbar-item {
        display: inline-block;
        vertical-align: top;
        padding: 0 12px;
        cursor: pointer;
    }
</style>
<div class="g-wrapper">
    <div class="mod-topbar" id="jmod_topbar">
        <div class="layout clearfix">
            <div class="mod-topbar-links">
                <a href="#" class="mod-topbar-item">欢迎使用Mofee聚合支付商户平台！</a>
            </div>
            <div class="mod-topbar-right">
                <?php if($userInfo): ?>
                <a href="/user?action=wellcome" target="_blank" class="mod-topbar-item">管理中心</a>
                <a href="/user/order?action=details" target="_blank" class="mod-topbar-item">我的订单</a>
                <div class="user mod-topbar-item" style="">
                    <p class="name">
                        <span><a href="/user?action=index" target="_blank">ID:<?php echo $uid; ?></a></span>
                        <i></i>
                    </p>
                </div>
                <?php else: ?>
                <a href="#" class="mod-topbar-item">欢迎您！<?php echo(time()) ;?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- 头部 -->
    <div class="g-header">
        <div class="header-wrap clearfix">
            <h1 class="header-logo">
                <a id="header_logo" class="header-logo-a" href="javascript:;">Mofee 聚合支付</a>
                <span class="ico-beta"></span>
            </h1>
            <ul class="header-nav">
                <li id="header_comp_name_li" class="header-nav-li header-nav-user js-mouse-event" data-class="on">
                    您好，<span id="header_comp_name"></span>
                    <a data-handler="logoutEvent" class="header-nav-a" href="javascript:;">退出</a>
                    <span class="v-line">|</span>
                </li>
                <li class="header-nav-li header-nav-apply">
                    <a href="/regon?action=access" class="header-nav-a">申请接入</a>
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

<div class="banner">
    <div class="banner-wrap">
        <div class="banner-wrap-inner">
            <!-- 未登录 [[ -->
            <form class="login-form hide" method="post" role="form" id="sp_login">
                <h2 class="login-title">商户登录</h2>
                <div id="err_id" class="form-err"></div>
                <div id="chrome_err_id" class="login-err hide"><span class="ico-info-s"></span>
                    当前浏览器为Chrome最新版，部分控件暂不支持。请更换IE浏览器，给你带来的不便深表歉意！</div>
                <fieldset>

                    <div class="login-form-line clearfix">
                        <label class="label"><span class="ico-username"><!-- 用户名 --></span></label>
                        <div class="element">
                            <div class="">
                                <label class="label-text-tips" for="account">商户号或操作员账号</label>
                                <input class="text" type="text" placeholder="" name="account" id="account" />
                            </div>
                        </div>
                    </div>

                    <div class="login-form-line clearfix">
                        <label class="label"><span class="ico-password"><!-- 密码 --></span></label>
                        <div class="element">
                            <div class=""><!-- 需要下载控件加class "show-download" -->
                                <label class="label-text-tips" for="password">登录密码</label>
                                <input class="text" type="password" placeholder="" name="password" id="password" />
                            </div>
                        </div>
                    </div>

                    <div class="form-btn-line">
                        <a id="js_submit" class="mod-btn ext-btn-blue js-btn-loading" href="javascript:login();">登录</a>
                    </div>

                    <div class="link">
                        没有商户号？ <a href="/regon?action=access">立即接入</a><span class="v-line">|</span> <a href="javascript:;" data-handler="resetPassEvent">忘记密码</a>
                    </div>

                </fieldset>
            </form>
            <!-- 未登录 ]] -->

            <!-- 已登录 [[ -->
            <form class="login-form logined hide" method="post" action="#" id="pu_login">
                <h1 class="login-name" id="login_name"></h1>
                <div class="login-desc">您正在使用的商户平台登录账号为：</div>
                <div class="login-desc clearfix"><span class="login_uin" id="login_uin"></span>
                    <a class="change" href="/user/logout?action=out" data-handler="logoutEvent">更换账号</a></div>
                <div class="form-btn-line">
                    <a class="mod-btn ext-btn-blue js-loading-btn" href="/user?isLogin" data-handler="autoLoginEvent">进入我的账户</a>
                </div>
            </form>
            <!-- 已登录 ]] -->

            <script type="text/javascript">
                (function(){

                        //获取当前登录时间
                        function time(){
                            var e="",c=new Date(),d=parseInt(c.getHours(),10);
                            if(d>=0&&d<8){
                                e="早上"
                            }else{
                                if(d>=8&&d<12){
                                    e="上午"
                                }else{
                                    if(d>=12&&d<18){
                                        e="下午"
                                    }else{
                                        if(d>=18&&d<24){
                                            e="晚上"
                                        }
                                    }
                                }
                            }
                            return e
                        }

                        //判断登录
                        function a(c,d){
                            c.className=c.className.replace(new RegExp("(?:^|\\s)"+d+"(?!\\S)","g"),"")
                        }
                        var G_uid = "<?php echo $uid ;?>";
                        if(G_uid && G_uid !== ''){
                            a(
                                document.getElementById("pu_login"),"hide");
                                document.getElementById("login_uin").innerHTML= G_uid ||"";
                                document.getElementById("login_name").innerHTML=time()+"好！"
                        }else{
                            a(
                                document.getElementById("sp_login"),"hide")
                        }
                    }
                )();</script>
        </div>
    </div>
</div>
<div class="g-container">
    <!-- 集成支付方式 [[ -->
    <div class="section section-pay">
        <div class="section-wrap">
            <h2 class="title">集成支付方式</h2>
            <div class="title-border"></div>
            <div class="items">
                <ul class="clearfix">
                    <li class="item">
                        <img style="margin-top: 20px; width: 90px;height: 90px;" src="/static/user/images/alipay.png" />
                        <h3 class="item-title">支付宝支付</h3>
                        <p class="item-desc item-desc-0">支持支付宝扫码支付以及支付宝手机端支付。</p>
                    </li>
                    <li class="item">
                        <img style="margin-top: 20px; width: 90px;height: 90px;" src="/static/user/images/wxpay.png" />
                        <h3 class="item-title">微信支付</h3>
                        <p class="item-desc item-desc-0">用户打开微信“扫一扫”，扫描商户的二维码后完成支付。</p>
                    </li>
                    <li class="item">
                        <img style="margin-top: 20px; width: 90px;height: 90px;" src="/static/user/images/qqpay.png" />
                        <h3 class="item-title">QQ钱包支付</h3>
                        <p class="item-desc item-desc-0">用户打开机QQ“扫一扫”手，可唤起QQ钱包完成支付。</p>
                    </li>
                    <li class="item">
                        <img style="margin-top: 20px; width: 90px;height: 90px;" src="/static/user/images/other.png" />
                        <h3 class="item-title">银联支付</h3>
                        <p class="item-desc item-desc-0">开发中......</p>
                    </li>
                </ul>
            </div>
            <div class="btn-line">
                <a class="btn" href="/regon?action=access">立即接入 &gt;</a>
            </div>
        </div>
    </div>
    <!-- 集成支付方式 ]] -->
</div>

<script type="text/javascript">
    $(function(){
        document.onkeydown = function(e)
        {
            var ev = document.all ? window.event : e;
            if(ev.keyCode==13)
            {
                login();
            }
        }
    });

    //登陆
    function login() {
        var account = $.trim($("#account").val());
        if (account == null || account == "") {
            $("#err_id").html("请输入账户");
            return;
        }
        var password = $("#password").val();
        if (password == null || password == "") {
            $("#err_id").html("请输入密码");
            return;
        }
        var postData = {
            "suffix" : "e_login",
            "name" : account,
            "pass" : password
        };

        $("#js_submit").attr("disabled", "disabled");
        $("#js_submit").html("登录中...");
        $("#err_id").hide();
        $.ajax({
            type : 'POST',
            dataType : 'json',
            url : '/user/dologin?action=login',
            data : postData,
            success : function(result) {

                if (result.code == '1') {
                    $("#js_submit").html("登录成功");
                    setTimeout(function () {
                        window.location.href = "/user";
                    },1000)
                } else {
                    $("#js_submit").removeAttr("disabled");
                    $("#js_submit").html("登录");
                    //爆出错误
                    $("#err_id").show();
                    $("#err_id").html(result.msg);
                }
            }
        })
    }

</script>
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

