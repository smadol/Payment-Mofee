<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"D:\phpStudy\PHPTutorial\WWW\mofee\public/../data/template/index/index\index.html";i:1521288222;s:76:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\index\common\index-head.html";i:1521962415;s:76:"D:\phpStudy\PHPTutorial\WWW\mofee\data\template\index\common\index-foot.html";i:1521339555;}*/ ?>

<!DOCTYPE html>

<html class="mdl-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1,user-scalable=yes"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Mofee聚合支付 - 专业的支付服务提供商</title>
    <meta name="title" content="聚合支付" />
    <meta name="subject" content="移动支付、在线支付、网银支付、线下聚合、智能pos、跨境支付、线上聚合、代收代付、B2B业务、外卡业务" />
    <meta name="description" content="现在支付提供多种创新支付方式，为个人和企业提供多种主流支付方式，实现轻松快捷收款对账" />
    <meta name="keywords" content="聚合支付，微信、支付宝、银联、一键支付、应用内支付、移动支付、pos支付 " />
    <link rel="icon" href="/favicon.ico" mce_href="image/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" mce_href="image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/static/ipay/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/static/ipay/css/style.css">
    <link rel="stylesheet" type="text/css" href="/static/ipay/css/font.css">
    <link rel="stylesheet" type="text/css" href="/static/ipay/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="/static/ipay/css/media.css">
    <link rel="stylesheet" type="text/css" href="/static/ipay/css/swiper-3.4.2.min.css">
    <script type="text/javascript" media="" src="/static/ipay/js/jquery.min.js"></script>
    <script type="text/javascript" media="" src="/static/ipay/js/swiper-3.4.2.min.js"></script>
    <script type="text/javascript" media="" src="/static/ipay/js/bootstrap.min.js"></script>
    <script type="text/javascript" media="" src="/static/ipay/js/index.js"></script>
    <script type="text/javascript" media="" src="/static/ipay/js/plugins.js"></script>
    <!-- <script type="text/javascript"  src='js/particles.js'></script> -->
    <!-- <script type="text/javascript" media="" src="js/line.js"></script> -->

    <link rel="stylesheet" href="/static/ipay/css/material.min.css">
    <script src="/static/ipay/js/material.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/static/ipay/css/reset.css">

</head>
<body>
<div id="to-top">
</div>
<div class="header base col-lg-12 row">
    <div class="header-menu col-lg-8 col-md-12 col-lg-offset-2">
        <p class="header-menu-logo">
            <img style="padding-top:32px;" src="logo_v1.svg" alt="Mofee聚合支付">
        </p>
        <div class="header-menu-links">
            <div class="menu-product">
                <span class="h5">产品<div class="triangle"></div>
                </span>
                <p class="header-menu-borderP">
                </p>
                <div class="menu-product-content menu-hidd">
                    <div style="height: 200px;width: 200px;" class="menu-product-list menu-list">
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
                <span class="h5">开发者中心</span>
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
                <span class="h5">帮助</span>
                <p class="header-menu-borderP">
                </p>

            </div>
            <div class="menu-login-btn h4">
                <a target="_blank" class="h5" href="/user/regon">注册</a>
                / <a target="_blank" class="h5" href="/user/login">登录</a>
                <p class="header-menu-borderP">
                </p>
            </div>
        </div>
    </div>
</div>
<!--  -->
<div class="firstBack backScroll base">
</div>
<!-- <script type="text/javascript" src="js/particle.js"></script>
<canvas id="c_n21" width="702" height="950" style="position: fixed; top: 0px; left: 0px; z-index: -1; opacity: 1;"></canvas> -->

