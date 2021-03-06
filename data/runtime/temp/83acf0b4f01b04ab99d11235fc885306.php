<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpStudy\PHPTutorial\WWW\mofee\public/../data/template/user/index\register.html";i:1521298714;}*/ ?>
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

    <title>Mofee聚合支付 - 免签聚合支付平台｜提供安全快捷的支付方式</title>

    <link href="/static/user/css/global_mod_min.css?t=201801052358" rel="stylesheet" type="text/css" />

    <link href="/static/user/css/index_min.css?t=201801052358" rel="stylesheet" type="text/css" />

    <link href="/static/user/css/apply_min.css?t=201801052358" rel="stylesheet" type="text/css" />

    <link href="/static/user/css/style.css?t=201801052358" rel="stylesheet" type="text/css" />

    <script src="/static/user/js/jquery-1.9.1.js?t=201801052358"></script>

</head>
<body class="apply g-wholepage bussiness js-nodehide">
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
                    <a href="#" class="mod-topbar-item">欢迎使用Mofee聚合支付！</a>
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
                        您好，<span id="header_comp_name"><?php echo (time()); ?></span>
                        <span class="v-line">|</span>
                    </li>
                    <li class="header-nav-li header-nav-develop">
                        <a href="/support/wiki.html" class="header-nav-a" target="_blank">开发文档</a>
                        <span class="v-line">|</span>
                    </li>
                    <li class="header-nav-li header-nav-help">
                        <a href="/support/help.html" class="header-nav-a" target="_blank">帮助中心</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 头部 //END -->
        <div class="g-container">
            <div class="g-content">
            <h2 class="mod-title">
                <span class="title">新增商户接入</span>
            </h2>
            <div id="container_wrap" class="show-loading-content">
                <!--<h2 class="mod-title">
                <!-- 填写信息 [[ -->
                <div class="section-form">
                    <form id="edit_form" class="mod-form ext-form-large ">
                        <!-- 联系信息 [[ -->
                        <div class="info-contact">
                            <h2 class="mod-title ext-subtitle-border">
                                <span class="title">联系信息</span>
                            </h2>

                            <div class="form-line g-row">
                                <label class="form-label g-col-9"><span class="highlight">*</span> 联系人姓名：</label>
                                <div class="form-element g-col-19">
                                    <div class="form-element-inner">
                                        <input id="contact" name="contact" type="text" class="form-text" value="" /></div>
                                    <div class="form-tips">请填写联系人。</div>
                                </div>
                                <div class="result g-col-2 "></div>
                            </div>

                            <div class="form-line g-row form-line-phone">
                                <label class="form-label g-col-9"><span class="highlight">*</span> 手机号码：</label>
                                <div id="mobile_style" class="form-element g-col-19 "><!-- 填写号码成功加class "show-ok" -->
                                    <div class="form-element-inner">
                                        <input type="text" disabled="disabled" class="phone-text" value="+86">
                                        <input id="mobile" name="mobile" type="text" class="form-text" value="" />
                                    </div>
                                    <div class="form-tips">该号码非常重要，将接收与支付管理相关的重要信息。</div>
                                </div>
                                <div class="result g-col-2 "></div>
                            </div>
                            <div class="form-line g-row">
                                <label class="form-label g-col-9"><span class="highlight">*</span> 联系邮箱：</label>
                                <div class="form-element g-col-19">
                                    <div class="form-element-inner">
                                        <input id="email" name="email" value="" type="text" class="form-text" />
                                        <a id="send" data-handler="getCodeEvent" class="getcode js-iterator" href="javascript:getCode();">发送验证码</a>
                                    </div>
                                    <div class="form-tips">该邮箱非常重要，将接收如商户平台登录账号、密码等重要信息。</div>
                                </div>
                                <div class="result g-col-2 "></div>
                            </div>
                            <div id="code_div" class="form-line g-row">
                                <label class="form-label g-col-9"><span class="highlight">*</span> 注册验证码：</label>
                                <div class="form-element g-col-19">
                                    <div class="form-element-inner">
                                        <input id="code" name="code" type="text" class="form-text"/>
                                    </div>
                                    <div class="form-tips">请输入6位数字验证码。</div>
                                </div>
                                <div class="result g-col-2"></div>
                            </div>

                            <div class="form-line g-row">
                                <label class="form-label g-col-9"><span class="highlight">*</span> 联系QQ：</label>
                                <div class="form-element g-col-19">
                                    <div class="form-element-inner">
                                        <input id="qq" name="qq" value="" type="text" class="form-text">
                                    </div>
                                </div>
                                <div class="result g-col-2 "></div>
                            </div>
                        </div>
                        <!-- 联系信息 ]] -->

                        <!-- 经营信息 [[ -->
                        <div class="info-contact">
                            <h2 class="mod-title ext-subtitle-border"><span class="title">接入信息</span></h2>
                            <div class="form-line g-row form-question-line">
                                <label class="form-label g-col-9"><span class="highlight">*</span> 商户简称：</label>
                                <div class="form-element g-col-19 new-element-padding">
                                    <div class="form-element-inner relative">
                                        <input id="shortname" name="merchant" value="" type="text" class="form-text" />
                                    </div>
                                    <div class="form-tips">商户支付识标。</div>

                                </div>
                                <div class="result g-col-2 "></div>
                            </div>

                            <div class="form-line g-row">
                                <label class="form-label g-col-9"><span class="highlight">*</span> 接入网站：</label>
                                <div class="form-element g-col-19">
                                    <div class="form-element-inner">
                                        <input id="phone" name="website" value="" type="text" class="form-text" />
                                    </div>
                                    <div class="form-tips">接入网站域名需以http或https开头，且域名需ICP备案。</div>
                                </div>
                                <div class="result g-col-2 "></div>
                            </div>
                            <div class="form-line g-row">
                                <label class="form-label g-col-9"><span class="highlight">*</span> 结算方式：</label>
                                <div class="form-element g-col-19">
                                    <div class="form-element-inner">
                                        <input id="wxpay" name="payment" value="wxpay" type="radio"  /><span>微信支付</span>
                                        <input id="alipay" name="payment" value="alipay" type="radio"  /><span>支付宝支付</span>
                                    </div>
                                    <div class="form-tips">请选择“微信支付” 或者 “支付宝支付”其中一个，无法更改。</div>
                                </div>
                                <div class="result g-col-2 "></div>
                            </div>
                            <div class="form-line g-row">
                                <label class="form-label g-col-9"><span class="highlight">*</span> 结算账户：</label>
                                <div class="form-element g-col-19">
                                    <div class="form-element-inner">
                                        <input id="account" name="account" value="" type="text" class="form-text" />
                                    </div>
                                    <div class="form-tips">请填写结算收款账户。</div>
                                </div>
                                <div class="result g-col-2 "></div>
                            </div>
                        </div>
                        <!-- 经营信息 ]] -->
                        <div class="form-line-btn g-row">
                            <div class="form-element">
                                <div class="form-element-inner">
                                    <button class="mod-btn ext-btn-blue" type="button" onclick="apply()">提交申请</button></div>
                            </div>
                        </div>
                    </form>
                    <script type="text/javascript">
                        $(function(){
                            $("#code_div").hide();
                            document.onkeydown = function(e)
                            {
                                var ev = document.all ? window.event : e;
                                if(ev.keyCode==13)
                                {
                                    apply();
                                }
                            }
                        });

                        //验证码
                        function getCode() {
                            var postData = {
                                'email': $("#email").val(),
                                'name': $("#contact").val(),
                            };
                            $.ajax({
                                type : 'GET',
                                dataType : 'json',
                                url : '/api/sendmail?action=getcode',
                                data: postData,
                                success : function(result) {
                                    if (result.code == '1') {
                                        layer.msg('发送成功',{icon:1});
                                        $("#code_div").show();
                                        $("#send").show();
                                    } else {
                                        layer.msg(result.msg,{icon:2})
                                    }
                                }
                            })
                        }

                        //申请
                        function apply() {
                            var postData = $("#edit_form").serialize();
                            $.ajax({
                                type : 'POST',
                                dataType : 'json',
                                url : '/user/regin?action=settle',
                                data : postData,
                                success : function(result) {
                                    if (result.code == '1') {
                                        layer.msg('商户申请提交成功，请耐心等待邮件',{icon:1});
                                        setTimeout(function () {
                                            //跳转结算记录
                                            window.location.href = "/user/login?action=regon";
                                        }, 1000);
                                    } else {
                                        $("#code_div").show();
                                        layer.msg(result.msg,{icon:2})
                                    }
                                }
                            })
                        }

                    </script>
                </div>
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
<script src="/static/layer/layer.js?t=201801052358"></script>
</body>
</html>