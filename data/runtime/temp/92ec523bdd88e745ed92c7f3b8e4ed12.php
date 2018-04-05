<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"D:\phpStudy\PHPTutorial\WWW\payment\public/../data/template/index/index\cardPay.html";i:1521291699;s:76:"D:\phpStudy\PHPTutorial\WWW\payment\data\template\index\common\pay-head.html";i:1521292063;s:78:"D:\phpStudy\PHPTutorial\WWW\payment\data\template\index\common\index-foot.html";i:1521290873;}*/ ?>
<!DOCTYPE html>
<html ng-app="moduleApp">
<head>

    <meta charset="UTF-8">
    <title>聚合支付平台</title>
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" href="/static/ipay/css/bootstrap.css?v=e9f7fbe732">
    <link rel="stylesheet" href="/static/ipay/css/bootstrap-datetimepicker.min.css?v=fa0a2cb4d6">
    <!--<link rel="stylesheet" href="/static/ipay/css/jquery.fullpage.css?v=01e56b9db9">-->
    <link rel="stylesheet" href="/static/ipay/css/jquery.datetimepicker.css?v=b805db3bb4">
    <link rel="stylesheet" href="/static/ipay/css/common.min.css?v=e572ee527d">
    <link rel="stylesheet" href="/static/ipay/css/doc.css?v=e572ee527d">
    <!--<link rel="stylesheet" href="/static/ipay/css/common.css?v=58e750717f">-->
    <!--<link rel="stylesheet" href="/static/ipay/css/style.css?v=9b80c55e0f">-->
    <!--<link rel="stylesheet" href="/static/ipay/css/viewer.css?v=c6163a968e">-->
    <link rel="icon" href="image/favicon.ico" mce_href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="image/favicon.ico" mce_href="/favicon.ico" type="image/x-icon">
    <script src="/static/ipay/js/jquery.min.js?v=64ec1b9cff"></script>
    <script src="/static/ipay/js/jquery.upload2.js?v=d4c20b8fb4"></script>
    <script src="/static/ipay/js/jquery.jqprint-0.3.js?v=b9a1a1c4f2"></script>
    <script src="/static/ipay/js/angular.min.js?v=6902fa79ea"></script>
    <script src="/static/ipay/js/angular-animate.js?v=8ae302ffa0"></script>
    <script src="/static/ipay/js/angular.pagination.js?v=363c08b621"></script>
    <script src="/static/ipay/js/angular.pagination.ali.js?v=32b53650c7"></script>
    <script src="/static/ipay/js/angular-ui-router.js?v=835626abd5"></script>
    <script src="/static/ipay/js/ocLazyLoad.min.js?v=0ed201951d"></script>
    <script src="/static/ipay/js/angular-file-upload.js?v=bb1163b135"></script>
    <script src="/static/ipay/js/highcharts.js?v=59c79c59e5"></script>
    <script src="/static/ipay/js/highcharts-ng.js?v=80d581bce6"></script>
    <script src="/static/ipay/js/angular-sanitize.min.js?v=c607f6d1f2"></script>
    <script src="/static/ipay/js/bootstrap.min.js?v=04c84852e9"></script>
    <script src="/static/ipay/js/bootstrap-datetimepicker.js?v=e273734e21"></script>
    <script src="/static/ipay/js/bootstrap-datetimepicker.zh-CN.js?v=06217835bc"></script>
    <script src="/static/ipay/js/md5.js?v=ee3a962f93"></script>
    <script src=/static/ipay/js/viewer.js?v=0f1871573a></script>
    <!--指令js合并-->
    <script src="/static/ipay/js/mainDirective.js?v=0fa8b95733"></script>
    <!--指令js合并-->
    <script src="/static/ipay/js/mchInfo.js?v=dcd800948c"></script>
    <!--获取省市信息的factory-->
    <script src="/static/ipay/js/factory.js?v=c5282ed1a0"></script>
    <!--检查是否在登录之外的页面-->
    <script src="/static/ipay/js/filter.js?v=715362c55c"></script>
    <!--路径-->
    <script src="/static/ipay/js/router.js?v=e10ef7d232"></script>
