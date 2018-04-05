<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpStudy\PHPTutorial\WWW\mofee\public/../data/template/admin/entry\login.html";i:1521975030;}*/ ?>


<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    <title>后台管理 - Mofee聚合支付</title>
    <link rel="apple-touch-icon" href="/static/favicon.ico">
    <link rel="shortcut icon" href="/static/favicon.ico">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/static/ziliao/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/ziliao/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/static/ziliao/css/site.min.css?v=2.5">
    <!--     <link rel="stylesheet" href="/static/ziliao/css/site.css"> -->
    <!-- Plugins -->
    <link rel="stylesheet" href="/static/ziliao/css/animsition.css">
    <link rel="stylesheet" href="/static/ziliao/css/asScrollable.css">
    <link rel="stylesheet" href="/static/ziliao/css/switchery.css">
    <link rel="stylesheet" href="/static/ziliao/css/introjs.css">
    <link rel="stylesheet" href="/static/ziliao/css/slidePanel.css">
    <link rel="stylesheet" href="/static/ziliao/css/flag-icon.css">
    <link rel="stylesheet" href="/static/ziliao/css/login-v3.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="/static/ziliao/css/font-awesome.css">
    <link rel="stylesheet" href="/static/ziliao/css/web-icons.min.css">
    <link rel="stylesheet" href="/static/ziliao/css/brand-icons.min.css">
    <link rel="stylesheet" href="/static/ziliao/css/bootstrap-select.css">
    <!--   <link rel='stylesheet' href='css/37f756b23ce74d88b1135de62053e053.css'> -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <!--[if lt IE 10]>
    <script src="js/media.match.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <!-- Scripts -->
    <script src="/static/ziliao/js/jquery.js"></script>
    <script src="/static/ziliao/js/breakpoints.js"></script>
    <script>
        Breakpoints();
    </script>
</head>




<style type="text/css">
    input:-webkit-autofill {-webkit-box-shadow: 0 0 0px 1000px white inset !important;}
</style>

<body class="animsition page-login-v3 layout-full">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Page -->
<div class="page vertical-align text-xs-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <div class="panel">
            <div class="panel-body">
                <div class="brand">
                    <h2 class="brand-text font-size-18">Mofee聚合支付</h2>
                </div>
                <form method="post"  autocomplete="off">
                    <input type="hidden" name="token" value="<?php echo md5(time()) ;?>" />

                    <div class="alert alert-danger text-center" style="display: none">
                    </div>
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="text" class="form-control" name="username" id="inputEmail" />
                        <label class="floating-label">商户ID</label>
                    </div>
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="password" class="form-control" name="password" id="inputPassword"/>
                        <label class="floating-label">密码</label>
                    </div>
                    <div id="verifyCode" class="form-group form-material floating row" data-plugin="formMaterial">
                        <div class="col-md-6 col-xs-12">
                            <input maxlength="5" id="captcha" type="text" class="form-control col-sm-6" />
                        </div>
                        <img id="img_code" src="<?php echo captcha_src(); ?>?suffix=e_login" height="33px;" width="140px;" alt="" onclick="javascript:refresh();" />
                    </div>
                    <div class="form-group clearfix">
                        <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg pull-xs-left">
                            <input id="inputCheckbox" type="checkbox" name="rememberme" />
                            <label for="inputCheckbox">自动登录</label>
                        </div>
                        <a class="pull-xs-right" href="pwreset.php">忘记密码?</a>
                    </div>
                    <button type="button" class="btn btn-success btn-block btn-lg m-t-40" id="buttonClick">登录</button>
                </form>
                <p><a href="/user/regon" target="_blank">立即申请注册商户!</a></p>
            </div>
        </div>
        <footer class="page-copyright page-copyright-inverse">
            <p>© 2018. Mofee聚合支付</p>
        </footer>
    </div>
</div>
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
<script src="/static/ziliao/js/switchery.min.js"></script>
<script src="/static/ziliao/js/intro.js"></script>
<script src="/static/ziliao/js/screenfull.js"></script>
<script src="/static/ziliao/js/jquery-slidepanel.js"></script>

<script src="/static/ziliao/js/bootstrap-markdown.js"></script>
<script src="/static/ziliao/js/bootstrap-select-one.js"></script>
<!--   <script src="/static/admin/marked.js"></script>
  <script src="/static/admin/to-markdown.js"></script> -->


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
<script src="/static/layer/layer.js"></script>
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



</body>
</html>


<script>
    $(function(){
        $(document).keydown(function(e){
            if( e.keyCode == 13 ){
                var cus='';
                $(".panel-body input").each(function(){
                    if($(this).is(":focus")) cus='true';
                });
                if(cus=='true') {
                    btnlogin();
                    return false;
                }
            }
        });
        $("#buttonClick").click(function(){
            btnlogin();
            return false;
        });
    });
    function btnlogin(){
        var username = $("#inputEmail").val();
        if (username == null || username == "") {
            $(".alert").show();
            $(".alert").text('请输入账户');
            return;
        }
        var password = $("#inputPassword").val();
        if (password == null || password == "") {
            $(".alert").show();
            $(".alert").text('请输入密码');
            return;
        }
        var captcha = $("#captcha").val();
        if (captcha == null || captcha == "") {
            $("#loginName_warning").show();
            $("#loginName_warning_text").html("请输入验证码");
            return;
        }
        var postData = {
                "name" : username,
                "pass" : password,
                "captcha" : captcha
        };
        if($("#buttonClick").data("submit")){
            return false;
        }
        $("#buttonClick").text("登陆中...");
        $("#buttonClick").data("submit","submit");
        $.post("/admin/login",postData,function(data){
            if(data.code=="1"){
                window.location.href = "/admin";
            }else{
                refresh();
                $("#buttonClick").removeData("submit");
                $(".alert").show();
                $(".alert").text(data.msg);
                $("#buttonClick").text("登陆");
            }
        },"json");
    }
    $("#inputEmail,#inputPassword").focus(function(){
        $(".alert").hide();
    });

    //刷新验证码
    function refresh() {
        $("#captcha").val("");
        var d = new Date();
        $("#img_code").attr("src", "<?php echo captcha_src(); ?>?suffix=e_login&?d=" + d.getTime());
    }

</script>



