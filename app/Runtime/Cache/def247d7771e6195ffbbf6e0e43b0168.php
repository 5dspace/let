<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>注册 | 乐淘</title>
        <meta name="description" content="乐淘是一个学生校园生活信息平台, 包括学生二手, 学生兼职, 学生团购信息">
	<meta name="keywords" content="乐淘, 广州大学城二手信息, 广州大学城兼职, 广州大学城校园生活平台">
	<meta name="baidu-site-verification" content="Ra7kW2mD8g">
	<meta name="360-site-verification" content="957d07164ae6d60113e64742e4479173">
	<meta property="qc:admins" content="033324556011704536375">
	<meta name="google-site-verification" content="KF0hpvpZku4zUJdTPfVJI2z_h1Oq00NwotqhywCdbGs">

	<script src="/style/js/intl_season/jquery-1.8.2.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    var APP = "__APP__",
        URL = "__URL__",
        domainExtraURL = "domainURL",
        imgExtraURL = "imgURL",
        staticExtraURL = "staticURL";

</script>
	
	<link type="text/css" rel="stylesheet" href="/style/css/common/public.css?v=<?php echo ($VERSION); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="http://t.xiaoplus.com/style/img/common/icon/xiaotao.ico">
	<script src="/style/js/intl_season/xt_home.js" type="text/javascript" charset="utf-8"></script>
	<script src="/style/js/common/public.js" type="text/javascript" charset="utf-8"></script>
	<script src="/style/js/common/header_all.js" type="text/javascript" charset="utf-8"></script>
	<link type="text/css" rel="stylesheet" href="/style/css/intl_season/xt_home.css?v=<?php echo ($VERSION); ?>">
	<link type="text/css" rel="stylesheet" href="/style/css/intl_season/style.css?v=<?php echo ($VERSION); ?>">
	<link type="text/css" rel="stylesheet" href="/style/css/common/footer_all.css?v=<?php echo ($VERSION); ?>">


        <link type="text/css" rel="stylesheet" href="/style/css/intl_register/v1/xt_register.css?v=<?php echo ($VERSION); ?>" />
    </head>
    <body>
        <div class="headerBox comWidth clearfix">
		<div class="header">
			<div class="logo fl">
				<a href="domainURL">
					<img src="/static/img/logo.png" alt="xiaotao" />
				</a>
			</div>
			<div class = "header_middle fl">
				<ul class="fr">
					<li>|&nbsp
						<a href="domainURL/Pub">免费发布信息</a>
					</li>

					<?php if(isset($_SESSION['uname'])): ?><li>
						<a href="javascript:void(0);" id="loginout" class="login-out" >
							退出
						</a>
						</li>
						<li>
						<a href="domainURL/Account/info">欢迎,<?php echo ($_SESSION['uname']); ?></a>
						</li>
						
					<?php else: ?>
						<li>
						<a href="domainURL/Login">会员登陆</a>
						</li>
						<li>
						<a href="domainURL/Register">免费注册</a></li>
						</li><?php endif; ?>

				</ul>
				<div class="searchBox">
				<div>
					<input type="text" class="search_input fl" id="search-input-box" />
					<input type="submit" class="search_btn fl site-search-btn" value="搜索"/>
				</div>
					<div class="heatSearch">
						热门搜索：
						<a href="/Search/index?search=英语&amp;type=4&amp;sub=0&amp;low=0&amp;high=20000">英语&nbsp&nbsp</a>
					</div>
				</div>
			</div>
			<div class="left fr">
				<div class="sdCode fl">
					<img src="/static/img/qrcode.jpg" alt="xiaotao">
					<div class="ss">扫一扫</div>
					
				</div>
				<div class="mm fl">手机也能乐淘</div>
			</div>
		</div>
	</div>
        <div class="site-main bg-index-site">
            <form action="" method="post"  id="form-register">
                <div class="site-register">
                    <div id="tip"></div>
                    <div class="form-input"><label for="user" class="con">用户名</label><input type="text" input_type="name" id="user" placeholder="用户名" autocomplete="off" /><span class="register-notice"></span></div>
                    <div class="form-input"><label for="user" class="con">邮箱</label><input type="email" input_type="mail" id="email" placeholder="邮箱" autocomplete="off" /><span class="register-notice"></span></div>
                    <div class="form-input"><label for="user" class="con">密码</label><input type="password" id="pwd" input_type="pwd" placeholder="密码长度为6-16位" autocomplete="off" /><span class="register-notice"></span></div>
                    <div class="form-input"><label for="verifyCode" class="con">验证码</label><input type="text" placeholder="验证码" id="verifyCode" /><img src="domainURL/Public/verifyCode" alt="验证码" title="点击更换验证码" id="verify" /></div>
                    <div class="form-input"><a class="btn btn-blue" id="submitRegister">同意以下协议并注册</a><a href="domainURL/Register/deal" id="deal" target="_blank">乐淘使用协议</a></div>
                </div>
                <div class="site-login">
                    <h2>已有账号?</h2><a href="domainURL/Login">登录</a>
                    <div class="wb-login">
                        <div class="sns-login-tip"><span>使用其他账户:</span></div> <!--a href="<?php echo U('Login/login?type=qq');?>" class="qq-login" title="QQ"></a--><a href="<?php echo U('Login/login?type=sina');?>" class="weibo-login" title="新浪微博"></a>
                    </div>
                </div>
            </form>
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

        <script type="text/javascript" src="/style/js/intl_register/v1/xt_register.js?v=<?php echo ($VERSION); ?>"></script>
    </body>
</html>