</head>
<body ng-controller="myApp" class="ng-scope">
<!-- uiView: -->
<div ui-view="" class="outer-content ng-scope" id="main_content" style="">
    <div class="container-fluid padding-none pay-box-wrap ng-scope">

        <?php if(\think\Request::instance()->action() == 'pcPay'): ?>
            <div class="product-top pc-pay-top">
        <?php elseif(\think\Request::instance()->action() == 'phonePay'): ?>
            <div class="product-top phone-pay-top">
        <?php elseif(\think\Request::instance()->action() == 'scanPay'): ?>
            <div class="product-top pay-top-8">
        <?php elseif(\think\Request::instance()->action() == 'cardPay'): ?>
            <div class="product-top pay-top-6">
        <?php endif; ?>

            <!-- uiView: developerTopMenu -->
            <div ui-view="developerTopMenu" class="ng-scope">
                <div class="header clearfix navbar-product-white navbar_box_wrap ng-scope navbar-product-def" ng-class="{'navbar-product-def': isProductDef, 'navbar-product-dark': isProductDark,'header-large':isMenuHeight}">
                    <div class="header-logoDiv container">
                        <div class="logo-div">
                            <a onclick="jump(this)" href="javascript:void(0)">
                                <div class="header-homeImg">
                                </div>
                                <div class="header-logoImg">
                                </div>
                            </a>
                            <div class="header-logoIcon">
                            </div>
                            <span class="header-location ng-binding">PC网页支付</span>
                        </div>
                        <div class="son-header-menu header-menu-links">
                            <div class="menu-product">
                                <span class="h5">
                                    产品
                                     <div class="triangle"></div>
                                </span>
                                <p class="header-menu-borderP">
                                </p>
                                <div class="menu-product-content menu-hidd">
                                    <div class="menu-product-list menu-list">
                                        <div class="develop-center-menu">
                                            <dl class="">
                                                <dt>支付服务</dt>
                                                <dt><a ui-sref="phonePay" href="/phonePay">手机网页支付</a></dt>
                                                <dt><a ui-sref="pcPay" href="/pcPay">PC网页支付</a></dt>
                                                <dt><a ui-sref="scanPay" href="/scanPay">扫码支付</a></dt>
                                                <dt><a ui-sref="cardPay" href="/cardPay">卡牌支付</a></dt>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-exploit">
                                <span class="h5">
                                    开发者中心
                                    <div class="triangle"></div>
                                </span>
                                <p class="header-menu-borderP">
                                </p>
                                <div class="menu-exploit-content menu-hidd">

                                    <div class="menu-exploit-list menu-list">
                                        <dl class="develop-center-menu">
                                            <dt><a ui-sref="joinPay">接入支付</a></dt>
                                            <dt><a ui-sref="userScan" href="/userScan">API文档</a></dt>
                                            <dt><a ui-sref="sdkDownload" href="/sdkDownload">SDK下载</a></dt>
                                            <dt><a ui-sref="demoExperience">Demo体验</a></dt>
                                        </dl>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-mch">
                                <span class="h5"><a onclick="jump(this)" href="javascript:void(0)">合作案例</a></span>
                                <p class="header-menu-borderP">
                                </p>
                            </div>

                            <div class="menu-help">
                                <span class="h5"><a onclick="jump(this)" href="javascript:void(0)" >帮助</a></span>
                                <p class="header-menu-borderP">
                                </p>
                            </div>

                            <div class="menu-login-btn menu-login-btn-first">
                                <span class="h5"><a ui-sref="register" href="/register">注册</a></span>
                                <p class="header-menu-borderP header-menu-borderP-register">
                                </p>
                            </div>
                            <div class="menu-login-btn margin-left-none">
                                <span class="h5"><a ui-sref="login" href="/login">登录</a></span>
                                <p class="header-menu-borderP header-menu-borderP-login">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="phone_nav navbar navbar-default  navbar-inverse" role="navigation">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                                    <span class="sr-only">切换导航</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" style="color:#000" onclick="jump(this)" href="javascript:void(0)" data="http://www.ipaynow.cn/">
                                    <img style="padding-top:32px;" src="logo_v1.svg" alt="Mofee聚合支付">
                                </a>
                            </div>
                            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            产品 <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>支付服务</li>
                                            <li><a ui-sref="appPay" href="/appPay">手机App支付</a></li>
                                            <li><a ui-sref="phonePay" href="/phonePay">手机网页支付</a></li>
                                            <li><a ui-sref="pcPay" href="/pcPay">PC网页支付</a></li>
                                            <li><a ui-sref="officialPay" href="/officialPay">公众号支付</a></li>
                                            <li><a ui-sref="scanPay" href="/scanPay">商家扫码</a></li>
                                            <li><a ui-sref="userScanPay" href="/userScanPay">用户扫码</a></li>
                                            <li><a ui-sref="cardPay" href="/cardPay">卡牌支付</a></li>
                                            <li><a ui-sref="capacityPosPay" href="/capacityPosPay">智能POS支付</a></li>

                                            <li>增值服务</li>
                                            <li><a ui-sref="auth" href="/auth">鉴权服务</a></li>
                                            <li><a ui-sref="noteServe" href="/noteServe">短信服务</a></li>
                                            <li>更多服务</li>
                                            <li><a ui-sref="bankCollaborate" href="/bankCollaborate">银行合作</a></li>
                                            <li><a ui-sref="account" href="/account">二类账户</a></li>
                                            <li><a ui-sref="crossPay" href="/crossPay">跨境支付</a></li>
                                            <!--<li><a href="#">卡+服务</a></li>-->
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            开发者中心 <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>API文档</li>
                                            <li><a ui-sref="userScan" href="/userScan">用户扫码</a></li>
                                            <li><a ui-sref="publicPay" href="/publicPay">公众号支付</a></li>
                                            <li><a ui-sref="webPay" href="/webPay">PC网页支付</a></li>
                                            <li><a ui-sref="mchScan" href="/mchScan">商户扫码</a></li>
                                            <li><a ui-sref="h5Pay" href="/h5Pay">H5支付</a></li>
                                            <li>SDK下载</li>
                                            <li><a ui-sref="sdkDownload" href="/sdkDownload">SDK下载</a></li>
                                            <!--<li><a ui-sref="demoExperience">Demo体验</a></li>-->
                                        </ul>
                                    </li>
                                    <li><a onclick="jump(this)" href="javascript:void(0)" data="http://www.ipaynow.cn/html/coop/coopCompApp.html">合作案例</a></li>
                                    <li><a onclick="jump(this)" href="javascript:void(0)" data="http://www.ipaynow.cn/html/help/helpBase.html">帮助</a></li>
                                    <li><a ui-sref="register" href="/register">注册</a></li>
                                    <li><a ui-sref="login" href="/login">登录</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="coop-menu col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12 ng-hide" ng-show="isMenuHeight">
                        <a ng-class="{subMenuActive:(isActive=='/userScan')}" ui-sref="userScan" class="subMenu-link" href="/userScan">用户扫码</a>
                        <a ng-class="{subMenuActive:(isActive=='/publicPay')}" ui-sref="publicPay" class="subMenu-link" href="/publicPay">公众号支付</a>
                        <a ng-class="{subMenuActive:(isActive=='/webPay')}" ui-sref="webPay" class="subMenu-link" href="/webPay">PC网页支付</a>
                        <a ng-class="{subMenuActive:(isActive=='/mchScan')}" ui-sref="mchScan" class="subMenu-link" href="/mchScan">商户扫码</a>
                        <a ng-class="{subMenuActive:(isActive=='/h5Pay')}" ui-sref="h5Pay" class="subMenu-link" href="/h5Pay">H5支付</a>
                    </div>
                </div>
                <script class="ng-scope">
                    function jump(e){
                        window.location.href= $(e).attr('data');
                    }
                </script>
            </div>
        <div class="container">
            <div class="product-type product-type-white product-type6">
                <h3 class="clearfix"><i class="pull-left"></i><span class="pull-left">卡牌支付</span></h3>
                <div class="product-type-txt">
                    <p>一码多付，一个二维码即可支持多种主流支付渠道，</p>
                    <p>也许这才是当前收银最省心的方式。</p>
                </div>
            </div>
            <img src="/static/ipay/images/banner-right7.png" class="pay-top-right card-pay-top-right">
        </div>
    </div>
    <div class="bgf">
        <div class="container">
            <div class="row">
                <div class="matter-item">
                    <h3 class="matter-item-t text-center">· 支持以下支付渠道 ·</h3>
                    <div class="pull-no col-md-6 matter-item-main">
                        <div class="line-main clearfix line-main2">
                            <a class=" col-md-4 col-xs-4">
                                <i class="icon2"><span></span></i>
                                <p>微信支付</p>
                            </a>
                            <a class=" col-md-4 col-xs-4">
                                <i class="icon1"><span></span></i>
                                <p>支付宝</p>
                            </a>
                            <a class="col-md-4 col-xs-4">
                                <i class="icon4"><span></span></i>
                                <p>手机QQ钱包</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="joinmode-item col-md-12 text-center">
                    <h3 class="matter-item-t text-center">· 接入方式 ·</h3>
                    <h4>寻找接入API相关问题？</h4>
                    <p>关于各种支付方式接入问题，可前往开发者中心-API文档查看相关信息。</p>
                    <div class="fifth-contet-btn">
                        <a target="_blank" class="btn btn-black btn-red" ui-sref="userScan" ng-btn-hover="" href="/userScan">查看API文档</a>

                    </div>
                </div>
        </div>
    </div>
    <!-- uiView: frontFooter -->
