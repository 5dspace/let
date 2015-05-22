<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>【乐淘】-免费发布信息-本地 免费 高效-<?php echo (getarea($_SESSION['proId'])); ?>-<?php echo ($schoolName); ?></title>
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
    <!-- <link type="text/css" rel="stylesheet" href="/style/css/common/school-select.css?v=<?php echo ($VERSION); ?>" /> -->
    <link type="text/css" rel="stylesheet" href="/style/css/intl_home/v1/xt_home.css?v=<?php echo ($VERSION); ?>" />
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
        <a href="domainURL" class="nav-item current">首页</a>
        <a href="domainURL" class="nav-item">乐淘二手</a>
    </div>
</div>
    <div class="site-main bg-index-site">
        <div class="site-body">
            <div class="side-guide-bar">
                <div class="fast-direction">
                    <strong>快速导航</strong>
                </div>
                <ul class="guide-lists">
                    <li class="side-guide-icons">
                        <h3 class="book-title"><a href="domainURL/Search/index?type=4&sub=0&low=0&high=20000">书籍教材</a>
                        </h3>
                        <a href="domainURL/Search/index?search=教材&type=4&sub=0&low=0&high=20000">教材教辅</a>
                        <a href="domainURL/Search/index?search=考研&type=4&sub=0&low=0&high=20000">考研</a>
                        <a href="domainURL/Search/index?search=英语&type=4&sub=0&low=0&high=20000">英语</a>
                    </li>
                    <li class="side-guide-icons">
                        <h3 class="digit-title"><a href="domainURL/Search/index?type=1&sub=0&low=0&high=20000">数码相关</a>
                        </h3>
                        <a href="domainURL/Search/index?search=手机&type=1&sub=0&low=0&high=20000">手机</a>
                        <a href="domainURL/Search/index?search=平板电脑&type=1&sub=0&low=0&high=20000">平板电脑</a>
                        <a href="domainURL/Search/index?search=数码配件&type=1&sub=0&low=0&high=20000">数码配件</a>
                    </li>
                    <li class="side-guide-icons">
                        <h3 class="sport-title"><a href="domainURL/Search/index?type=2&sub=0&low=0&high=20000">文体用具</a>
                        </h3>
                        <a href="domainURL/Search/index?search=体育&type=2&sub=0&low=0&high=20000">体育用品</a>
                        <a href="domainURL/Search/index?search=娱乐&type=2&sub=0&low=0&high=20000">娱乐工具</a>
                        <a href="domainURL/Search/index?search=文具&type=2&sub=0&low=0&high=20000">文具</a>
                    </li>
                    <li class="side-guide-icons">
                        <h3 class="life-title"><a href="domainURL/Search/index?type=3&sub=0&low=0&high=20000">生活相关</a>
                        </h3>
                        <a href="domainURL/Search/index?search=电器&type=3&sub=0&low=0&high=20000">电器</a>
                        <a href="domainURL/Search/index?search=日用&type=3&sub=0&low=0&high=20000">日常用品</a>
                        <a href="domainURL/Search/index?search=生活相关&type=3&sub=0&low=0&high=20000">其他</a>
                    </li>
                </ul>
            </div>
            <div id="slide">
                <div class="banner">
                    <ul>
                        <li>
                            <a href="#" style="width:520px;height:270px;">
                                <img style="width:520px;height:270px;" src="imgURL/data/activities/2014-5-5/biye.jpg" />
                            </a>
                        </li>
                        <li>
                            <a href="http://t.xiaoplus.com/Account/user/u/13883837" style="width:520px;height:270px;">
                                <img style="width:520px;height:270px;" src="imgURL/data/activities/2014-3-13/sanyue_01.jpg" />
                            </a>
                        </li>
                        <!--li><a href="domainURL/Activity/jdrebate"><img style="width:520px;height:270px;" src="imgURL/data/activities/2013-11-8/activity.png" alt="京东返利！满39元返利5%" /></a></li-->
                        <!--li><a href="domainURL"style="width:520px;height:270px;"><img style="width:520px;height:270px;" alt="乐淘微信" src="imgURL/data/activities/2013-9-15/wechat-xiaotao.png" /></a></li-->
                    </ul>
                </div>
            </div>
            <div id="roll">
                <div class="user-status">
                    <?php if(isset($_SESSION['uname'])): ?><a href="domainURL/Account/info" class="info-center">
                            <img class="status-user-img" src="imgURL/<?php echo ($_SESSION['user-img']); ?>" alt="用户头像" />
                            <strong>我的乐淘</strong>
                        </a>
                        <?php else: ?>
                        <a href="domainURL/Register" class="register">免费注册</a>
                        <i class="vertical-bar"></i>
                        <a href="domainURL/Login" class="login">登录</a><?php endif; ?>
                </div>
                <div id="panel">
                    <ul class="panel-guide">
                        <li class="panel-guide-1 selected">
                            <span>最新物品</span>
                        </li>
                        <li class="panel-guide-2">
                            <span>
                                <!--上升最快-->最新求购</span>
                        </li>
                        <li class="panel-guide-3">
                            <span>0元商品</span>
                        </li>
                    </ul>
                    <div class="clear"></div>
                    <div class="panel-bd">
                        <div class="panel-detail-1">
                            <ul class="panel-details">
                                <?php if(is_array($lastestTen)): $i = 0; $__LIST__ = $lastestTen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="slideList">
                                        <a class="imgLink" href="domainURL/Detail/index/id/<?php echo ($vo['pub_id']); ?>">
                                            <img src="imgURL/<?php echo ($vo['image_data']); ?>" alt="<?php echo ($vo['title']); ?>" />
                                        </a>
                                        <div class="content">
                                            <a class="title" href="domainURL/Detail/index/id/<?php echo ($vo['pub_id']); ?>" title="<?php echo ($vo['title']); ?>"><?php echo ($vo['title']); ?></a> 
                                            <span class="time"><?php echo (date("m月d日", $vo['ctime'])); ?></span>
                                            <span class="price">
                                                <?php if(is_numeric($vo['price'])): echo ($vo['price']); ?> 元
                                                    <?php else: echo ($vo['price']); endif; ?>
                                            </span>
                                        </div>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                        <div class="panel-detail-2">
                            <ul class="panel-details">
                                <?php if(is_array($buyTen)): $i = 0; $__LIST__ = $buyTen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="slideList">
                                        <a class="imgLink" href="domainURL/Detail/index/id/<?php echo ($vo['pub_id']); ?>">
                                            <img src="imgURL/<?php echo ($vo['image_data']); ?>" alt="<?php echo ($vo['title']); ?>" />
                                        </a>
                                        <div class="content">
                                            <a class="title" href="domainURL/Detail/index/id/<?php echo ($vo['pub_id']); ?>"><?php echo ($vo['title']); ?></a>
                                            <span class="time"><?php echo (date("m月d日", $vo['ctime'])); ?></span>
                                            <span class="price">
                                                <?php if(is_numeric($vo['price'])): echo ($vo['price']); ?> 元
                                                    <?php else: echo ($vo['price']); endif; ?>
                                            </span>
                                        </div>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                        <div class="panel-detail-3">
                            <ul class="panel-details">
                                <?php if(is_array($freeTen)): $i = 0; $__LIST__ = $freeTen;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="slideList">
                                        <a class="imgLink" href="domainURL/Detail/index/id/<?php echo ($vo['pub_id']); ?>">
                                            <img src="imgURL/<?php echo ($vo['image_data']); ?>" alt="<?php echo ($vo['title']); ?>" />
                                        </a>
                                        <div class="content">
                                            <a class="title" href="domainURL/Detail/index/id/<?php echo ($vo['pub_id']); ?>"><?php echo ($vo['title']); ?></a>
                                            <span class="time"><?php echo (date("m月d日", $vo['ctime'])); ?></span>
                                            <span class="price">
                                                <?php if(is_numeric($vo['price'])): echo ($vo['price']); ?> 元
                                                    <?php else: echo ($vo['price']); endif; ?>
                                            </span>
                                        </div>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="floor-index-wrap">
            <strong class="floor-index-wrap-title">所有类目</strong>
            <div class="floor-index-content">
                <div class="top-left">
                    <dl>
                        <dt class="life"><a href="domainURL/Search/index?type=4&sub=0&low=0&high=20000">书籍教材</a>
                        </dt>
                        <dd>
                            <div class="img-left">
                                <img src="/style/img/intl_home/btn/book.jpg" alt="乐淘书籍教材" />
                            </div>
                            <div class="box-mid">
                                <a href="domainURL/Search/index?search=教材&type=0&sub=0&low=0&high=20000" target="_blank">
                                    <strong>教材</strong>
                                </a>
                                <a href="domainURL/Search/index?search=教辅&type=0&sub=0&low=0&high=20000" target="_blank">教辅</a>
                                <a href="domainURL/Search/index?search=考研&type=0&sub=0&low=0&high=20000" target="_blank">考研</a>
                                <a href="domainURL/Search/index?search=工具书&type=0&sub=0&low=0&high=20000" target="_blank">工具书</a>
                                <br />
                                <a href="domainURL/Search/index?search=外语&type=0&sub=0&low=0&high=20000" target="_blank">
                                    <strong>外语</strong>
                                </a>
                                <a href="domainURL/Search/index?search=四六级&type=0&sub=0&low=0&high=20000" target="_blank">四六级</a>
                                <a href="domainURL/Search/index?search=托福&type=0&sub=0&low=0&high=20000" target="_blank">托福</a>
                                <a href="domainURL/Search/index?search=日语&type=0&sub=0&low=0&high=20000" target="_blank">日语</a>
                                <br />
                                <a href="domainURL/Search/index?search=文学&type=0&sub=0&low=0&high=20000" target="_blank">
                                    <strong>文学</strong>
                                </a>
                                <a href="domainURL/Search/index?search=小说&type=0&sub=0&low=0&high=20000" target="_blank">小说</a>
                                <a href="domainURL/Search/index?search=杂志&type=0&sub=0&low=0&high=20000" target="_blank">杂志</a>
                            </div>
                            <div class="box-right">
                                <a href="domainURL/Search/index?search=移动&type=0&sub=0&low=0&high=20000" target="_blank">
                                    <strong>移动开发</strong>
                                </a>
                                <a href="domainURL/Search/index?search=网页&type=0&sub=0&low=0&high=20000" target="_blank">网页制作</a>
                                <a href="domainURL/Search/index?search=法律&type=0&sub=0&low=0&high=20000" target="_blank">法律</a>
                                <br />
                                <a href="domainURL/Search/index?search=成功&type=0&sub=0&low=0&high=20000" target="_blank">
                                    <strong>成功</strong>
                                </a>
                                <a href="domainURL/Search/index?search=励志&type=0&sub=0&low=0&high=20000" target="_blank">励志</a>
                                <a href="domainURL/Search/index?search=金融&type=0&sub=0&low=0&high=20000" target="_blank">金融</a>
                                <a href="domainURL/Search/index?search=人际社交&type=0&sub=0&low=0&high=20000" target="_blank">人际社交</a>
                                <a href="domainURL/Search/index?search=心理学&type=0&sub=0&low=0&high=20000" target="_blank">心理学</a>
                                <br />
                                <a href="domainURL/Search/index?search=摄影&type=0&sub=0&low=0&high=20000" target="_blank">
                                    <strong>摄影</strong>
                                </a>
                                <a href="domainURL/Search/index?search=设计&type=0&sub=0&low=0&high=20000" target="_blank">设计</a>
                                <a href="domainURL/Search/index?search=书籍教材&type=0&sub=0&low=0&high=20000" target="_blank">其他</a>
                            </div>
                        </dd>
                    </dl>
                </div>
                <div class="top-right">
                    <dl>
                        <dt><a href="domainURL/Search/index?type=3&sub=0&low=0&high=20000">生活相关</a>
                        </dt>
                        <dd>
                            <div class="img-left">
                                <img src="/style/img/intl_home/btn/life.jpg" alt="乐淘_生活相关" />
                            </div>
                            <div class="box-mid">
                                <a href="domainURL/Search/index?search=洗衣机&type=0&sub=0&low=0&high=20000" target="_blank">
                                    <strong>洗衣机</strong>
                                </a>
                                <a href="domainURL/Search/index?search=电水壶&type=0&sub=0&low=0&high=20000" target="_blank">电水壶</a>
                                <a href="domainURL/Search/index?search=加热棒&type=0&sub=0&low=0&high=20000" target="_blank">加热棒</a>
                                <a href="domainURL/Search/index?search=电吹风&type=0&sub=0&low=0&high=20000" target="_blank">电吹风</a>
                                <br />
                                <a href="domainURL/Search/index?search=伞&type=0&sub=0&low=0&high=20000" target="_blank">
                                    <strong>伞</strong>
                                </a>
                                <a href="domainURL/Search/index?search=电磁炉&type=0&sub=0&low=0&high=20000" target="_blank">电磁炉</a>
                                <a href="domainURL/Search/index?search=创意物品&type=0&sub=0&low=0&high=20000" target="_blank">创意物品</a> 
                            </div>
                        </dd>
                    </dl>
                </div>
                <div class="bottom-left">
                    <dl>
                        <dt><a href="domainURL/Search/index?type=1&sub=0&low=0&high=20000">数码相关</a>
                        </dt>
                        <dd>
                            <div class="img-left">
                                <img src="/style/img/intl_home/btn/digit.jpg" alt="乐淘_数码相关" />
                            </div>
                            <div class="box-mid">
                                <a href="domainURL/Search/index?search=手机&type=0&sub=0&low=0&high=20000" target="_blank">
                                    <strong>手机</strong>
                                </a>
                                <a href="domainURL/Search/index?search=三星&type=0&sub=0&low=0&high=20000" target="_blank">三星</a>
                                <a href="domainURL/Search/index?search=小米&type=0&sub=0&low=0&high=20000" target="_blank">小米</a>
                                <a href="domainURL/Search/index?search=iphone&type=0&sub=0&low=0&high=20000" target="_blank">iPhone</a>
                                <br />
                                <a href="domainURL/Search/index?search=电脑&type=0&sub=0&low=0&high=20000" target="_blank">
                                    <strong>电脑</strong>
                                </a>
                                <a href="domainURL/Search/index?search=笔记本&type=0&sub=0&low=0&high=20000" target="_blank">笔记本</a>
                                <a href="domainURL/Search/index?search=平板&type=0&sub=0&low=0&high=20000" target="_blank">平板</a>
                                <a href="domainURL/Search/index?search=电脑配件&type=0&sub=0&low=0&high=20000" target="_blank">电脑配件</a>
                                <br />
                                <a href="domainURL/Search/index?search=相机&type=0&sub=0&low=0&high=20000" target="_blank">
                                    <strong>相机</strong>
                                </a>
                                <a href="domainURL/Search/index?search=单反&type=0&sub=0&low=0&high=20000" target="_blank">单反</a>
                                <a href="domainURL/Search/index?search=收音机&type=0&sub=0&low=0&high=20000" target="_blank">收音机</a>
                            </div>
                            <div class="box-right">
                                <a href="domainURL/Search/index?search=鼠标&type=0&sub=0&low=0&high=20000" target="_blank">
                                    <strong>鼠标</strong>
                                </a>
                                <a href="domainURL/Search/index?search=移动硬盘&type=0&sub=0&low=0&high=20000" target="_blank">移动硬盘</a>
                                <a href="domainURL/Search/index?search=U盘&type=0&sub=0&low=0&high=20000" target="_blank">U盘</a>
                                <a href="domainURL/Search/index?search=移动电源&type=0&sub=0&low=0&high=20000" target="_blank">移动电源</a>
                                <br />
                                <a href="domainURL/Search/index?search=显示器&type=0&sub=0&low=0&high=20000" target="_blank">
                                    <strong>显示器</strong>
                                </a>
                                <a href="domainURL/Search/index?search=无线网卡&type=0&sub=0&low=0&high=20000" target="_blank">无线网卡</a>
                                <a href="domainURL/Search/index?search=电脑工具&type=0&sub=0&low=0&high=20000" target="_blank">电脑工具</a>
                            </div>
                        </dd>
                    </dl>
                </div>
                <div class="bottom-right">
                    <dl>
                        <dt><a href="domainURL/Search/index?type=2&sub=0&low=0&high=20000">文体用具</a>
                        </dt>
                        <dd>
                            <div class="img-left">
                                <img src="/style/img/intl_home/btn/sport.jpg" alt="乐淘_文体用具" />
                            </div>
                            <div class="box-mid">
                                <a href="domainURL/Search/index?search=体育用具&type=0&sub=0&low=0&high=20000" target="_blank">
                                    <strong>体育用具</strong>
                                </a>
                                <a href="domainURL/Search/index?search=篮球&type=0&sub=0&low=0&high=20000" target="_blank">篮球</a>
                                <a href="domainURL/Search/index?search=足球&type=0&sub=0&low=0&high=20000" target="_blank">足球</a>
                                <a href="domainURL/Search/index?search=网球&type=0&sub=0&low=0&high=20000" target="_blank">网球</a>
                                <a href="domainURL/Search/index?search=游泳器材&type=0&sub=0&low=0&high=20000" target="_blank">游泳器材</a>
                                <br />
                                <a href="domainURL/Search/index?search=乐器&type=0&sub=0&low=0&high=20000" target="_blank">
                                    <strong>乐器</strong>
                                </a>
                                <a href="domainURL/Search/index?search=吉他&type=0&sub=0&low=0&high=20000" target="_blank">吉他</a>
                                <a href="domainURL/Search/index?search=饰品&type=0&sub=0&low=0&high=20000" target="_blank">饰品</a>
                                <br />
                                <a href="domainURL/Search/index?search=计算器&type=0&sub=0&low=0&high=20000" target="_blank">
                                    <strong>计算器</strong>
                                </a>
                                <a href="domainURL/Search/index?search=文具&type=0&sub=0&low=0&high=20000" target="_blank">文具</a>
                            </div>
                        </dd>
                    </dl>
                </div>
                <div class="clear"></div>
            </div>
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

    <!-- // <script type='text/javascript' src='/style/js/common/school-select.js?v=<?php echo ($VERSION); ?>'></script> -->
    <script type="text/javascript" src="/style/js/common/unslider.js?v=<?php echo ($VERSION); ?>"></script>
    <script type="text/javascript" src="/style/js/intl_home/v1/xt_home.js?v=<?php echo ($VERSION); ?>"></script>
</body>

</html>