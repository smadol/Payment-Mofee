<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"D:\phpStudy\PHPTutorial\WWW\mofee\public/../data/template/index/document\webPay.html";i:1521305413;s:76:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\index\common\index-foot.html";i:1521297861;}*/ ?>
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
    <link rel="stylesheet" href="/static/ipay/css/bootstrap.css?v=201801052358">
    <link rel="stylesheet" href="/static/ipay/css/bootstrap-datetimepicker.min.css?v=201801052358">
    <!--<link rel="stylesheet" href="/static/ipay/css/jquery.fullpage.css?v=01e56b9db9">-->
    <link rel="stylesheet" href="/static/ipay/css/jquery.datetimepicker.css?v=201801052358">
    <link rel="stylesheet" href="/static/ipay/css/common.min.css?v=201801052358">
    <link rel="stylesheet" href="/static/ipay/css/doc.css?v=201801052358">
    <link rel="icon" href="/favicon.ico" mce_href="image/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" mce_href="image/favicon.ico" type="image/x-icon">
    <script src="/static/ipay/js/jquery.min.js?v=201801052358"></script>
    <script src="/static/ipay/js/jquery.upload2.js?v=201801052358"></script>
    <script src="/static/ipay/js/jquery.jqprint-0.3.js?v=201801052358"></script>
    <script src="/static/ipay/js/angular.min.js?v=201801052358"></script>
    <script src="/static/ipay/js/angular-animate.js?v=201801052358"></script>
    <script src="/static/ipay/js/angular.pagination.js?v=201801052358"></script>
    <script src="/static/ipay/js/angular.pagination.ali.js?v=201801052358"></script>
    <script src="/static/ipay/js/angular-ui-router.js?v=201801052358"></script>
    <script src="/static/ipay/js/ocLazyLoad.min.js?v=201801052358"></script>
    <script src="/static/ipay/js/angular-file-upload.js?v=201801052358"></script>
    <script src="/static/ipay/js/highcharts.js?v=201801052358"></script>
    <script src="/static/ipay/js/highcharts-ng.js?v=201801052358"></script>
    <script src="/static/ipay/js/angular-sanitize.min.js?v=201801052358"></script>
    <script src="/static/ipay/js/bootstrap.min.js?v=201801052358"></script>
    <script src="/static/ipay/js/bootstrap-datetimepicker.js?v=201801052358"></script>
    <script src="/static/ipay/js/bootstrap-datetimepicker.zh-CN.js?v=201801052358"></script>
    <script src="/static/ipay/js/md5.js?v=201801052358"></script>
    <script src=/static/ipay/js/viewer.js?v=201801052358></script>
    <!--指令js合并-->
    <script src="/static/ipay/js/mainDirective.js?v=201801052358"></script>
    <!--指令js合并-->
    <script src="/static/ipay/js/mchInfo.js?v=201801052358"></script>
    <!--文档中心侧边栏指令-->
    <script src="/static/ipay/js/docSide.js?v=201801052358"></script>
    <!--获取省市信息的factory-->
    <script src="/static/ipay/js/factory.js?v=201801052358"></script>
    <!--检查是否在登录之外的页面-->
    <script src="/static/ipay/js/filter.js?v=201801052358"></script>
    <!--路径-->
    <script src="/static/ipay/js/router.js?v=201801052358"></script>
