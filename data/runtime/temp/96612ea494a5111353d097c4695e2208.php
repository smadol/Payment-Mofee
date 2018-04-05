<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:85:"D:\phpStudy\PHPTutorial\WWW\mofee\public/../data/template/index/support\document.html";i:1521338183;s:76:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\index\common\index-foot.html";i:1521339555;}*/ ?>
<!DOCTYPE html>
<html ng-app="moduleApp">
<head>

    <meta charset="UTF-8">
    <title>开发文档 - 聚合支付平台</title>
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
                        <span class="header-location ng-binding">API开发文档</span>
                    </div>
                    <div class="son-header-menu header-menu-links">
                        <div class="menu-exploit">
                                <span class="h5">
                                    产品
                                     <div class="triangle"></div>
                                </span>
                            <p class="header-menu-borderP">
                            </p>
                            <div class="menu-exploit-content menu-hidd">
                                <div class="menu-exploit-list menu-list">
                                    <dl class="">
                                        <dt><a ui-sref="phonePay" href="/phonePay">手机网页支付</a></dt>
                                        <dt><a ui-sref="pcPay" href="/pcPay">PC网页支付</a></dt>
                                        <dt><a ui-sref="scanPay" href="/scanPay">扫码支付</a></dt>
                                        <dt><a ui-sref="cardPay" href="/cardPay">卡牌支付</a></dt>
                                    </dl>
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
                                        <dt><a ui-sref="apiDocument" href="/support/doc">API文档</a></dt>
                                        <dt><a ui-sref="sdkDownload" href="/support/sdkDownload">SDK下载</a></dt>
                                    </dl>
                                </div>
                            </div>
                        </div>

                        <div class="menu-help">
                            <span class="h5"><a onclick="jump(this)" href="javascript:void(0)" data="/support/help">帮助</a></span>
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
                                        <li><a ui-sref="phonePay" href="/phonePay">手机网页支付</a></li>
                                        <li><a ui-sref="pcPay" href="/pcPay">PC网页支付</a></li>
                                        <li><a ui-sref="userScanPay" href="/scanPay">扫码支付</a></li>
                                        <li><a ui-sref="cardPay" href="/cardPay">卡牌支付</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        开发者中心 <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a ui-sref="apiDocument" href="/support/doc">API开发文档</a></li>
                                        <li><a ui-sref="sdkDownload" href="/support/sdkDownload">SDK下载</a></li>
                                        <!--<li><a ui-sref="demoExperience">Demo体验</a></li>-->
                                    </ul>
                                </li>
                                <li><a onclick="jump(this)" href="javascript:void(0)" data="support/coop">合作案例</a></li>
                                <li><a onclick="jump(this)" href="javascript:void(0)" data="/support/help">帮助</a></li>
                                <li><a ui-sref="register" href="/register">注册</a></li>
                                <li><a ui-sref="login" href="/login">登录</a></li>
                            </ul>
                        </div>
                    </div>
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
                <doc-side-bar hide-menu="using_scenes,product_join,mch_N002,output_type" doctitle="API开发文档" class="ng-isolate-scope">
                    <div class="doc-sidebar-wrapper" style="position: absolute;">
                        <p class="drop-down display-none doc-top-menu doc_top_menu up ng-binding">API开发文档</p>
                        <div class="doc-sidebar common-scroll" style="height: 925px; padding-top: 75px;">

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
                                        <li><a id="product_usage">· 支付流程（一）</a></li>
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
                                        <li><a id="juhe_WP001">· 发起支付</a></li>
                                        <li><a id="order_MQ002">· 支付订单查询</a></li>
                                        <li><a id="server_N001">· 支付结果通知</a></li>
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
                                    </ol>
                                </li>
                                <li class="menu-item">
                                    <span class="drop-down ng-binding">7.附录</span>
                                    <ol>
                                        <li><a id="th_value">· 支付调起凭证</a></li>
                                        <li><a id="sdk">· SDK下载</a></li>
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
                        <p class="doc-content-title">支付流程</p>
                        <div class="doc-content-container">
                            <p>用户通过手机微信、支付宝扫一扫对准支付二维码扫描发起支付。</p>
                            <p class="font-weight">（1）支付宝支付</p>
                            <p>①商户对接扫码支付接口，通过传递下单参数生成支付宝支付二维码或二维码链接（二维码链接商户可自行生成二维码）</p>
                            <div class="doc-common-frame">
                                <img ng-img-max="" src="/static/ipay/images/doc-mch1.png" class="viewer-toggle">
                            </div>
                            <p class="clear-both">②用户使用手机支付宝扫一扫功能扫码支付</p>
                            <div class="doc-common-frame">
                                <img ng-img-max="" src="/static/ipay/images/doc-mch2.png" class="viewer-toggle">
                            </div>
                            <div class="doc-common-frame">
                                <img ng-img-max="" src="/static/ipay/images/doc-mch3.png" class="viewer-toggle">
                            </div>
                            <p class="font-weight clear-both">（2）微信支付</p>
                            <p>①商户对接扫码支付接口，通过传递下单参数生成微信支付二维码或二维码链接（二维码链接商户可自行生成二维码）</p>
                            <div class="doc-common-frame">
                                <img ng-img-max="" src="/static/ipay/images/doc-mch4.png" class="viewer-toggle">
                            </div>
                            <p class="clear-both">②使用手机微信扫一扫功能扫码支付</p>
                            <div class="doc-common-frame">
                                <img ng-img-max="" src="/static/ipay/images/doc-mch5.png" class="viewer-toggle">
                            </div>
                            <div class="doc-common-frame">
                                <img ng-img-max="" src="/static/ipay/images/doc-mch6.png" class="viewer-toggle">
                            </div>
                        </div>
                    </div>

                    <div class="doc-common-content server_notice">
                        <p class="doc-content-title">服务端支付结果异步通知</p>
                        <div class="doc-content-container">
                            <p>商户支付订单结果通知包括两部分的通知，即前台客户端实时同步交易结果应答和后台服务器端异步通知。前台实时同步应答即是当消费者支付完成后实时得到的UI层面的提示，后台服务器端异步通知是现在支付在实际资金流处理完成后给商户的服务器通过HTTPS协议异步发起的支付最终结果通知。考虑到实际完成支付流程的支付交易失败率比较低，且考虑到避免造成商户服务器端的压力，现只对支付成功的交易通知给聚合支付平台商户，使聚合支付平台商户能及时得到成功交易的交易状态。其它未通知的交易，聚合支付平台商户可以通过交易查询接口主动发起查询或者通过聚合支付平台商户管理后台去查看自己相关的交易订单的实时状态信息。</p>
                            <p class="doc-sub-title">商户支付订单的通知流程如下：</p>
                            <div class="doc-common-frame col-md-9 col-sm-12 col-xs-12">
                                <img ng-img-max="" src="/static/ipay/images/doc.png" class="img-width viewer-toggle">
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
                                <img ng-img-max="" src="/static/ipay/images/doc1.png" class="img-width viewer-toggle">
                            </div>
                            <p class="doc-sub-title clear-both">无插件聚合支付--聚合支付平台商户自定义网关页面模式下的业务流程：</p>
                            <div class="doc-common-frame col-md-9 col-sm-12 col-xs-12">
                                <img ng-img-max="" src="/static/ipay/images/doc2.png" class="img-width viewer-toggle">
                            </div>
                        </div>
                    </div>
                    <div class="doc-common-content message_communication">
                        <p class="doc-content-title">报文通讯模式</p>
                        <div class="doc-content-container">
                            <p>采用https协议进行交互。数据交互方式包含：后台调用方式。SDK与聚合支付平台服务后台系统之间进行交互时，需要通过post方式提交报文信息，请求参数为<span class="font-weight">标准表单参数串形式</span>。</p>
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
                        <p class="doc-content-title">发起支付请求</p>
                        <div class="doc-content-container">
                            <p>接口接入APIURL：https://api.pay.98imo.com/gateway.do 请求类型：POST </p>
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
                                    <td>商户ID</td>
                                    <td>mch_id</td>
                                    <td>String(1,32)</td>
                                    <td>是</td>
                                    <td>100000</td>
                                </tr>
                                <tr>
                                    <td>商户应用ID</td>
                                    <td>appid</td>
                                    <td>String(1,32)</td>
                                    <td>是</td>
                                    <td>mo100000</td>
                                </tr>
                                <tr>
                                    <td>商户订单号</td>
                                    <td>out_trade_no</td>
                                    <td>String(1,40)</td>
                                    <td>是</td>
                                    <td>2018126500000123600531</td>
                                </tr>
                                <tr>
                                    <td>商户商品名称</td>
                                    <td>subject</td>
                                    <td>String(1,40)</td>
                                    <td>是</td>
                                    <td>购买VIP会员</td>
                                </tr>
                                <tr>
                                    <td>商户交易类型</td>
                                    <td>trade_type</td>
                                    <td>String(1,40)</td>
                                    <td>是</td>
                                    <td>ALIPAY:支付宝,QQPAY:QQ钱包,WXPAY:微信支付</td>
                                </tr>
                                <tr>
                                    <td>商户订单交易金额</td>
                                    <td>total_fee</td>
                                    <td>String(22)</td>
                                    <td>是</td>
                                    <td>单位(人民币)：元<br> 整数，无小数点</td>
                                </tr>
                                <tr>
                                    <td>商户后台通知URL</td>
                                    <td>notify_url</td>
                                    <td>String(1,200)</td>
                                    <td>是</td>
                                    <td>HTTPS协议，POST方式提交报文</td>
                                </tr>

                                <tr>
                                    <td>商户回调URL</td>
                                    <td>return_url</td>
                                    <td>String(1,200)</td>
                                    <td>是</td>
                                    <td>HTTPS协议，   GET方式提交报文</td>
                                </tr>
                                <tr>
                                    <td>商户签名方法</td>
                                    <td>SignType</td>
                                    <td>String(3)</td>
                                    <td>是</td>
                                    <td>定值:  MD5</td>
                                </tr>
                                <tr>
                                    <td>商户数据签名</td>
                                    <td>sign</td>
                                    <td>String(32)</td>
                                    <td>是</td>
                                    <td>除sign字段外，其它字段都参与MD5签名。</td>
                                </tr>
                                </tbody>
                            </table>
                            <p class="doc-sub-title">支付交易同步返回:</p>
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
                                    <td>响应码</td>
                                    <td>return_code</td>
                                    <td>String(11)</td>
                                    <td>是</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>消息码</td>
                                    <td>return_msg</td>
                                    <td>String(10)</td>
                                    <td>是</td>
                                    <td><a class="doc-link skip_link jump_trade_response" href="javascript:void(0);">见附录6.2响应码表</a></td>
                                </tr>
                                <tr>
                                    <td>商户订单号</td>
                                    <td>out_trade_no</td>
                                    <td>String(1,40)</td>
                                    <td>是</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商品金额</td>
                                    <td>total_fee</td>
                                    <td>String(3)</td>
                                    <td>是</td>
                                    <td>定值：MD5</td>
                                </tr>
                                <tr>
                                    <td>支付方式</td>
                                    <td>trade_type</td>
                                    <td>String(3)</td>
                                    <td>是</td>
                                    <td>ALIPAY:支付宝,QQPAY:QQ钱包,WXPAY:微信支付</td>
                                </tr>
                                <tr>
                                    <td>签名串</td>
                                    <td>sign</td>
                                    <td>String(32)</td>
                                    <td>是</td>
                                    <td>除signature字段外，其它字段都参与MD5签名。</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="doc-common-content order_MQ002">
                        <p class="doc-content-title">支付订单查询</p>
                        <div class="doc-content-container">
                            <p>接口APIURL：https://api.pay.98imo.com/query.do  请求类型：POST  </p>
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
                                    <td>商户ID</td>
                                    <td>mch_id</td>
                                    <td>String(1,32)</td>
                                    <td>是</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商户应用唯一标识</td>
                                    <td>appid</td>
                                    <td>String(1,32)</td>
                                    <td>是</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商户订单号</td>
                                    <td>out_trade_no</td>
                                    <td>String(1,40)</td>
                                    <td>是</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>数据签名</td>
                                    <td>sign</td>
                                    <td>String(32)</td>
                                    <td>是</td>
                                    <td>sign，其它字段都参与MD5签名</td>
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
                                    <td>响应码</td>
                                    <td>return_code</td>
                                    <td>String(11)</td>
                                    <td>是</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>消息码</td>
                                    <td>return_msg</td>
                                    <td>String(10)</td>
                                    <td>是</td>
                                    <td><a class="doc-link skip_link jump_trade_response" href="javascript:void(0);">见附录6.2响应码表</a></td>
                                </tr>
                                <tr>
                                    <td>商户订单号</td>
                                    <td>out_trade_no</td>
                                    <td>String(1,40)</td>
                                    <td>是</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>订单支付状态</td>
                                    <td>status</td>
                                    <td>String(1,40)</td>
                                    <td>是</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商品金额</td>
                                    <td>total_fee</td>
                                    <td>String(3)</td>
                                    <td>是</td>
                                    <td>定值：MD5</td>
                                </tr>
                                <tr>
                                    <td>支付方式</td>
                                    <td>trade_type</td>
                                    <td>String(3)</td>
                                    <td>是</td>
                                    <td>ALIPAY:支付宝,QQPAY:QQ钱包,WXPAY:微信支付</td>
                                </tr>
                                <tr>
                                    <td>签名串</td>
                                    <td>sign</td>
                                    <td>String(32)</td>
                                    <td>是</td>
                                    <td>除signature字段外，其它字段都参与MD5签名。</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="doc-common-content server_N001">
                        <p class="doc-content-title">支付结果通知</p>
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
                                    <td>响应码</td>
                                    <td>return_code</td>
                                    <td>String(11)</td>
                                    <td>是</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>消息码</td>
                                    <td>return_msg</td>
                                    <td>String(10)</td>
                                    <td>是</td>
                                    <td><a class="doc-link skip_link jump_trade_response" href="javascript:void(0);">见附录6.2响应码表</a></td>
                                </tr>
                                <tr>
                                    <td>商户订单号</td>
                                    <td>out_trade_no</td>
                                    <td>String(1,40)</td>
                                    <td>是</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>商品金额</td>
                                    <td>total_fee</td>
                                    <td>String(3)</td>
                                    <td>是</td>
                                    <td>定值：MD5</td>
                                </tr>
                                <tr>
                                    <td>支付方式</td>
                                    <td>trade_type</td>
                                    <td>String(3)</td>
                                    <td>是</td>
                                    <td>ALIPAY:支付宝,QQPAY:QQ钱包,WXPAY:微信支付</td>
                                </tr>
                                <tr>
                                    <td>签名串</td>
                                    <td>sign</td>
                                    <td>String(32)</td>
                                    <td>是</td>
                                    <td>除signature字段外，其它字段都参与MD5签名。</td>
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
                                    <td>是</td>
                                    <td>Y通知成功<br>
                                        N通知失败(现在支付未收到success=Y,后端将按规则默认重发通知)</td>
                                </tr>
                                </tbody>
                            </table>
                            <p class="doc-sub-title">服务端通知接口接入注意事项：</p>
                            <p></p><p>1.通知方式采用HTTPS POST方式通知；</p>
                            <p>2.报文数据以字符串流的形式放在报文体中，所以直接getParameter是得不到数据的。</p>

                        </div>
                    </div>
                    <div class="doc-common-content MD5_autograph">
                        <p class="doc-content-title">交易的MD5签名逻辑</p>
                        <div class="doc-content-container">
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
                                    <td>SUCCESS</td>
                                    <td>成功</td>
                                </tr>
                                <tr>
                                    <td>FAIL</td>
                                    <td>失败</td>
                                </tr>
                                <tr>
                                    <td>UNKNOWN</td>
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
                                    <td>1</td>
                                    <td>订单未处理</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>订单支付成功</td>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>订单支付失败</td>
                                </tr>
                                <tr>
                                    <td>-1</td>
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
                                    <td>08</td>
                                    <td>扫码支付</td>
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
                                    <td>WXPAY</td>
                                    <td>微信</td>
                                </tr>
                                <tr>
                                    <td>ALIPAY</td>
                                    <td>支付宝</td>
                                </tr>
                                <tr>
                                    <td>QQPAY</td>
                                    <td>手机QQ</td>
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
                            <p class="doc-text-frame">data%3Aimage%2Fpng%3Bbase64%2CiVBORw0KGgoAAAANSUhEUgAAASwAAAEsCAIAAAD2HxkiAAAFt0lEQVR42u3a... ... ..VORK5CYII%3D(图片格式，需做urldecode)</p>
                            <p class="font-weight">outputType=1 时：</p>
                            <p class="doc-text-frame">weixin%3A%2F%2Fwxpay%2Fbiz....rl%3Fpr%3DeyDG5zd </p>
                        </div>
                    </div>
                    <div class="doc-common-content sdk">
                        <p class="doc-content-title">SDK下载</p>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>平台语言</th>
                                <th>下载</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>PHP</td>
                                <td><a href="" >下载</a> </td>
                            </tr>
                            </tbody>
                        </table>
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
            </div>
            <div>
                <span class="footer-content-title">产品<br></span>
                <span class="footer-content-content"><a target="_blank" href="/phonePay">手机网页支付</a><br></span>
                <span class="footer-content-content"><a target="_blank" href="/pcPay">PC网页支付</a><br></span>
                <span class="footer-content-content"><a target="_blank" href="/scanPay">扫码支付</a><br></span>
                <span class="footer-content-content"><a target="_blank" href="/cardPay">卡牌支付</a><br></span>
            </div>
            <div>
                <span class="footer-content-title">开发者中心<br></span>
                <span class="footer-content-content"><a target="_blank"  href="/support/doc">API文档</a><br></span>
                <span class="footer-content-content"><a target="_blank"  href="/support/sdkDownload">SDK下载</a><br></span>
            </div>

            <div>
                <span class="footer-content-title">帮助<br></span>
                <span class="footer-content-content"><a target="_blank"  href="/support/help">常见问题</a><br></span>
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
                <a  target="_blank" title="查看微博" href="https://weibo.com/xuzuxing"><span class="footerContact footerWay2"></span></a>
            </div>

        </div>
        <div class="footer-ICP">
            <span class=" h8" style="display: inline">Mofee聚合支付&nbsp;2017&nbsp;桂ICP备13029197号<img src="/static/ipay/images/beian.png"></span>
        </div>
    </div>
</div>
</html>