<div class="navbar navbar-default  navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color:#000" onclick="jump(this)" href="javascript:void(0)" data="/">
                <img src="/static/ipay/images/logo.png" alt="">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        产品 <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a  href="/phonePay">手机网页支付</a></li>
                        <li><a  href="/pcPay">PC网页支付</a></li>
                        <li><a  href="/scanPay">扫码支付</a></li>
                        <li><a  href="/cardPay">卡牌支付</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        开发者中心 <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/support/doc">API开发文档</a></li>
                        <li><a href="/support/sdkDownload">SDK下载</a></li>
                    </ul>
                </li>
                <li><a href="/support/help">帮助</a></li>
                <li><a target="_blank" class="h5" href="/user/regon">注册</a></li>
                <li><a target="_blank" class="h5" href="/user/index">登录</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="first-contet base">
    <div class="col-xs-12 col-sm-8 col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <div class="first-contet-left col-md-6 col-sm-8 col-xs-10">
            <div class="channelPanel 3dRotateEle" id="channelPanel">

                <div class="wapPay">
                    <p></p>
                    <span>网页支付</span>
                </div>

                <div class="mbWapPay">
                    <p></p>
                    <span>手机网页支付</span>
                </div>

                <div class="posPay">
                    <p></p>
                    <span>智能POS支付</span>
                </div>


                <div class="cNitiative">
                    <p></p>
                    <span>用户扫码支付</span>
                </div>
                <div class="more">
                    <p></p>
                    <span>即将上线更多产品</span>
                </div>
                <div class="bPassivity">
                    <p></p>
                    <span>商户扫码</span>
                </div>

                <div class="mbApp">
                    <p></p>
                    <span>手机APP支付</span>
                </div>
                <div class="wx">
                    <p></p>
                    <span>公众号支付</span>
                </div>
                <div class="cardPay" >
                    <p></p>
                    <span>卡牌支付</span>
                </div>

            </div>
        </div>

        <div class="first-contet-right col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2">
            <div class="first-contet-right-inner">
                <span id="gridShowTitle" class="first-contet-title h0">你需要的支付<br>都在这里<br></span>
                <!-- 3dRotateEle-inner -->
                <p id="gridShowContent" class="first-contet-p h5">
                    现在支付聚合平台，全渠道支付方式、高效对接、
                    简洁而强大的交易账务管理，专业为你服务。
                    <!-- <p class="first-contet-line">
                  </p> -->
                </p>
                <div class="first-contet-btn-div">
                    <p class="first-contet-btn  point-btn-back">
                        <a target="_blank" href="https://test.pay.98imo.cn/index.html" class="myButton-black point-btn mobile-btn-blc" title="体验支付Demo">体验支付Demo</a>
                        <!-- FAB button with ripple -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="first-footer base col-lg-12 row">
    <div class="first-footer-content col-md-12 col-lg-8  col-lg-offset-2 col-xs-12">
        <div class="speedDiv" id="speedDiv">

            <div class="first-footer-img">
        <span class="first-footerImgBigBack ">
          <span class="first-footerImgBack">
            <span class="speedImg"></span>
          </span>
        </span>
            </div>

            <div class="inlineBlock">
                <span class="first-footer-title">快速<br></span>
                <span class="first-footer-text">
          10分钟超快速响应<br>
          1V1专业客服服务<br>
          7*24小时技术支持
        </span>
            </div>

        </div>
        <div class="stabilityDiv" id="stabilityDiv">
            <div class="first-footer-img">
        <span class="first-footerImgBigBack">
          <span class="first-footerImgBack">
            <span class="stabilityImg"></span>
          </span>
        </span>
            </div>
            <div class="inlineBlock">
                <span class="first-footer-title">稳定<br></span>
                <span class="first-footer-text">多机房异地容灾系统<br>
          服务器可用性99.9%<br>
          专业运维团队值守
        </span>
            </div>
        </div>
        <div class="" id="saveDiv">
            <div class="first-footer-img">
        <span class="first-footerImgBigBack">
          <span class="first-footerImgBack">
            <span class="saveImg"></span>
          </span>
        </span>
            </div>
            <div class="inlineBlock">
                <span class="first-footer-title">安全<br></span>
                <span>严密而专业的风险控制<br></span>
                <span>不明交易实时监控</span>
        </span>
            </div>
        </div>
    </div>
</div>