</head>
<body ng-controller="myApp" class="ng-scope">
<!-- uiView: -->
<div ui-view="" class="outer-content ng-scope" id="main_content" style="">
    <div class="container-fluid padding-none ng-scope">
        <!-- uiView: developerTopMenu -->
        <div ui-view="developerTopMenu" class="ng-scope">
            <div class="header clearfix navbar-product-white navbar_box_wrap ng-scope header-large" ng-class="{'navbar-product-def': isProductDef, 'navbar-product-dark': isProductDark,'header-large':isMenuHeight}">
                <div class="header-logoDiv container">
                    <div class="logo-div">
                        <a onclick="jump(this)" href="javascript:void(0)" data="/">
                            <div class="header-homeImg">
                            </div>
                            <div class="header-logoImg">
                            </div>
                        </a>
                        <div class="header-logoIcon">
                        </div>
                        <span class="header-location ng-binding">用户扫码</span>
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
                                    <div class="">
                                        <dl class="">
                                            <dt>支付服务</dt>
                                            <dt><a ui-sref="appPay" href="/appPay">手机App支付</a></dt>
                                            <dt><a ui-sref="phonePay" href="/phonePay">手机网页支付</a></dt>
                                            <dt><a ui-sref="pcPay" href="/pcPay">PC网页支付</a></dt>
                                            <dt><a ui-sref="officialPay" href="/officialPay">公众号支付</a></dt>
                                            <dt><a ui-sref="scanPay" href="/scanPay">商家扫码</a></dt>
                                            <dt><a ui-sref="userScanPay" href="/userScanPay">用户扫码</a></dt>
                                            <dt><a ui-sref="cardPay" href="/cardPay">卡牌支付</a></dt>
                                            <dt><a ui-sref="capacityPosPay" href="/capacityPosPay">智能POS支付</a></dt>
                                        </dl>
                                    </div>
                                    <div class="">
                                        <dl class="">
                                            <dt>增值服务</dt>
                                            <dt><a ui-sref="auth" href="/auth">鉴权服务</a></dt>
                                            <dt><a ui-sref="noteServe" href="/noteServe">短信服务</a></dt>
                                        </dl>
                                        <dl class="">
                                            <dt>更多服务</dt>
                                            <dt><a ui-sref="bankCollaborate" href="/bankCollaborate">银行合作</a></dt>
                                            <dt><a ui-sref="account" href="/account">二类账户</a></dt>
                                            <dt><a ui-sref="crossPay" href="/crossPay">跨境支付</a></dt>
                                            <!--<dt><a href="#">卡+服务</a></dt>-->
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
                                        <!--<dt><a ui-sref="joinPay">接入支付</a></dt>-->
                                        <dt><a ui-sref="userScan" href="/userScan">API文档</a></dt>
                                        <dt><a ui-sref="sdkDownload" href="/sdkDownload">SDK下载</a></dt>
                                        <!--<dt><a ui-sref="demoExperience">Demo体验</a></dt>-->
                                    </dl>
                                </div>
                            </div>
                        </div>

                        <div class="menu-mch">
                            <span class="h5"><a onclick="jump(this)" href="javascript:void(0)" data="http://www.ipaynow.cn/html/coop/coopCompApp.html">合作案例</a></span>
                            <p class="header-menu-borderP">
                            </p>
                        </div>

                        <div class="menu-help">
                            <span class="h5"><a onclick="jump(this)" href="javascript:void(0)" data="http://www.ipaynow.cn/html/help/helpBase.html">帮助</a></span>
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
                                <!--<img src="image/front/logoWt.png" alt="">-->
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
                <div class="coop-menu col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12" ng-show="isMenuHeight">
                    <a ng-class="{subMenuActive:(isActive=='/userScan')}" ui-sref="userScan" class="subMenu-link subMenuActive" href="/userScan">用户扫码</a>
                    <a ng-class="{subMenuActive:(isActive=='/publicPay')}" ui-sref="publicPay" class="subMenu-link" href="/publicPay">公众号支付</a>
                    <a ng-class="{subMenuActive:(isActive=='/webPay')}" ui-sref="webPay" class="subMenu-link" href="/webPay">PC网页支付</a>
                    <a ng-class="{subMenuActive:(isActive=='/mchScan')}" ui-sref="mchScan" class="subMenu-link" href="/mchScan">商户扫码</a>
                    <a ng-class="{subMenuActive:(isActive=='/h5Pay')}" ui-sref="h5Pay" class="subMenu-link" href="/h5Pay">H5支付</a>
                </div>
            </div>
            <script class="ng-scope">
                $(function(){
                    var screenWidth = parseInt($(window).width());
                    $('.drop-down').on('click', function(){
                        $(this).next().slideToggle();
                        $(this).hasClass('up') ? $(this).removeClass('up') : $(this).addClass('up');
                    });
                    $('.menu-item>ol>li>a').on('click', function(){
                        $(".menu-item>ol>li>a").removeClass('active');
                        $(this).addClass('active')
                        $(".doc-main-container>.doc-common-content").hide();
                        $(".doc-main-container>." + $(this).attr('id')).show();
                        if(screenWidth < 770){
                            $(".doc_top_menu").next().hide();
                        }else{
                            $('html, body').animate({         //添加animate动画效果
                                scrollTop: 280 + "px"
                            }, 100);
                        };
                    });
                    $(".skip_link").click(function(e){
                        var className=$(e.target).attr("class");
                        var classArr=className.split(" ");
                        var classTar ;
                        for(var i=0 in classArr){
                            if(classArr[i].indexOf("jump")>=0){
                                classTar=classArr[i].substr(5);
                                break;
                            }
                        }
                        $(".menu-item>ol>li>a").removeClass('active');
                        $("#"+classTar).addClass('active')
                        $(".doc-main-container>.doc-common-content").hide();
                        $(".doc-main-container>."+classTar).show();
                        $(".menu-item>ol").hide();
                        $("#"+classTar).parent().parent().show();
                        $('html, body').animate({         //添加animate动画效果
                            scrollTop: 0
                        }, 100);
                    });
                });
                function jump(e){
                    window.location.href= $(e).attr('data');
                }
            </script>
        </div>
        <div class="container container-style">
            <div class="doc-main-wrapper">
                <doc-side-bar hide-menu="using_scenes,product_join,mch_domain,output_type" doctitle="PC网页支付" class="ng-isolate-scope"><!--<link rel="stylesheet" href="css/develop/doc.css">-->
                    <div class="doc-sidebar-wrapper" style="position: absolute;">
                        <p class="drop-down display-none doc-top-menu doc_top_menu up ng-binding">PC网页支付</p>
                        <div class="doc-sidebar common-scroll" style="padding-top: 75px; height: 974px;">

                            <ul class="menu-group">
                                <li class="menu-item">
                                    <span class="drop-down up">1.引言</span>
                                    <ol>
                                        <li><a class="active" id="document_use">· 文档用途</a></li>
                                        <li><a id="reading_object">· 阅读对象</a></li>
                                        <li><a id="name_term">· 名称术语</a></li>
                                    </ol>

                                </li>
                                <li class="menu-item" ng-show="showProduct">
                                    <span class="drop-down">2.产品介绍</span>
                                    <ol>
                                        <li><a id="product_usage">· 使用场景</a></li>
                                        <li style="display: none;"><a id="product_join">· 快速接入</a></li>
                                    </ol>
                                </li>
                                <li class="menu-item">
                                    <span class="drop-down ng-binding">3.业务概述</span>
                                    <ol>
                                        <li><a id="server_notice">· 服务端支付结果异步通知</a></li>
                                        <li><a id="order_search">· 商户支付订单信息查询</a></li>
                                        <li><a id="juhe_pay">· 无插件聚合支付</a></li>
                                        <li style="display: none;"><a id="using_scenes">· 使用场景</a></li>
                                    </ol>
                                </li>
                                <li class="menu-item">
                                    <span class="drop-down ng-binding">4.数据通讯方案</span>
                                    <ol>
                                        <li><a id="message_communication">· 报文通讯模式</a></li>
                                        <li><a id="message_definition">· 报文定义</a></li>
                                        <li><a id="message_dataType">· 报文数据类型定义</a></li>
                                    </ol>
                                </li>
                                <li class="menu-item">
                                    <span class="drop-down ng-binding">5.接口规范说明</span>
                                    <ol>
                                        <li><a id="juhe_WP001">· WP001-聚合支付</a></li>
                                        <li><a id="order_MQ002">· MQ002-商户支付订单查询</a></li>
                                        <li><a id="server_N001">· N001-服务器端支付结果通知</a></li>
                                        <li><a id="mch_N002">· N002-前端支付结果通知</a></li>
                                    </ol>
                                </li>
                                <li class="menu-item">
                                    <span class="drop-down ng-binding">6.接口附录说明</span>
                                    <ol>
                                        <li><a id="MD5_autograph">· 交易的MD5签名逻辑</a></li>
                                        <li><a id="trade_response">· 交易响应码表</a></li>
                                        <li><a id="trade_payType">· 交易支付状态表</a></li>
                                        <li><a id="device_type">· 设备类型表</a></li>
                                        <li><a id="channel_type">· 渠道类型表</a></li>
                                        <li><a id="trade_type">· 交易类型表</a></li>
                                    </ol>
                                </li>
                                <li class="menu-item">
                                    <span class="drop-down ng-binding">7.附录</span>
                                    <ol>
                                        <li><a id="th_value">· 支付调起凭证tn值样式</a></li>
                                        <li style="display: none;"><a id="mch_domain">· 商户保留域说明</a></li>
                                        <li style="display: none;"><a id="output_type">· outputType取值说明</a></li>
                                    </ol>
                                </li>
                            </ul>
                        </div>

                    </div></doc-side-bar>
                <div class="doc-main-container">
                    <div class="doc-common-content document_use">
                        <p class="doc-content-title">文档用途</p>
                        <div class="doc-content-container">
                            <p>本文档旨在对现在支付的聚合支付服务端接口服务提供一份详细的规范定义说明。以方便聚合支付平台商户开发者能更方便地接入现在支付的聚合支付服务。</p>
                        </div>
                    </div>
                    <div class="doc-common-content reading_object">
                        <p class="doc-content-title">阅读对象</p>
                        <div class="doc-content-container">
                            <p>具有服务端接口接入开发能力的聚合支付平台商户。</p>
                        </div>
                    </div>
                    <div class="doc-common-content name_term">
                        <p class="doc-content-title">名称术语</p>
                        <div class="doc-content-container">
                            <p><span class="doc-sub-title">聚合支付：</span>现在支付提供给客户的快速接入银联、支付宝、微信等支付渠道的服务。</p>
                            <p><span class="doc-sub-title">聚合支付服务端接口：</span>聚合支付的接入方式包括前端接入和服务器端接入。像商户支付结果服务器端通知、商户支付订单查询、网银支付等都是要走服务器端接口。</p>
                            <p><span class="doc-sub-title">无插件聚合支付接口：</span>针对基于PC浏览器或者手机平板WAP网页上的商户应用的支付接口服务。手机或者平板插件接入式APP是不需要的。</p>
                            <p><span class="doc-sub-title">聚合支付平台商户：</span>与现在支付合作，计划接入现在支付聚合支付接口服务的商家。</p>
                            <p><span class="doc-sub-title">支付结果通知：</span>当消费者在商户的APP中支付完成后会收到实时的反馈结果，比如成功或者失败。但是真正的资金流的结果是在后台进行通知的，现在支付服务后台通过Https协议通知到商户后台。</p>
                        </div>
                    </div>
                    <div class="doc-common-content product_usage">
                        <p class="doc-content-title">使用场景</p>
                        <div class="doc-content-container">
                            <p>用户通过支付宝扫一扫对准支付二维码扫描发起支付。</p>
                            <p>商户对接扫码支付接口，通过传递下单参数跳转到支付宝支付页面，用户可以使用支付宝app扫码，或者点击页面右边的【登录账户付款】菜单登录支付宝进行支付，如图2.1所示。</p>
                            <div class="doc-common-frame">
                                <img ng-img-max="" src="image/front/doc/doc-web1.png" class="col-md-12 col-xs-12 viewer-toggle">
                                <p class="text-center margin-bottom-none">图 2.1 支付宝页面</p>
                            </div>
                            <p>用户使用手机支付宝-扫一扫支付，如图2.2与2.3所示。</p>
                            <div class="doc-common-frame">
                                <img ng-img-max="" src="image/front/doc/doc-web2.png" class="viewer-toggle">
                                <p class="text-center margin-bottom-none">图2.2 支付宝扫一扫</p>
                            </div>
                            <div class="doc-common-frame">
                                <img ng-img-max="" src="image/front/doc/doc-web3.png" class="viewer-toggle">
                                <p class="text-center margin-bottom-none">图 2.3 确认付款</p>
                            </div>
                            <p class="clear-both">PC端可以登录支付宝账户进行支付，如图2.4所示。</p>
                            <div class="doc-common-frame">
                                <img ng-img-max="" src="image/front/doc/doc-web4.png" class="col-md-12 col-xs-12 viewer-toggle">
                                <p class="text-center margin-bottom-none">图 2.4 登录支付宝账户支付</p>
                            </div>
                        </div>
                    </div>
                    <div class="doc-common-content server_notice">
                        <p class="doc-content-title">服务端支付结果异步通知</p>
                        <div class="doc-content-container">
                            <p>商户支付订单结果通知包括两部分的通知，即前台客户端实时同步交易结果应答和后台服务器端异步通知。前台实时同步应答即是当消费者支付完成后实时得到的UI层面的提示，后台服务器端异步通知是现在支付在实际资金流处理完成后给商户的服务器通过HTTPS协议异步发起的支付最终结果通知。考虑到实际完成支付流程的支付交易失败率比较低，且考虑到避免造成商户服务器端的压力，现只对支付成功的交易通知给聚合支付平台商户，使聚合支付平台商户能及时得到成功交易的交易状态。其它未通知的交易，聚合支付平台商户可以通过交易查询接口主动发起查询或者通过聚合支付平台商户管理后台去查看自己相关的交易订单的实时状态信息。</p>
                            <p class="doc-sub-title">商户支付订单的通知流程如下：</p>
                            <div class="doc-common-frame col-md-9 col-sm-12 col-xs-12">
                                <img ng-img-max="" src="image/front/doc/doc.png" class="img-width viewer-toggle">
                            </div>
                            <p class="doc-sub-title clear-both">需要注意的一些问题：</p>
                            <p>1.在商户推送订单给现在支付后，商户APP端实时收到的应答为支付订单受理结果，并非最终支付完成结果，最终结果以服务器端异步通知为准。</p>
                            <p>2.服务器端异步通知采用HTTPS协议进行通讯。现在支付通知商户的URL以商户支付订单推送时所填写的<span class="font-weight">商户通知URL</span>为准。</p>
                            <p>3.现规定，现在支付<span class="font-weight">只对支付最终成功的订单进行通知</span>商户，对支付失败或者其它状态的支付订单不进行异步通知。商户收到成功订单通知后进行自己的业务处理，然后实时同步应答字符串“<span class="font-weight">success=Y</span>”给现在支付。</p>
                            <p>4.如果商户在接收到现在支付异步通知后没有同步应答字符串“<span class="font-weight">success=Y</span>”给现在支付服务端，那么现在支付服务端就认为此次通知商户失败，那么现在支付将重复发起对商户的通知。</p>
                            <p><span class="font-weight">5.重复通知机制：</span>现在支付服务端在第一次通知失败后，将在2分钟后发起第二次通知，如果还是失败将再隔10分钟发起第三次通知，以后如果还是不成功，将再间隔30分钟、60分钟、2个小时、6个小时、10个小时、15个小时后重复通知。最终在25小时内完成8次重复通知后，将不再继续重复通知。当然，在每一次通知后，如果收到“<span class="font-weight">success=Y</span>”的应答就停止重复通知。重复通知时间间隔如下：  2分钟、10分钟、30分钟、1小时、2小时、6小时、10小时、15小时。</p>
                        </div>
                    </div>
                    <div class="doc-common-content order_search">
                        <p class="doc-content-title">商户支付订单信息查询</p>
                        <div class="doc-content-container">
                            <p>商户支付订单信息查询是指商户通过主动发起对现在支付的聚合支付服务端的HTTPS协议请求来获取商户支付订单基本信息和订单费率、费用及订单支付状态。</p>
                        </div>
                    </div>
                    <div class="doc-common-content juhe_pay">
                        <p class="doc-content-title">无插件聚合支付</p>
                        <div class="doc-content-container">
                            <p>现在支付聚合支付服务为聚合支付平台商户提供了两大类支付接入服务。一个是针对手机APP和平板APP等终端应用APP的支付服务，此类支付服务只要接入现在支付的SDK前端插件就可以直接使用现在支付的聚合支付服务了。另一个则是针对电脑浏览器网页或者手机WAP网页的页面应用支付方式，此类支付服务需要聚合支付平台商户将浏览器端支付服务直接提交到现在支付的后端HTTPS聚合支付服务器上，由现在支付聚合支付服务器去重定向渠道页面来完成支付业务，但此类支付对接方式不需要商户自己开发对接插件，所以称为无插件聚合支付。</p>
                            <p>无插件聚合支付服务在使用方式上又可以分为两种形式，一种是由现在支付聚合支付提供通用的支付网关页面，聚合支付平台商户只需要将支付订单提交给现在支付就可以完成支付了。另一种是由聚合支付平台商户自行开发支付网关页面来供消费者选择支付渠道，最后由聚合支付平台商户将支付订单信息和支付渠道网关编号一起推送给现在支付聚合支付服务器来完成支付业务。</p>
                            <p class="doc-sub-title">无插件聚合支付--现在支付通用网关页面模式下的业务流程：</p>
                            <div class="doc-common-frame col-md-9 col-sm-12 col-xs-12">
                                <img ng-img-max="" src="image/front/doc/doc1.png" class="img-width viewer-toggle">
                            </div>
                            <p class="doc-sub-title clear-both">无插件聚合支付--聚合支付平台商户自定义网关页面模式下的业务流程：</p>
                            <div class="doc-common-frame col-md-9 col-sm-12 col-xs-12">
                                <img ng-img-max="" src="image/front/doc/doc2.png" class="img-width viewer-toggle">
                            </div>
                        </div>
                    </div>
                    <div class="doc-common-content message_communication">
                        <p class="doc-content-title">报文通讯模式</p>
                        <div class="doc-content-container">
                            <p>与聚合支付平台服务后台系统之间进行交互时，需要通过post方式提交报文信息，请求参数为标准表单参数串形式。</p>
                        </div>
                    </div>
                    <div class="doc-common-content message_definition">
                        <p class="doc-content-title">报文定义</p>
                        <div class="doc-content-container">
                            <p class="doc-sub-title">报文的统一格式如下：</p>
                            <p>最终请求和响应报文内容采用表单字符串样式，扁平式，无二级结构。且每个字段的值都经过URLEncodeer编码过，编码字符集根据请求报文中指定的字符集为准。</p>
                            <p>样例如下：</p>
                            <div class="doc-common-frame doc-text-frame">
                                <p class="margin-bottom-none">discount=0.00&amp;payment_type=1&amp;subject=%E9%99%B6%E6%A0%91%E5%BC%BA&amp;trade_no=2014082033116251&amp;buyer_email=finalphase1219%40gmail.com&amp;gmt_create=2014-08-20+15%3A02%3A19¬ify_type=trade_status_sync&amp;quantity=1&amp;out_trade_no=2000104104802311&amp;seller_id=2088701895944944¬ify_time=2014-08-20+15%3A02%3A20&amp;body=%E5%85%B3%E4%BA%8E%E8%AE%A2%E5%8D%95%E9%AA%8C%E8%AF%81%E6%8E%A5%E5%8F%A3%E7%9A%84%E6%B5%8B%E8%AF%95&amp;trade_status=TRADE_FINISHED&amp;is_total_fee_adjust=N&amp;total_fee=0.01&amp;gmt_payment=2014-08-20+15%3A02%3A20&amp;seller_email=jiasheng%40ipaynow.cn&amp;gmt_close=2014-08-20+15%3A02%3A20&amp;price=0.01&amp;buyer_user_id=2088002274619511¬ify_id=4e47de6eabf15c476dc0014c894720014u&amp;use_coupon=N&amp;sign_type=RSA&amp;sign=hq0pvqbbUMwY5TcIbC908eCD0ZkXTNEylQuV7SMDc3rDvLLuh2n4q6FBgfPoViiVdq8paT7jfoHHQHAVORLjCu2dEcxviK%2FT%2B2CcwGd1977lI9jZmfPMuwOwAi1gPjNgtw%2BsHY2esukpp23lNq%2F%2BjXN9hhHhRLrvqvVSuvBTrRg%3D</p>
                            </div>
                        </div>
                    </div>
                    <div class="doc-common-content message_dataType">
                        <p class="doc-content-title">报文数据类型定义</p>
                        <div class="doc-content-container">
                            <p><span class="font-weight">String(m,n)：</span>代表可变长度型字符串类型。长度从m到n可变。</p>
                            <p><span class="font-weight">String(m)：</span>代表固定长度型字符串类型。m为整型数值</p>
                            <p><span class="font-weight">Number(m,n)：</span>代表带精度数值类型。m代表数值位数长度为1~m，n代表小数点后位数。</p>
                            <p><span class="font-weight">Number(m)：</span>代表整型数值类型。m代表数值位数长度为1~m。</p>
                            <p class="font-size-12 text-red">PS:m、n都为整型数值</p>
                        </div>
                    </div>
                    <div class="doc-common-content juhe_WP001">
                        <p class="doc-content-title">WP001-聚合支付</p>
                        <div class="doc-content-container">
                            <p>接口接入URL：https://pay.ipaynow.cn 请求类型：POST </p>
                            <p class="doc-sub-title">请求由商户页面发起：</p>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>字段名称</th>
                                    <th>字段Key</th>
                                    <th>格式</th>
                                    <th>必填</th>
                                    <th>备注</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>功能码</td>
                                    <td>funcode</td>
                                    <td>String(5)</td>
                                    <td>Y</td>
                                    <td>定值：WP001</td>
                                </tr>
                                <tr>
                                    <td>接口版本号</td>
                                    <td>version</td>
                                    <td>String(5)</td>
                                    <td>Y</td>
                                    <td>定值：1.0.0</td>
                                </tr>
                                <tr>
                                    <td>商户应用唯一标识</td>
                                    <td>appId</td>
                                    <td>String(1,32)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商户订单号</td>
                                    <td>mhtOrderNo</td>
                                    <td>String(1,40)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商户商品名称</td>
                                    <td>mhtOrderName</td>
                                    <td>String(1,40)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商户交易类型</td>
                                    <td>mhtOrderType</td>
                                    <td>String(1,40)</td>
                                    <td>Y</td>
                                    <td>01 普通消费</td>
                                </tr>
                                <tr>
                                    <td>商户订单币种类型</td>
                                    <td>mhtCurrencyType</td>
                                    <td>String(3)</td>
                                    <td>Y</td>
                                    <td>156 人民币</td>
                                </tr>
                                <tr>
                                    <td>商户订单交易金额</td>
                                    <td>mhtOrderAmt</td>
                                    <td>Number(22)</td>
                                    <td>Y</td>
                                    <td>单位(人民币)：分<br> 整数，无小数点</td>
                                </tr>
                                <tr>
                                    <td>商户订单详情</td>
                                    <td>mhtOrderDetail</td>
                                    <td>String(0,200)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>

                                    <td>商户订单超时时间</td>
                                    <td>mhtOrderTimeOut</td>
                                    <td>Number(4)</td>
                                    <td>N</td>
                                    <td>60~3600秒，默认3600</td>
                                </tr>
                                <tr>
                                    <td>商户订单开始时间</td>
                                    <td>mhtOrderStartTime</td>
                                    <td>String(14)</td>
                                    <td>Y</td>
                                    <td>yyyyMMddHHmmss</td>
                                </tr>
                                <tr>
                                    <td>商户后台通知URL</td>
                                    <td>notifyUrl</td>
                                    <td>String(1,200)</td>
                                    <td>Y</td>
                                    <td>HTTPS协议，POST方式提交报文</td>
                                </tr>
                                <tr>
                                    <td>商户前台通知URL</td>
                                    <td>frontNotifyUrl</td>
                                    <td>String(1,200)</td>
                                    <td>Y</td>
                                    <td>HTTPS协议，POST方式提交报文</td>
                                </tr>
                                <tr>
                                    <td>商户字符编码</td>
                                    <td>mhtCharset</td>
                                    <td>String(1,16)</td>
                                    <td>Y</td>
                                    <td>UTF-8</td>
                                </tr>
                                <tr>
                                    <td>设备类型</td>
                                    <td>deviceType</td>
                                    <td>String(4)</td>
                                    <td>Y</td>
                                    <td>定值：04</td>
                                </tr>
                                <tr>
                                    <td>用户所选渠道类型</td>
                                    <td>payChannelType</td>
                                    <td>String(2)</td>
                                    <td>Y</td>
                                    <td>
                                        <span class="display-block">12 支付宝</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>商户保留域</td>
                                    <td>mhtReserved</td>
                                    <td>String(100)</td>
                                    <td>N</td>
                                    <td><a class="doc-link skip_link jump_mch_domain" href="javascript:void(0);">见附录</a></td>
                                </tr>
                                <tr>
                                    <td>商户appId</td>
                                    <td>mhtSubAppId</td>
                                    <td>String(32)</td>
                                    <td>N</td>
                                    <td>商户配置关注公众号则必填</td>
                                </tr>
                                <tr>
                                    <td>商品标记</td>
                                    <td>mhtGoodsTag</td>
                                    <td>String(0,32)</td>
                                    <td>N</td>
                                    <td>用于营销活动</td>
                                </tr>
                                <tr>
                                    <td>输出格式</td>
                                    <td>outputType</td>
                                    <td>String(2)</td>
                                    <td>Y</td>
                                    <td>0.返回支付跳转链接<br>2.redirect支付页面</td>
                                </tr>
                                <tr>
                                    <td>现在支付子商户号</td>
                                    <td>mhtSubMchId</td>
                                    <td>String(64)</td>
                                    <td>N</td>
                                    <td>商户在现在支付开通的子商户号服务商模式必填</td>
                                </tr>
                                <tr>
                                    <td>商户签名方法</td>
                                    <td>mhtSignType</td>
                                    <td>String(3)</td>
                                    <td>Y</td>
                                    <td>定值:  MD5</td>
                                </tr>
                                <tr>
                                    <td>商户数据签名</td>
                                    <td>mhtSignature</td>
                                    <td>String(32)</td>
                                    <td>Y</td>
                                    <td>除mhtSignature字段外，其它字段都参与MD5签名。</td>
                                </tr>
                                </tbody>
                            </table>
                            <p class="doc-sub-title">当outputType=0支付交易同步返回:</p>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>字段名称</th>
                                    <th>字段Key</th>
                                    <th>格式</th>
                                    <th>必填</th>
                                    <th>备注</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>功能码</td>
                                    <td>funcode</td>
                                    <td>String(5)</td>
                                    <td>Y</td>
                                    <td>定值：WP001</td>
                                </tr>
                                <tr>
                                    <td>接口版本号</td>
                                    <td>version</td>
                                    <td>String(5)</td>
                                    <td>Y</td>
                                    <td>同输入</td>
                                </tr>
                                <tr>
                                    <td>商户应用唯一标识</td>
                                    <td>appId</td>
                                    <td>String(1,32)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>响应码</td>
                                    <td>responseCode</td>
                                    <td>String(4)</td>
                                    <td>Y</td>
                                    <td><a class="doc-link skip_link jump_trade_response" href="javascript:void(0);">见附录6.2响应码表</a></td>
                                </tr>
                                <tr>
                                    <td>响应时间</td>
                                    <td>responseTime</td>
                                    <td>String(14)</td>
                                    <td>Y</td>
                                    <td>yyyyMMddHHmmss</td>
                                </tr>
                                <tr>
                                    <td>响应信息</td>
                                    <td>responseMsg</td>
                                    <td>String(64)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商户订单号</td>
                                    <td>mhtOrderNo</td>
                                    <td>String(1,40)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>现在支付流水号</td>
                                    <td>nowPayOrderNo</td>
                                    <td>String(1,32)</td>
                                    <td>N</td>
                                    <td>下单成功时返回</td>
                                </tr>
                                <tr>
                                    <td>支付调起凭证</td>
                                    <td>tn</td>
                                    <td>String(1,1000)</td>
                                    <td>N</td>
                                    <td><a class="doc-link skip_link jump_th_value" href="javascript:void(0);">见附录</a></td>
                                </tr>
                                <tr>
                                    <td>签名方式</td>
                                    <td>signType</td>
                                    <td>String(3)</td>
                                    <td>Y</td>
                                    <td>定值：MD5</td>
                                </tr>
                                <tr>
                                    <td>签名串</td>
                                    <td>signature</td>
                                    <td>String(32)</td>
                                    <td>Y</td>
                                    <td>除signature字段外，其它字段都参与MD5签名。</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="doc-common-content order_MQ002">
                        <p class="doc-content-title">MQ002-商户支付订单查询</p>
                        <div class="doc-content-container">
                            <p>接口接入URL：https://pay.ipaynow.cn   请求类型：POST  </p>
                            <p class="doc-sub-title">由商户发起：</p>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>字段名称</th>
                                    <th>字段Key</th>
                                    <th>格式</th>
                                    <th>必填</th>
                                    <th>备注</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>功能码</td>
                                    <td>funcode</td>
                                    <td>String(5)</td>
                                    <td>Y</td>
                                    <td>定值：MQ002</td>
                                </tr>
                                <tr>
                                    <td>接口版本号</td>
                                    <td>version</td>
                                    <td>String(5)</td>
                                    <td>Y</td>
                                    <td>定值：1.0.0</td>
                                </tr>
                                <tr>
                                    <td>设备类型</td>
                                    <td>deviceType</td>
                                    <td>String(4)</td>
                                    <td>Y</td>
                                    <td>04 </td>
                                </tr>
                                <tr>
                                    <td>商户应用唯一标识</td>
                                    <td>appId</td>
                                    <td>String(1,32)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商户订单号</td>
                                    <td>mhtOrderNo</td>
                                    <td>String(1,40)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商户字符集</td>
                                    <td>mhtCharset</td>
                                    <td>String(1,16)</td>
                                    <td>Y</td>
                                    <td>UTF-8</td>
                                </tr>
                                <tr>
                                    <td>签名方法</td>
                                    <td>mhtSignType</td>
                                    <td>String(3)</td>
                                    <td>Y</td>
                                    <td>定值：MD5</td>
                                </tr>
                                <tr>
                                    <td>数据签名</td>
                                    <td>mhtSignature</td>
                                    <td>String(32)</td>
                                    <td>Y</td>
                                    <td>除mhtSignature字段外，其它字段都参与MD5签名</td>
                                </tr>
                                </tbody>
                            </table>
                            <p class="doc-sub-title">同步返回:</p>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>字段名称</th>
                                    <th>字段Key</th>
                                    <th>格式</th>
                                    <th>必填</th>
                                    <th>备注</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>功能码</td>
                                    <td>funcode</td>
                                    <td>String(5)</td>
                                    <td>Y</td>
                                    <td>定值：MQ002</td>
                                </tr>
                                <tr>
                                    <td>接口版本号</td>
                                    <td>version</td>
                                    <td>String(5)</td>
                                    <td>Y</td>
                                    <td>同传入</td>
                                </tr>
                                <tr>
                                    <td>商户应用唯一标识</td>
                                    <td>appId</td>
                                    <td>String(1,32)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商户订单号</td>
                                    <td>mhtOrderNo</td>
                                    <td>String(1,40)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商户商品名称</td>
                                    <td>mhtOrderName</td>
                                    <td>String(1,40)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商户子商户号</td>
                                    <td>mhtSubMchId</td>
                                    <td>String(64)</td>
                                    <td>N</td>
                                    <td>现在支付子商户号，机构商模式使用</td>
                                </tr>
                                <tr>
                                    <td>订单交易类型</td>
                                    <td>mhtOrderType</td>
                                    <td>String(2)</td>
                                    <td>Y</td>
                                    <td>01普通消费 <br><a class="doc-link skip_link jump_trade_type" href="javascript:void(0);">见附录6.6交易类型表</a></td>
                                </tr>
                                <tr>
                                    <td>订单币种类型</td>
                                    <td>mhtCurrencyType</td>
                                    <td>String(3)</td>
                                    <td>Y</td>
                                    <td>156 人民币</td>
                                </tr>
                                <tr>
                                    <td>订单交易金额</td>
                                    <td>mhtOrderAmt</td>
                                    <td>Number(22)</td>
                                    <td>Y</td>
                                    <td>单位(人民币)：分<br>
                                        整数，无小数点</td>
                                </tr>
                                <tr>
                                    <td>订单超时时间</td>
                                    <td>mhtOrderTimeOut</td>
                                    <td>Number(4)</td>
                                    <td>N</td>
                                    <td>60~3600秒，默认3600</td>
                                </tr>
                                <tr>
                                    <td>订单开始时间</td>
                                    <td>mhtOrderStartTime</td>
                                    <td>String(14)</td>
                                    <td>Y</td>
                                    <td>yyyyMMddHHmmss</td>
                                </tr>
                                <tr>
                                    <td>交易字符编码</td>
                                    <td>mhtCharset</td>
                                    <td>String(1,16)</td>
                                    <td>Y</td>
                                    <td>UTF-8</td>
                                </tr>
                                <tr>
                                    <td>设备类型</td>
                                    <td>deviceType</td>
                                    <td>String(4)</td>
                                    <td>Y</td>
                                    <td>08 主扫</td>
                                </tr>
                                <tr>
                                    <td>用户所选渠道类型</td>
                                    <td>payChannelType</td>
                                    <td>String(2)</td>
                                    <td>Y</td>
                                    <td>12支付宝</td>
                                </tr>
                                <tr>
                                    <td>现在支付订单号</td>
                                    <td>nowPayOrderNo</td>
                                    <td>String(32)</td>
                                    <td>N</td>
                                    <td>查询成功时返回</td>
                                </tr>
                                <tr>
                                    <td>渠道订单号</td>
                                    <td>channelOrderNo</td>
                                    <td>String(0,32)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>付款人账号</td>
                                    <td>payConsumerId</td>
                                    <td>String(0,40)</td>
                                    <td>N</td>
                                    <td>当支付宝支付时，有buyer_id则返回，否则不返回</td>
                                </tr>
                                <tr>
                                    <td>支付成功时间</td>
                                    <td>payTime</td>
                                    <td>String(14)</td>
                                    <td>Y</td>
                                    <td>yyyyMMddHHmmss</td>
                                </tr>
                                <tr>
                                    <td>交易状态</td>
                                    <td>transStatus</td>
                                    <td>String(4)</td>
                                    <td>Y</td>
                                    <td><a class="doc-link skip_link jump_trade_payType" href="javascript:void(0);">见附录6.3交易支付状态表</a></td>
                                </tr>
                                <tr>
                                    <td>商户保留域</td>
                                    <td>mhtReserved</td>
                                    <td>String(100)</td>
                                    <td>N</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>响应时间</td>
                                    <td>responseTime</td>
                                    <td>String(14)</td>
                                    <td>Y</td>
                                    <td>yyyyMMddHHmmss</td>
                                </tr>
                                <tr>
                                    <td>响应码</td>
                                    <td>responseCode</td>
                                    <td>String(4)</td>
                                    <td>Y</td>
                                    <td><a class="doc-link skip_link jump_trade_response" href="javascript:void(0);">见附录6.2响应码表</a></td>
                                </tr>
                                <tr>
                                    <td>响应信息</td>
                                    <td>responseMsg</td>
                                    <td>String(1,64)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>签名方法</td>
                                    <td>signType</td>
                                    <td>String(3)</td>
                                    <td>Y</td>
                                    <td>定值：MD5</td>
                                </tr>
                                <tr>
                                    <td>数据签名</td>
                                    <td>signature</td>
                                    <td>String(32)</td>
                                    <td>Y</td>
                                    <td>除signature字段外，其它字段都参与MD5签名</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="doc-common-content server_N001">
                        <p class="doc-content-title">N001-商户服务器端支付结果通知</p>
                        <div class="doc-content-container">
                            <p class="doc-sub-title">现在支付的聚合支付服务端异步发起：         通讯方式：HTTPS POST</p>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>字段名称</th>
                                    <th>字段Key</th>
                                    <th>格式</th>
                                    <th>必填</th>
                                    <th>备注</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>功能码</td>
                                    <td>funcode</td>
                                    <td>String(4)</td>
                                    <td>Y</td>
                                    <td>定值：N001</td>
                                </tr>
                                <tr>
                                    <td>接口版本号</td>
                                    <td>version</td>
                                    <td>String(5)</td>
                                    <td>Y</td>
                                    <td>定值：1.0.0</td>
                                </tr>
                                <tr>
                                    <td>商户应用唯一标识</td>
                                    <td>appId</td>
                                    <td>String(1,32)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商户子商户号</td>
                                    <td>mhtSubMchId</td>
                                    <td>String(64)</td>
                                    <td>N</td>
                                    <td>现在支付子商户号，机构商模式使用</td>
                                </tr>
                                <tr>
                                    <td>商户订单号</td>
                                    <td>mhtOrderNo</td>
                                    <td>String(1,40)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商户商品名称</td>
                                    <td>mhtOrderName</td>
                                    <td>String(1,40)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商户交易类型</td>
                                    <td>mhtOrderType</td>
                                    <td>String(2)</td>
                                    <td>Y</td>
                                    <td>01 普通消费 <br>
                                        05 代理消费</td>
                                </tr>
                                <tr>
                                    <td>商户订单币种类型</td>
                                    <td>mhtCurrencyType</td>
                                    <td>String(3)</td>
                                    <td>Y</td>
                                    <td>156 人民币</td>
                                </tr>
                                <tr>
                                    <td>商户订单交易金额</td>
                                    <td>mhtOrderAmt</td>
                                    <td>Number(22)</td>
                                    <td>Y</td>
                                    <td>单位(人民币)：分</td>
                                </tr>
                                <tr>
                                    <td>商户订单超时时间</td>
                                    <td>mhtOrderTimeOut</td>
                                    <td>Number(4)</td>
                                    <td>N</td>
                                    <td>60~3600秒，默认3600</td>
                                </tr>
                                <tr>
                                    <td>商户订单开始时间</td>
                                    <td>mhtOrderStartTime</td>
                                    <td>String(14)</td>
                                    <td>Y</td>
                                    <td>yyyyMMddHHmmss</td>
                                </tr>
                                <tr>
                                    <td>支付成功时间</td>
                                    <td>payTime</td>
                                    <td>String(14)</td>
                                    <td>Y</td>
                                    <td>yyyyMMddHHmmss</td>
                                </tr>
                                <tr>
                                    <td>商户字符编码</td>
                                    <td>mhtCharset</td>
                                    <td>String(1,6)</td>
                                    <td>Y</td>
                                    <td>定值：UTF-8</td>
                                </tr>
                                <tr>
                                    <td>现在支付流水号</td>
                                    <td>nowPayOrderNo</td>
                                    <td>String(0,32)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>渠道订单号</td>
                                    <td>channelOrderNo</td>
                                    <td>String(0,32)</td>
                                    <td>Y</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>设备类型</td>
                                    <td>deviceType</td>
                                    <td>String(4)</td>
                                    <td>Y</td>
                                    <td>04</td>
                                </tr>
                                <tr>
                                    <td>用户所选渠道类型</td>
                                    <td>payChannelType</td>
                                    <td>String(2)</td>
                                    <td>N</td>
                                    <td>12支付宝</td>
                                </tr>
                                <tr>
                                    <td>交易支付状态</td>
                                    <td>transStatus</td>
                                    <td>String(4)</td>
                                    <td>Y</td>
                                    <td><a class="doc-link skip_link jump_trade_payType" href="javascript:void(0);">见附录6.3交易支付状态表</a></td>
                                </tr>
                                <tr>
                                    <td>付款人账号</td>
                                    <td>payConsumerId</td>
                                    <td>String(0,40)</td>
                                    <td>N</td>
                                    <td>支付宝支付时，当有buyer_id则返回，否则不返回 </td>
                                </tr>
                                <tr>
                                    <td>商户保留域</td>
                                    <td>mhtReserved</td>
                                    <td>String(0,100)</td>
                                    <td>N</td>
                                    <td>给商户使用的字段，商户可以对交易进行标记，现在支付将原样返回</td>
                                </tr>
                                <tr>
                                    <td>签名方法</td>
                                    <td>signType</td>
                                    <td>String(3)</td>
                                    <td>Y</td>
                                    <td>定值：MD5</td>
                                </tr>
                                <tr>
                                    <td>数据签名</td>
                                    <td>signature</td>
                                    <td>String(1,32)</td>
                                    <td>Y</td>
                                    <td>除signature字段外，其它字段都参与RSA签名</td>
                                </tr>
                                </tbody>
                            </table>
                            <p class="doc-sub-title">商户同步返回:</p>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>字段名称</th>
                                    <th>字段Key</th>
                                    <th>格式</th>
                                    <th>必填</th>
                                    <th>备注</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>是否成功</td>
                                    <td>success</td>
                                    <td>Char(1)</td>
                                    <td>Y</td>
                                    <td>Y通知成功<br>
                                        N通知失败(现在支付未收到success=Y,后端将按规则默认重发通知)</td>
                                </tr>
                                </tbody>
                            </table>
                            <p class="doc-sub-title">服务端通知接口接入注意事项：</p><p>
                        </p><p>1.通知方式采用HTTPS POST方式通知；</p>
                            <p>2.报文数据以字符串流的形式放在报文体中，所以直接getParameter是得不到数据的。</p>
                            <p>数据接收Java版示例代码：</p>
                            <div class="doc-common-frame doc-text-frame">