<div class="footer base col-md-12 row">
    <div class="col-md-8 col-md-offset-2">
        <div class="footer-content">
            <div>
                <span class="footer-content-title">关于我们<br></span>
                <span class="footer-content-content"><a target="_blank"  href="#">公司介绍</a><br></span>
                <span class="footer-content-content"><a target="_blank"  href="#">团队介绍</a><br></span>
                <span class="footer-content-content"><a target="_blank"  href="#">新闻动态</a><br></span>
                <span class="footer-content-content"><a target="_blank"  href="#">招贤纳士</a><br></span>
            </div>
            <div>
                <span class="footer-content-title">产品<br></span>
                <span class="footer-content-content"><a target="_blank" href="/phonePay">手机网页支付</a><br></span>
                <span class="footer-content-content"><a target="_blank" href="/pcPay">PC网页支付</a><br></span>
                <span class="footer-content-content"><a target="_blank" href="/officialPay">公众号支付</a><br></span>
                <span class="footer-content-content"><a target="_blank" href="/scanPay">扫码支付</a><br></span>
            </div>
            <div>
                <span class="footer-content-title">开发者中心<br></span>
                 <span class="footer-content-content"><a href="#">帮助问答</a><br></span>
                <span class="footer-content-content"><a target="_blank"  href="/userScan">API文档</a><br></span>
                <span class="footer-content-content"><a target="_blank"  href="/sdkDownload">SDK下载</a><br></span>
                 <span class="footer-content-content"><a target="_blank"  href="/demoExperience">Demo体验</a><br></span>
            </div>

            <div>
                <span class="footer-content-title">帮助<br></span>
                <span class="footer-content-content"><a target="_blank"  href="#">常见问题</a><br></span>
                <span class="footer-content-content"><a target="_blank"  href="#">技术问题</a><br></span>
            </div>
            <div>
                <span class="footer-content-title">咨询方式<br></span>
                <span class="footer-content-content">
              邮箱：<a href="mailto:ipaynow@ipaynow.cn"  title="点击进入邮箱">mofee@98imo.com</a><br>
            </span>
                <span class="footer-content-content">QQ：702154416<br></span>

                <span class="footerContact footerWay1"  title="关注公众号">
              <div class="wxQrCodeShow"> </div>
            </span>
                <a  target="_blank" title="查看微博" href="https://weibo.com/ipaynow"><span class="footerContact footerWay2"></span></a>
            </div>

        </div>
        <div class="footer-ICP">
            <span class=" h8" style="display: inline">Mofee聚合支付&nbsp;2017&nbsp;桂ICP备13029197号<img src="/static/ipay/images/beian.png"></span>
        </div>
    </div>
</div>
</html>
