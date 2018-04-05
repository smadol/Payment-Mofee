<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpStudy\PHPTutorial\WWW\mofee\public/../data/template/admin/login\index.html";i:1521972356;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>登录 - Momo后台管理 </title>

    <meta name="description" content="OneUI - Admin Dashboard Template & UI Framework">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="/static/oenui/img/favicons/favicon.png">

    <link rel="icon" type="image/png" href="/static/oenui/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/static/oenui/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/static/oenui/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/static/oenui/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="/static/oenui/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="/static/oenui/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/static/oenui/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/static/oenui/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/static/oenui/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/static/oenui/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/static/oenui/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/static/oenui/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/static/oenui/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/static/oenui/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- OneUI CSS framework -->
    <link rel="stylesheet" id="css-main" href="/static/oenui/css/oneui.css">
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="/static/oenui/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
<div class="bg-white pulldown">
    <div class="content content-boxed overflow-hidden">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <div class="push-30-t push-50 animated fadeIn">
                    <div class="text-center">
                        <i class="fa fa-2x fa-circle-o-notch text-primary"></i>
                        <p class="text-muted push-15-t">A perfect match for your project</p>
                    </div>
                    <form class="js-validation-login form-horizontal push-30-t" method="post">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary floating">
                                    <input class="form-control" type="text" id="login-username" name="login-username">
                                    <label for="login-username">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary floating">
                                    <input class="form-control" type="password" id="login-password" name="login-password">
                                    <label for="login-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <!--<input id="code" type="text" placeholder="验证码" class="form-control ">-->
                                <div class="form-material form-material-primary floating">
                                    <input class="form-control" type="text" id="login-code" name="login-code">
                                    <label for="login-password">验证码</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <img id="verify-img" height="38px;" src="<?php echo captcha_src(); ?>" onclick="refreshVerify()"  alt="验证码" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label class="css-input switch switch-sm switch-primary">
                                    <input type="checkbox" id="login-remember-me" name="login-remember-me"><span></span> Remember Me?
                                </label>
                            </div>
                            <div class="col-xs-6">
                                <div class="font-s13 text-right push-5-t">
                                    <a href="">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group push-30-t">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                <button class="btn btn-sm btn-block btn-primary" id="login" type="submit">Log in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pulldown push-30-t text-center animated fadeInUp">
    <small class="text-muted"><span class="js-year-copy"></span> &copy; OneUI 3.4</small>
</div>

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="/static/oenui/js/core/jquery.min.js"></script>
<script src="/static/oenui/js/core/bootstrap.min.js"></script>
<script src="/static/oenui/js/core/jquery.slimscroll.min.js"></script>
<script src="/static/oenui/js/core/jquery.scrollLock.min.js"></script>
<script src="/static/oenui/js/core/jquery.appear.min.js"></script>
<script src="/static/oenui/js/core/jquery.countTo.min.js"></script>
<script src="/static/oenui/js/core/jquery.placeholder.min.js"></script>
<script src="/static/layer/layer.js" type="text/javascript"></script>
<script src="/static/oenui/js/core/js.cookie.min.js"></script>
<script src="/static/oenui/js/app.js"></script>

<!-- Page JS Plugins -->
<script src="/static/oenui/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="/static/oenui/js/pages/base_pages_login.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        //登录操作
        $('#login').click(function(){
            var username=$('#login-username').val();
            var password=$("#login-password").val();
            var verify=$("#login-code").val();
            var ts = Date.parse(new Date())/1000;
            if(username!=""&&password!=""&&verify!=""){
                $("#login").html("登录中...").attr("disabled", true);
                $.ajax({
                    type:"post",
                    url:"<?php echo url('admin/login/login'); ?>",
                    dataType:"json",
                    data:{
                        "username":username,
                        "password":password,
                        "code":verify
                    },
                    success:function(data){
                        if(data.code == 1){
                            $("#login").html(data.msg);
                            window.location.href=data.data;
                        }else {
                            $("#login").html(data.msg).attr("disabled", false);
                            refreshVerify();
                            layer.alert(data.msg, {icon: 5});
                        }
                    }
                })
            }else{
                layer.alert("请检查您的输入！", {icon: 5});
                refreshVerify();
            }
        })
    });
    function refreshVerify() {
        var ts = Date.parse(new Date())/1000;
        $('#verify-img').attr("src", "<?php echo captcha_src(); ?>?id="+ts);
    }
</script>
</body>
</html>