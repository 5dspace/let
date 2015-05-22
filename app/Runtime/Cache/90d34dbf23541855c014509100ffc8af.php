<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>提示 | 乐淘</title>
        <meta name="description" content="乐淘是一个学生校园生活信息平台, 包括学生二手, 学生兼职, 学生团购信息" />
<meta name="keywords" content="乐淘, 广州大学城二手信息, 广州大学城兼职, 广州大学城校园生活平台" />
<meta name="baidu-site-verification" content="Ra7kW2mD8g" />
<meta name="360-site-verification" content="957d07164ae6d60113e64742e4479173" />
<meta property="qc:admins" content="033324556011704536375" />
<meta name="google-site-verification" content="KF0hpvpZku4zUJdTPfVJI2z_h1Oq00NwotqhywCdbGs" />
<script type="text/javascript">
    var APP = "__APP__",
        URL = "__URL__",
        domainExtraURL = "domainURL",
        imgExtraURL = "imgURL",
        staticExtraURL = "staticURL";
</script>
<link rel="shortcut icon" type="image/x-icon" href="http://t.xiaoplus.com/style/img/common/icon/xiaotao.ico" />
<link type="text/css" rel="stylesheet" href="/style/css/common/public.css?v=<?php echo ($VERSION); ?>" />
<link type="text/css" rel="stylesheet" href="/style/css/common/header_all.css?v=<?php echo ($VERSION); ?>" />
<link type="text/css" rel="stylesheet" href="/style/css/common/search_one.css?v=<?php echo ($VERSION); ?>" />
<link type="text/css" rel="stylesheet" href="/style/css/common/footer_all.css?v=<?php echo ($VERSION); ?>" />
        <link type="text/css" rel="stylesheet" href="/style/css/common/login_notify_error.css?v=<?php echo ($VERSION); ?>" />
    </head>
    <body>
    	<div class="header">
    <div class="nav-top">
        <ul class="user-info-wrap">
            <?php if(isset($_SESSION['uname'])): ?><li class="my-account-menu">
                    <a href="domainURL/Account/info"><img class="header-user-img" src="imgURL/<?php echo ($_SESSION['user-img']); ?>" alt="<?php echo ($_SESSION['uname']); ?>" title="<?php echo ($_SESSION['uname']); ?>"/></a>
                    <a href="domainURL/Account/info" class="user-uname"><?php echo ($_SESSION["uname"]); ?><i class="tri-dropdown tri"></i></a>
                    <ul class="dropdown-account">
                        <li><a href="domainURL/Account/info" >个人中心</a></li>
                        <li><a href="javascript:void(0);" id="loginout" class="login-out">退出</a></li>
                    </ul>
                </li>
            <?php else: ?>
                <li class="account-login-register">
                    <a href="domainURL/Login" id="header-active-login" class="header-login-btn">会员登陆</a>
                    <i class="vertical-bar"></i>
                    <a href="domainURL/Register" id="header-active-register">免费注册</a></li>
                </li><?php endif; ?>
            <li class="site-back separator-left"><a href="domainURL">返回主页</a></li>
        </ul>
    </div>
</div>
        <!--搜索栏-->
<div class="search-wrap">
    <div class="search-upper">
        <a href="domainURL" class="site-logo"><img src="/static/img/logo.jpg?v=<?php echo ($VERSION); ?>" alt="<?php echo ($schoolName); ?>" title="<?php echo ($schoolName); ?>"/><h1 style="height:0;width:0;margin:0;padding:0;display:block;font-size:0">乐淘</h1></a>
        <div class="school-info"></div>
        <div class="search-box-wrap">
            <input type="search" class="search-input-box" id="search-input-box" placeholder="想找什么? 输入类别名称或者关键词试试" />
            <div class="btn btn-blue site-search-btn">搜索</div>
            <div class="site-recommend"><a href="http://t.xiaoplus.com/Detail/index/id/204">联想笔记本</a><a href="#"></a><a href="#"></a></div>
        </div>
        <a href="domainURL/Pub" class="btn btn-blue site-publish">免费发布信息</a>
    </div>
</div>
        <div class="nav-menu-wrap">
    <div class="nav-box">
        <a href="domainURL" class="nav-item">首页</a>
        <a href="domainURL" class="nav-item">乐淘二手</a>
    </div>
</div>
        <div class="site-main bg-index-site">
            <div class="site-body error-notify">
                <h2>提示</h2>
                <div class="alert alert-info error-alert">
                    <strong>登陆后才能操作!</strong><a href="domainURL/Login" class="second" id="second">3</a>&nbsp;秒钟后跳转到登陆页面
        	</div>
        	<img class="error-img" src="/style/img/common/btn/error_bg.png" />
            </div>
        </div>
        <div class="footer">
    <ul class="help-block">
        <li class = "aboutXiaotao">
            <a href="domainURL/Register/deal" target="_blank">
                <span>使用条款</span>
            </a>
            <span>|</span>
        </li>
        <li class = "aboutXiaotao">
            <a href="domainURL/About/aboutUs.html">
                <span>关于乐淘</span>
            </a>
            <span>|</span>
        </li>
        <li class = "aboutXiaotao">
            <a href="http://weibo.com/u/3536655650">
                <span>加入乐淘</span>
            </a>
            <span>|</span>
        </li>
        <li class = "aboutXiaotao">
            <a href="http://weibo.com/u/3536655650">
                <span>联系乐淘</span>
            </a>
            <span>|</span>
        </li>
        <li class = "aboutXiaotao">
            <a href="http://weibo.com/u/3536655650">
                <span>关于5D</span>
            </a>
        </li>
    </ul>
    <dl class="partner-block">
    </dl>
    <div class="copyright">Copyright © 2014 All Rights Reserved. <a href="http://www.miitbeian.gov.cn/">粤ICP备05008892号</a></div>
</div>
<script type="text/javascript" src="/style/js/common/jquery-1.8.2.min.js?v=<?php echo ($VERSION); ?>"></script>
<script type="text/javascript" src="/style/js/common/public.js?v=<?php echo ($VERSION); ?>"></script>
<script type="text/javascript" src="/style/js/common/header_all.js?v=<?php echo ($VERSION); ?>"></script>
    
        <script type="text/javascript">
        	setInterval(function() {
        		$("#second").text(parseInt($("#second").text(), 10) - 1);
        		if ($("#second").text() === "1") {
        			window.location.replace("domainURL/Login");
        		}
        	}, 1000);

        </script>
    </body>

</html>