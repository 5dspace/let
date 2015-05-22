<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php if(intval(htmlentities($_GET['sub'])) == 0): ?>全部<?php else: echo (getpubtype(intval(htmlentities($_GET['sub'] )))); endif; ?>&nbsp;-&nbsp;<?php if(intval(htmlentities($_GET['type'])) == 0): ?>全部<?php else: echo (getpubtype(intval(htmlentities($_GET['type'])))); endif; ?>&nbsp;-&nbsp;乐淘</title>
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


    <link type="text/css" rel="stylesheet" href="/style/css/common/school-select.css?v=<?php echo ($VERSION); ?>" />
    <link type="text/css" rel="stylesheet" href="/style/css/intl_search/v1/search_list.css?v=<?php echo ($VERSION); ?>" />
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
        <div class="site-body">
            <div class="select-box" id="select-box">
                 <div class="crumb search-index-crumb"><a href="domainURL">乐淘</a> >  <a href="domainURL/Search/index?type=<?php echo (intval(htmlentities($_GET['type']))); ?>&sub=0&low=0&high=20000" class="crumb-selected"><?php if(intval(htmlentities($_GET['type'])) == 0): ?>全部 <?php else: echo (getpubtype(intval(htmlentities($_GET['type'])))); endif; ?></a></div>
                <dl class="select-itm select-itm-type" id="type">
                    <dt>大类:</dt>
                    <dd>
                        <a href="domainURL/Search/index?type=0&sub=<?php echo (intval(htmlentities($_GET['sub']))); ?>&low=<?php echo (intval(htmlentities($_GET['low']))); ?>&high=<?php echo (intval(htmlentities($_GET['high']))); ?>" typeId="0">全部</a>
                        <?php if(is_array($typeData)): $i = 0; $__LIST__ = $typeData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="domainURL/Search/index?type=<?php echo ($vo['type_id']); ?>&sub=<?php echo (intval(htmlentities($_GET['sub']))); ?>&low=<?php echo (intval(htmlentities($_GET['low']))); ?>&high=<?php echo (intval(htmlentities($_GET['high']))); ?>" typeId="<?php echo ($vo['type_id']); ?>"><?php echo ($vo["type"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
                <dl class="select-itm select-itm-subType" id="subType">
                    <dt>小类:</dt>
                    <dd>
                        <a  href="domainURL/Search/index?type=<?php echo (intval(htmlentities($_GET['type']))); ?>&sub=0&low=<?php echo (intval(htmlentities($_GET['low']))); ?>&high=<?php echo (intval(htmlentities($_GET['high']))); ?>" subTypeId ="0">全部</a>
                        <?php if(is_array($subTypeData)): $i = 0; $__LIST__ = $subTypeData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="domainURL/Search/index?type=<?php echo (intval(htmlentities($_GET['type']))); ?>&sub=<?php echo ($vo['type_id']); ?>&low=<?php echo (intval(htmlentities($_GET['low']))); ?>&high=<?php echo (intval(htmlentities($_GET['high']))); ?>" subTypeId="<?php echo ($vo['type_id']); ?>"><?php echo ($vo['type']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
                <dl class="select-itm select-itm-price" id="price">
                    <dt>价格:</dt>
                    <dd>
                        <a href="domainURL/Search/index?type=<?php echo (intval(htmlentities($_GET['type']))); ?>&sub=<?php echo (intval(htmlentities($_GET['sub']))); ?>&low=0&high=20000" priceId="0_20000">全部</a>
                        <?php if(is_array($priceListData)): $i = 0; $__LIST__ = $priceListData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="domainURL/Search/index?type=<?php echo (intval(htmlentities($_GET['type']))); ?>&sub=<?php echo (intval(htmlentities($_GET['sub']))); ?>&low=<?php echo (preg_replace( '/_/', "&high=", $vo['range'] )); ?>" priceId="<?php echo ($vo['range']); ?>"><?php echo (preg_replace( '/_/', "-", $vo['range'])); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
                 <div class="itm-select-line">
                    <a href="domainURL/Search/index?type=<?php echo (intval(htmlentities($_GET['type']))); ?>&sub=<?php echo (intval(htmlentities($_GET['sub']))); ?>&low=<?php echo (intval(htmlentities($_GET['low']))); ?>&high=<?php echo (intval(htmlentities($_GET['high']))); ?>&buy=0&order=<?php echo (intval(htmlentities($_GET['order']))); ?>" class="select-label" title="全部">全部</a>
                    <a href="domainURL/Search/index?type=<?php echo (intval(htmlentities($_GET['type']))); ?>&sub=<?php echo (intval(htmlentities($_GET['sub']))); ?>&low=<?php echo (intval(htmlentities($_GET['low']))); ?>&high=<?php echo (intval(htmlentities($_GET['high']))); ?>&buy=1&order=<?php echo (intval(htmlentities($_GET['order']))); ?>" class="select-label-sell" title="只显示出售的信息">出售</a>
                    <a href="domainURL/Search/index?type=<?php echo (intval(htmlentities($_GET['type']))); ?>&sub=<?php echo (intval(htmlentities($_GET['sub']))); ?>&low=<?php echo (intval(htmlentities($_GET['low']))); ?>&high=<?php echo (intval(htmlentities($_GET['high']))); ?>&buy=2&order=<?php echo (intval(htmlentities($_GET['order']))); ?>" class="select-label-buy" title="只显示求购信息">求购</a>
                    <div class="school-only">
                        <input type='checkbox' <?php if($_COOKIE['xt_school_only'] == 1): ?>checked="true"<?php endif; ?> id="school-only-checkbox"/><label for="school-only-checkbox"><strong title="只浏览中山大学的信息"><?php echo ($schoolName); ?></strong></label>
                    </div>
                    <a href="domainURL/Search/index?type=<?php echo (intval(htmlentities($_GET['type']))); ?>&sub=<?php echo (intval(htmlentities($_GET['sub']))); ?>&low=<?php echo (intval(htmlentities($_GET['low']))); ?>&high=<?php echo (intval(htmlentities($_GET['high']))); ?>&buy=<?php echo (intval(htmlentities($_GET['buy']))); ?>&order=1" class="itm-order-time" title="时间从新到旧">按时间<i class="icons-sprite"></i></a>
                    <a href="domainURL/Search/index?type=<?php echo (intval(htmlentities($_GET['type']))); ?>&sub=<?php echo (intval(htmlentities($_GET['sub']))); ?>&low=<?php echo (intval(htmlentities($_GET['low']))); ?>&high=<?php echo (intval(htmlentities($_GET['high']))); ?>&buy=<?php echo (intval(htmlentities($_GET['buy']))); ?>&order=2" class="itm-order-price" title="价格从低到高">按价格<i class="icons-sprite"></i></a>
                    <a href="domainURL/Search/index?type=<?php echo (intval(htmlentities($_GET['type']))); ?>&sub=<?php echo (intval(htmlentities($_GET['sub']))); ?>&low=<?php echo (intval(htmlentities($_GET['low']))); ?>&high=<?php echo (intval(htmlentities($_GET['high']))); ?>&buy=<?php echo (intval(htmlentities($_GET['buy']))); ?>&order=0" class="itm-order" title="默认排序">默认排序</a>
                </div>
            </div>

            <input type="hidden" value="<?php echo ($_SESSION['areaId']); ?>" id="areaId" />
            <input type="hidden" value="<?php echo ($_SESSION['schoolId']); ?>" id="schoolId" />

            <div class="content-search">
                <div class="content-list">
                    <div class="content-title"><h3>信息列表</h3></div>
                    <ul class="itm-list-box">
                        <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="itm-list">
                                <a class="itm-picture" href="domainURL/Detail/index/id/<?php echo ($vo['pub_id']); ?>" target="_blank">
                                    <img src="imgURL/<?php echo ($vo['image_data']); ?>" alt="<?php echo ($vo['title']); ?> | 乐淘"/>
                                </a>
                                <div class="itm-info">
                                    <div class="itm-upper-box">
                                        <a class="itm-title" title="<?php echo ($vo['title']); ?>" href="domainURL/Detail/index/id/<?php echo ($vo['pub_id']); ?>" target="_blank"><strong><?php echo ($vo["title"]); ?></strong><span>&nbsp;[<?php echo ($vo["sum"]); ?>图]&nbsp;<?php if($vo['by'] == 1): ?>[商家]<?php else: ?>[个人]<?php endif; ?></span></a>
                                        <div class="itm-price"> <strong title="<?php echo ($vo['price']); ?>"><?php if(is_numeric($vo['price'])): echo ($vo['price']); ?>元</strong><?php else: echo ($vo['price']); ?></strong><?php endif; ?></div>

                                    </div>
                                    <div class="itm-content-box">
                                        <?php echo ($vo["content"]); ?>
                                    </div>
                                    <div class="itm-other-box">
                                        <a href="domainURL/Account/user/u/<?php echo ($vo['xiaoplus']); ?>" title="<?php echo ($vo['saler']); ?>" class="itm-other-info"><?php echo ($vo['saler']); ?>&nbsp;&nbsp;|</a>
                                        <span class="itm-other-info"><?php echo ($vo['school']); ?>&nbsp;&nbsp;|</span>
                                        <span class="itm-other-info"><?php echo (date("m月d日",$vo["ctime"])); ?></span>
                                    </div>
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>

                        <li id="getMore" class="get-more" index=1 >
                            <div style="display: none">
                                <img src='/style/img/common/icon/loading.gif' alt="loading"/>
                                <span style='vertical-align: top; margin-left: 20px;'>正在加载...</span>
                            </div>
                            <span class="more">更多</span>
                        </li>
                    </ul>
                </div>
                <div class="side-bar">
                    <strong class="side-bar-title">热门推荐</strong>
                    <ul class="side-bar-list">
                        <?php if(is_array($sider)): $i = 0; $__LIST__ = $sider;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="side-bar-item">
                                <a href="domainURL/Detail/index/id/<?php echo ($vo['pub_id']); ?>">
                                    <img src="imgURL/<?php echo ($vo['image_data']); ?>" />
                                    <strong title="<?php echo ($vo['title']); ?>"><?php echo ($vo["title"]); ?></strong>
                                </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <a href = "javascript:scroll(0,0)" class = "totop"><img src = "/style/img/intl_search/icon/totoparrow.png" class = "totoptar"/></a>
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

    <script type='text/javascript' src='/style/js/common/school-select.js'></script>
    <script type="text/javascript">
        var typeId = "<?php echo (intval(htmlentities($_GET['type']))); ?>",
            subTypeId = "<?php echo (intval(htmlentities($_GET['sub']))); ?>",
            schoolId = "<?php echo ($_SESSION['schoolId']); ?>",
            priceId = "<?php echo (intval(htmlentities($_GET['low']))); ?>_<?php echo (intval(htmlentities($_GET['high']))); ?>",

            itmSelect = "<?php echo (intval(htmlentities($_GET['buy']))); ?>" === "" ? 0 : "<?php echo (intval(htmlentities($_GET['buy']))); ?>",
            orderList = "<?php echo (intval(htmlentities($_GET['order']))); ?>" === "" ? 0 : "<?php echo (intval(htmlentities($_GET['order']))); ?>";

        //交易类型
        if (itmSelect === 1) {
            $(".select-label-sell").addClass("active");
        } else if (itmSelect === 2){
            $(".select-label-buy").addClass("active");
        } else {
            $(".select-label").addClass("active");
        }

        //排序
        if (orderList === 1) {
            $(".itm-order-time").addClass("active");
        } else if (orderList === 2){

            $(".itm-order-price").addClass("active");
        } else {
            $(".itm-order").addClass("active");
        }
    </script>
    <script type="text/javascript" src="/style/js/intl_search/v1/search_list.js?v=<?php echo ($VERSION); ?>"></script>
</body>
</html>