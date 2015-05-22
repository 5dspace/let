<?php

//定义回调URL通用的URL
define('URL_CALLBACK', 'http://t.xiaoplus.com/Login/callback/type/');

return array(
    'DB_TYPE'               => 'mysql',    
    'DB_HOST'               => '127.0.0.1', 
    'DB_NAME'               => 'xiaotao',      
    'DB_USER'               => 'root',     
    'DB_PWD'                => '',        
    'DB_PORT'               => '3306',      
    'DB_PREFIX'             => 'xt_',

    'URL_MODEL'             => 1,
    'SHOW_PAGE_TRACE' => false, // 显示页面Trace信息
    'APP_VERSION' => 2014051101,

    'DEFAULT_MODULE'  => 'Index', // 默认模块名称
    'DEFAULT_ACTION'  => 'index', // 默认操作名称

    'TMPL_PARSE_STRING' => array(
	  "imgURL" => "http://let.sysu.edu.cn",//用户上传的图片地址
	  "staticURL" => "http://let.sysu.edu.cn",//静态文件地址
	  "domainURL" => "http://let.sysu.edu.cn/index"//网站域名
    ),
	
    'URL_CASE_INSENSITIVE' => false,			//true则模块名首字母支持小写

    'TOKEN_ON' => true,  // 是否开启令牌验证
    'TOKEN_NAME' => '__hash__',    // 令牌验证的表单隐藏字段名称
    'TOKEN_TYPE' => 'md5',  //令牌哈希验证规则 默认为MD5
    'TOKEN_RESET' => true,  //令牌验证出错后是否重置令牌 默认为true

    'TMPL_ACTION_ERROR'     => 'Public:pageNotFound', // 默认错误跳转对应的模板文件
    
    //腾讯QQ登录配置
    'THINK_SDK_QQ' => array(
        'APP_KEY'    => '100556406', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '38edcaf46d60b363ef06af407cb81b87', //应用注册成功后分配的KEY
        'CALLBACK'   => URL_CALLBACK . 'qq',
    ),

    //新浪微博配置
    'THINK_SDK_SINA' => array(
        'APP_KEY'    => '3167760632', //应用注册成功后分配的 APP ID
        'APP_SECRET' => 'f72d4681c75644397d1c4a9ddf506914', //应用注册成功后分配的KEY
        'CALLBACK'   => URL_CALLBACK . 'sina',
    ),
	
    //session设置
    'SESSION_AUTO_START' => false,

    //静态文件缓存设置
    "HTML_CACHE_ON" => false,
    'HTML_CACHE_RULES'=> array(
        'Detail:index'            => array('{id}', 0)               //Detail目录的静态文件缓存
    ),

    "DEFAULT_USER_HEADER" => "style/img/common/icon/default_head.png",                 //用户默认头像地址
    "DEFAULT_ITEM_BG" => "style/img/common/btn/default.png",                 //用户默认头像地址
    "COOKIE_DOMAIN" => ".xiaoplus.com",         //cookie域名
    
    //邮件相关
    "EMAIL_ADDR" => "smtp.exmail.qq.com",
    "EMAIL_USER" => "no-reply@xiaoplus.com",
    "EMAIL_PWD" => "NoReply2013",
    "FROM_NAME" => "校PLUS 团队",
)
?>