<pre><code class="java">
    //获取通知数据需要从body中流式读取
    BufferedReader reader = req.getReader();
    StringBuilder reportBuilder = new StringBuilder();
    String tempStr = "";
    while((tempStr = reader.readLine()) != null){
    reportBuilder.append(tempStr);
    }
    //报文数据字符串
    String reportContent = reportBuilder.toString();
</code>
</pre>
                            </div>

                        </div>
                    </div>
                    <div class="doc-common-content mch_N002">
                        <p class="doc-content-title">N002-商户前端支付结果通知</p>
                        <p>现在支付的聚合支付前端发起（Form表单数据如下）：通讯方式：HTTPS GET</p>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>字段名称</th>
                                <th>字段Key</th>
                                <th>格式</th>
                                <th>必填</th>
                                <th>备注</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>功能码</td>
                                <td>funcode</td>
                                <td>String(4)</td>
                                <td>Y</td>
                                <td>定值：N002</td>
                            </tr>
                            <tr>
                                <td>接口版本号</td>
                                <td>version</td>
                                <td>String(5)</td>
                                <td>Y</td>
                                <td>定值：1.0.0</td>
                            </tr>
                            <tr>
                                <td>商户应用唯一标识</td>
                                <td>appId</td>
                                <td>String(1,40)</td>
                                <td>Y</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>商户订单号</td>
                                <td>mhtOrderNo</td>
                                <td>String(1,40)</td>
                                <td>Y</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>现在支付订单号</td>
                                <td>nowPayOrderNo</td>
                                <td>String(0,64)</td>
                                <td>N</td>
                                <td>成功时返回</td>
                            </tr>
                            <tr>
                                <td>商户字符编码</td>
                                <td>mhtCharset</td>
                                <td>String(1,6)</td>
                                <td>Y</td>
                                <td>定值：UTF-8</td>
                            </tr>
                            <tr>
                                <td>交易支付状态</td>
                                <td>transStatus</td>
                                <td>String(4)</td>
                                <td>Y</td>
                                <td>A001支付成功<br>
                                    见<a class="doc-link skip_link jump_trade_payType" href="javascript:void(0);">附录6.3交易支付状态表</a></td>
                            </tr>
                            <tr>
                                <td>商户保留域</td>
                                <td>mhtReserved</td>
                                <td>String(100)</td>
                                <td>N</td>
                                <td>给商户使用的字段，商户可以对交易进行标记，现在支付将原样返回</td>
                            </tr>
                            <tr>
                                <td>签名方法</td>
                                <td>signType</td>
                                <td>String(3)</td>
                                <td>Y</td>
                                <td>定值：MD5</td>
                            </tr>
                            <tr>
                                <td>数据签名</td>
                                <td>signature</td>
                                <td>String(32)</td>
                                <td>Y</td>
                                <td>除signature字段外，所有参数都参与MD5签名。<br>
                                    签名逻辑见<a class="doc-link skip_link jump_MD5_autograph" href="javascript:void(0);">接口附录说明6.1</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="doc-common-content MD5_autograph">
                        <p class="doc-content-title">交易签名逻辑</p>
                        <div class="doc-content-container">
                            <p>除签名串(signature/mhtSignature)本身以外所有参数都参与签名</p>
                            <p class="doc-sub-title">签名步骤如下：</p>
                            <p><span class="font-weight">第一步：</span>对参与MD5签名的字段按字典升序排序后，分别取值后并排除值为空的字段键值对，最后组成key1=value1&amp;key2=value2....keyn=valuen"<span class="font-weight">表单字符串</span>"。</p>
                            <p><span class="font-weight">第二步：</span>对MD5密钥进行加密得到"<span class="font-weight">密钥MD5值</span>"。</p>
                            <p><span class="font-weight">第三步：</span> 最后对<span class="font-weight">第一步中得到的表单字符串</span>&amp;<span class="font-weight">第二步得到的密钥MD5值</span>做MD5签名</p>
                            <p class="text-red font-size-12">PS:MD5密钥是用户在注册应用的时候生成的，每个应用一个MD5密钥。</p>
                        </div>
                    </div>
                    <div class="doc-common-content trade_response">
                        <p class="doc-content-title">交易响应码表</p>
                        <div class="doc-content-container">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>响应码</th>
                                    <th>含义</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>A001</td>
                                    <td>成功</td>
                                </tr>
                                <tr>
                                    <td>A002</td>
                                    <td>失败</td>
                                </tr>
                                <tr>
                                    <td>A003</td>
                                    <td>未知</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="doc-common-content trade_payType">
                        <p class="doc-content-title">交易支付状态表</p>
                        <div class="doc-content-container">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>状态码</th>
                                    <th>含义</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>A00I</td>
                                    <td>订单未处理</td>
                                </tr>
                                <tr>
                                    <td>A004</td>
                                    <td>订单受理成功</td>
                                </tr>
                                <tr>
                                    <td>A005</td>
                                    <td>订单受理失败</td>
                                </tr>
                                <tr>
                                    <td>A001</td>
                                    <td>订单支付成功</td>
                                </tr>
                                <tr>
                                    <td>A002</td>
                                    <td>订单支付失败</td>
                                </tr>
                                <tr>
                                    <td>A003</td>
                                    <td>支付结果未知</td>
                                </tr>
                                <tr>
                                    <td>A006</td>
                                    <td>交易关闭</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="doc-common-content device_type">
                        <p class="doc-content-title">设备类型表</p>
                        <div class="doc-content-container">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>类型码</th>
                                    <th>含义</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>04</td>
                                    <td>网页支付</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="doc-common-content channel_type">
                        <p class="doc-content-title">渠道类型表</p>
                        <div class="doc-content-container">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>类型码</th>
                                    <th>含义</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>12</td>
                                    <td>支付宝</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="doc-common-content trade_type">
                        <p class="doc-content-title">交易类型表</p>
                        <div class="doc-content-container">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>响应码</th>
                                    <th>含义</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>普通消费</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="doc-common-content th_value">
                        <p class="doc-content-title">支付调起凭证tn值样式</p>
                        <div class="doc-content-container">
                            <p>样例：</p>
                            <p class="font-weight">outputType=0 时:</p>
                            <p class="doc-text-frame">https%3a%2f%2fopenapi.alipay.com%2fgateway.do%3falipay_sdk%3dalipay-sdk-java-dynamicVersionNo%26app_id%3d2017020805568925%26biz_content%3d%257B%2522subject%2522%253A%2522%25E5%2595%2586%25E5%2593%2581%25E5%2590%258D%25E7%25A7%25B0%2522%252C%2522out_trade_no%2522%253A%2522APU1220170519017445860%2522%252C%2522total_amount%2522%253A%25220.01%2522%252C%2522product_code%2522%253A%2522FAST_INSTANT_TRADE_PAY%2522%252C%2522sub_merchant%2522%253A%257B%2522merchant_id%2522%253A%25222088621885554237%2522%257D%257D%26charset%3dUTF-8%26format%3djson%26method%3dalipay.trade.page.pay%26notify_url%3dhttp%253A%252F%252Fwx.mposbank.com%252Ftdcctp%252Fnotify%252Fpc_notify.tran%26return_url%3dhttp%253A%252F%252Fwx.mposbank.com%252Ftdcctp%252Freturn%252Fpc_return.tran%26sign%3doVaOUbgDDJX4q4iGFTNW5VXFuthA47GbLrnlTH5tqR8%252Fp%252F4G7KQE0fI1IlJV7ks7wusbl7S5ulVELU0%252FLWEUc8Xb3CrPRAIP7NBMNZlmDsQyfgcZja66TUi8xyIExdf8W5NK06OnMdUDNoNtlEGP6WbDYCS%252FG1F5Bocef%252F03YME%253D%26sign_type%3dRSA%26timestamp%3d2017-05-19%2b11%253A44%253A45%26sign%3doVaOUbgDDJX4q4iGFTNW5VXFuthA47GbLrnlTH5tqR8%252Fp%252F4G7KQE0fI1IlJV7ks7wusbl7S5ulVELU0%252FLWEUc8Xb3CrPRAIP7NBMNZlmDsQyfgcZja66TUi8xyIExdf8W5NK06OnMdUDNoNtlEGP6WbDYCS%252FG1F5Bocef%252F03YME%253D</p>
                            <p class="font-weight">通过前端js跳转</p>
                            <div class="doc-common-frame doc-text-frame">
                                &lt;script&gt; <br>
                                window.location.href="https://openapi.alipay.com/gateway.do?alipay_sdk=alipay-sdk-java-dynamicVersionNo&amp;app_id=2017020805568925&amp;biz_content=%7B%22subject%22%3A%22%E5%95%86%E5%93%81%E5%90%8D%E7%A7%B0%22%2C%22out_trade_no%22%3A%22APU1220170519017445860%22%2C%22total_amount%22%3A%220.01%22%2C%22product_code%22%3A%22FAST_INSTANT_TRADE_PAY%22%2C%22sub_merchant%22%3A%7B%22merchant_id%22%3A%222088621885554237%22%7D%7D&amp;charset=UTF-8&amp;format=json&amp;method=alipay.trade.page.pay¬ify_url=http%3A%2F%2Fwx.mposbank.com%2Ftdcctp%2Fnotify%2Fpc_notify.tran&amp;return_url=http%3A%2F%2Fwx.mposbank.com%2Ftdcctp%2Freturn%2Fpc_return.tran&amp;sign=oVaOUbgDDJX4q4iGFTNW5VXFuthA47GbLrnlTH5tqR8%2Fp%2F4G7KQE0fI1IlJV7ks7wusbl7S5ulVELU0%2FLWEUc8Xb3CrPRAIP7NBMNZlmDsQyfgcZja66TUi8xyIExdf8W5NK06OnMdUDNoNtlEGP6WbDYCS%2FG1F5Bocef%2F03YME%3D&amp;sign_type=RSA×tamp=2017-05-19+11%3A44%3A45&amp;sign=oVaOUbgDDJX4q4iGFTNW5VXFuthA47GbLrnlTH5tqR8%2Fp%2F4G7KQE0fI1IlJV7ks7wusbl7S5ulVELU0%2FLWEUc8Xb3CrPRAIP7NBMNZlmDsQyfgcZja66TUi8xyIExdf8W5NK06OnMdUDNoNtlEGP6WbDYCS%2FG1F5Bocef%2F03YME%3D";
                                <br>
                                &lt;⁄script&gt;
                            </div>
                        </div>
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
                <!--<span class="footer-content-content"><a target="_blank" href="/officialPay">公众号支付</a><br></span>-->
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