<div class="second base col-md-12 row">
    <div class="second-content  col-md-12 col-lg-8  col-lg-offset-2  col-xs-12">
        <div class="second-content-header">
            <span class="h1">依托于强大的支付体系，我们做了更多的事</span>
        </div>
        <div class="second-content-content">
            <div class="second-block" id="second-block_1"  title="点击查看">
                <div class="second-block-img_1" id="second-block-img_1">

                </div>
                <span class="h20">支付宝支付</span>
                <span class="blue-line-med"></span>
                <p class="second-content-p h6">
                    为城商行伙伴推出的聚合支付标准化输出服务统一收款渠道、统一账单管理、统一手续费，降低接入成本。
                </p>
                 <a class="second-block-a_1" id="second-block-a_1" href="javascript:void(0)" >查看详情>></a>
            </div>

            <div class="second-block" id="second-block_2"  title="点击查看">
                <div class="second-block-img_2" id="second-block-img_2">

                </div>
                <span class="h20">微信支付</span>

                <span class="green-line-med"></span>
                <p class="second-content-p h6">
                    代付、分账、托管基于数百家银行的深度合作<br>
                    为银行与商户间搭建更多支付场景的桥梁。
                </p>
                 <a class="second-block-a_2" id="second-block-a_2" href="javascript:void(0)" >查看详情>></a>
            </div>

            <div class="second-block"  id="second-block_3"  title="点击查看">
                <div class="second-block-img_3" id="second-block-img_3">
                </div>
                <span class="h20">QQ钱包支付</span>
                <span class="red-line-med"></span>
                <p class="second-content-p h6">三大支付方式的跨境业务，在这里聚合为一。
                </p>
                 <a class="second-block-a_3" id="second-block-a_3" href="javascript:void(0)">查看详情>></a>
            </div>
        </div>
    </div>
</div>

<div class="forth base col-md-12">
    <div class="fifth base col-md-12 row">
        <span class="thirdTitle h1">现在，是解决问题的最好时间。</span>
        <div class="fifth-left">
            <div class="fifth-content">
                <div class="fifth-content-left">
                    <p class="fifth-title-left">
                        <span class="h1">体验一下吧！</span>
                        <span class="h5">你可以点击下方按钮注册体验我们的服务  </span>
                        <span class="h6">有任何问题，联系我们或者留下信息，我们将拜访你。</span>
                    <div class="fifth-title-left-experience">
                        <span>点击注册</span>
                        <span class="fifth-title-left-img"></span>
                    </div>
                    </p>
                </div>

                <div class="fifth-content-right">
                    <p class="fifth-title-right">
                        <span class="h1">我们如何联系你</span>
                    </p>
                    <!-- Simple Textfield -->
                    <form class="" action="" method="post" id="joinUsForm">

                        <input type="hidden" name="inbox" value="ipaynow@ipaynow.cn">
                        <!--  -->
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample3" name="name">
                            <label class="mdl-textfield__label" for="sample3">我们要如何称呼你</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample3" name="companyName">
                            <label class="mdl-textfield__label" for="sample3">公司名称</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample3" name="phone">
                            <label class="mdl-textfield__label" for="sample3">联系方式</label>
                        </div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" type="text" id="sample3" name="mailContent"></textarea>
                            <label class="mdl-textfield__label" for="sample3">合作方向，意见建议，备注等。</label>
                        </div>

                        <div class="fifth-content-right-btnDiv">
                            <p class="fifth-contet-btn">
                                <a href="javascript:void(0)" id="sendJoinUsBtn" class="myButton-black  fifth-right-btn mobile-btn-blc"  title="点击发送邮件">发送</a>
                            </p>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <span class="fifth-content-bottom-sd">
      </span>
    </div>

    <div class="sixth base col-md-12 row">
        <div class="sixth-help col-md-8 col-md-offset-2">
            <p class="sixth-help-content" >
            <div class="help-title-img"> </div>
            <span class="h1">需要帮助？<br></span>

            <div class="swiper-container-help swiper-help">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <ul class="sixth-help-ul h5">
                            <li><span>你们的渠道是与官方合作的吗？</span></li>
                            <li><span>后台注册为什么会被驳回？</span></li>
                            <li><span>注册后台提交的五证信息为什么不能是原件，非要是复印件呢？</span></li>
                        </ul>
                    </div>

                    <div class="swiper-slide">
                        <ul class="sixth-help-ul h5">
                            <li><span>三证合一在填写时如何进行填写？</span></li>
                            <li><span>结算账户我可以填写个人卡吗？</span></li>
                            <li><span>注册是支行信息如何进行填写？</span></li>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <ul class="sixth-help-ul h5">
                            <li><span>合同xxx位置是否可以更改？</span></li>
                            <li><span>我司法人已变更但是对公账户的法人尚未变更，能完成实名认证吗？</span></li>
                            <li><span>电子账户是以现在支付名义申请还是我司资质申请呢？</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            </p>
            <div class="sixth-contet-btn-div">
                <p class="sixth-contet-btn-back">
                    <a target="_blank" href="html/help/helpBase.html" class="sixth-help-btn myButton-black mobile-btn-blc"  title="前往帮助中心">查看更多</a>
                </p>
            </div>
            <div class="sixth-help-right">
            </div>
        </div>
    </div>
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


