<?php
// this action is a new version of the website.
// @author: minas 
// @date:   2014-05-07


class SeasonAction extends GlobalAction {
    public function index(){
        /*$this->getPubByPrice(2);
        $this->getPubByPrice(5);
        $this->getPubByPrice(10);
        $this->getPubByPrice(20);
        $this->getCtrlTs();*/
        $this->getBuyTen();
        $this->getLastestTen();
        $this->assign('currentTime',time() );
        $this->display();
    }

    public function getCtrlTs()
    {
         $tbPub = M("pub");
        //$proId = session("proId"); 
        $data = $tbPub->where("uid = 494 AND isdel = 0 AND isbuy = 0  AND stock > 0")->order("ctime DESC")->select();
        $this->formatImageData($data);
        $this->getXiaoplus($data);
        $this->assign("CtrlTs", $data);
    }
    /*
    *   get new top 10
    */
    public function getLastestTen(){
        $tbPub = M("pub");
    
        //返回最新前十的物品
        //$proId = session("proId");
        $data = $tbPub->where("isdel = 0 AND isbuy = 0 AND stock > 0")->order("ctime DESC")->limit(15)->select();
       $this->formatImageData2($data);
        $this->formateContent($data);
        $this->assign("lastest", $data);
    }


    protected function formatImageData2(& $pubData) {
        for($i = 0; $i != count($pubData); $i++){
            $tmp = json_decode($pubData[$i]["image_data"], true);           
            
            $splitTmp = explode("/", $tmp[0]);
            
            $pubData[$i]["image_data"] = implode("/", $splitTmp);
        }
    }


    public function formateContent(& $pubData)
    {
      //  $toUser = M('user');

        for($i = 0; $i != count($pubData); $i++){
               // echo $pubData[$i]['content'];
                //$pubData[$i]['content'] = preg_replace(array('/\s*(<br\s*\/?\s*>\s*){2,}/im','/(<p>(\s|\s*<br\s*\/?\s*>\s*)*<\/p>)+/im'),array('\\1\\1',''), $pubData[$i]['content']);
                $pubData[$i]['content'] = preg_replace('/<[^>]+>/','', $pubData[$i]['content']);
                
                //echo $pubData[$i]['content'];
                $pubData[$i]['content'] = $this->utf8Substr($pubData[$i]['content'], 0, 100) . "...";
                /*$uid = $pubData[$i]['uid'];
                $pubData[$i]['xiaoplus'] = $toUser->where("uid = $uid")->limit(1)->getField("xiaoplus");*/

        }
    }

    //截取utf8字符串 
    public function utf8Substr($str, $from, $len) 
    { 
    return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'
                        . $from .'}'. '((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s', 
            '$1',$str); 
    } 

    
    /**
    * add by minas. 2014-05-07
    * get product by price.
    */

    private function getPubByPrice($price=2)        
    {
        $tbPub = M("pub");
        //$proId = session("proId"); 
        $data = $tbPub->where("saler LIKE '%脉望%' AND price = $price AND isdel = 0 AND isbuy = 0  AND stock > 0")->order("ctime DESC")->limit(50)->select();
        $this->formatImageData($data);
        $this->getXiaoplus($data);
        $this->assign("pubOf".$price, $data);
    }

    public function getXiaoplus(& $pubData)
    {
       $toUser = M('user');
        for($i = 0; $i != count($pubData); $i++){
                $uid = $pubData[$i]['uid'];
                $pubData[$i]['xiaoplus'] = $toUser->where("uid = $uid")->limit(1)->getField("xiaoplus");

        }
    }
   

    /*
	*   get 最受浏览最多 top 10
    */
    public function getScanTen(){
    	$tbPub = M("pub");

    	$proId = session("proId");
    	$data = $tbPub->where("isdel = 0 AND province = $proId")->order("scan DESC")->limit(10)->field("pub_id, title, image_data, price, ctime")->select();
    	$this->formatImageData($data);
    	$this->assign("scanTen", $data);
    }

    /*
	*   get 10个免费商品 top 10
    */
    public function getFreeTen(){
    	$tbPub = M("pub");
	$proId = session("proId");
    	$data = $tbPub->where("isdel = 0 AND province = $proId")->where("price = 0")->limit(10)->field("pub_id, title, image_data, price, ctime")->select();
    	$this->formatImageData($data);
    	$this->assign("freeTen", $data);
    }

	/*
	*   get 10个求购商品 top 10
    */
    public function getBuyTen(){
    	$tbPub = M("pub");
	$proId = session("proId");
    	$data = $tbPub->where("isdel = 0 AND isbuy = 1 AND province = $proId")->order("ctime DESC")->limit(10)->field("pub_id, title, image_data, price, ctime")->select();
    	$this->formatImageData($data);
    	$this->assign("buyTen", $data);
    }
	//物品图片的处理函数、处理缩略图
	protected function formatImageData(& $pubData) {
        for($i = 0; $i != count($pubData); $i++){
            $tmp = json_decode($pubData[$i]["image_data"], true);           
            
            //如果第一张图不是默认的图 就在图最前面添加m_
            $splitTmp = explode("/", $tmp[0]);
            $splitTmpLength = count($splitTmp) - 1;
            if (!preg_match("/default/i", $splitTmp[$splitTmpLength])) {
                    $lastStr = array_pop($splitTmp);
                    array_push($splitTmp, "m_".$lastStr);         
            }
            
            $pubData[$i]["image_data"] = implode("/", $splitTmp);
        }
	}

    public function dealwiththeImage()
    {
        /*$tbPub = M("pub");
        //$proId = session("proId"); 
        $data = $tbPub->where(" price = 2 AND isdel = 0 AND isbuy = 0  AND stock > 0")->order("ctime DESC")->limit(1)->select();

        $data = json_decode($data[0]['image_data'], true); */

        $data = "F:/wnmp/www/xiaotao_dev/briefxiaotao/data/uploads/20140413/534aa09b5e976.jpg";

       // $imgPath = "http://t.xiaoplus.com/" . $data[0];
        import('ORG.Util.ThinkImage');          //引入图片处理库
        $img = new ThinkImage(THINKIMAGE_GD, $data);

        $this->ajaxReturn("size: " . $img->width() );
        /*if(is_file($data))
            $this->ajaxReturn("1");
        else
            $this->ajaxReturn("0");*/

    }


}


?>