<?php

class WeixinAction extends Action{

	public function index() {
		$this->display();
	}
	
	//从微信端搜索的时候返回信息
	public function getWeixinSearchInfo() {
		$keyWords = trim($_GET['keywords']);
		//处理字符串
        $keyWords = addslashes(strip_tags($keyWords));

        $tbPub = M("pub");
        $pubData = $tbPub->where("title LIKE '%$keyWords%' and is_complete = 0")->limit(0, 5)->select();
		
        for($i = 0; $i != count($pubData); $i++){
            $returnInfo .= ($i + 1).". ";
			$returnInfo .= "【".$pubData[$i]['title']."】-";
            $returnInfo .= "【价格:".$pubData[$i]['price']."】-";
			$returnInfo .= "【交易地点:".getSchool($pubData[$i]['school'])."】-";
			$returnInfo .= "【联系人:".$pubData[$i]['saler']."】-";
			$returnInfo .= "【电话/QQ:".$pubData[$i]['phone']."】<br />";
        }
		echo ($keyWords . "<br />" . $returnInfo);
	}

	//从微信端订花 add by minas 2014-05-03
	public function orderFlowers() {
		$content = trim($_GET['content']);
		//处理字符串
        $content = addslashes(strip_tags($content));

      	$toFlower = M('weixin_order');
      	$data = array(
      		'type' => 0,
      		'content' => $content,
      		'created' => time()
      		);
      	if($toFlower->add($data)){
      		echo "您的订单我们已经通知了卖家,请等候卖家回复";
      	} else {
      		echo "系统繁忙,请稍后再试！";
      	}
		
	}

}

?>