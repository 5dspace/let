<?php


/**
 * 交易类, 负责完成购买下单流程
 * @author minaswang
 * 2014-04-22
 **/

class TradeAction extends GlobalAction {

    public function index()
    {
        //$this->ajaxReturn(0 , session("uid") , 1);
        if(!session("uid")){
            header("Content-type: text/html; charset=utf-8");
            $this->redirect('Login/index',array(), 2, '系统检测到您未登陆,当前操作需要您处于登陆状态,正在为您跳转到登陆页...');
            return;
        }

        //$uid = isset($_GET["uid"]) ? intval(addslashes($_GET["uid"])) : false;
        //$pid = isset($_GET["pid"]) ? intval(addslashes($_GET["pid"])) : false;

        $uid = session('uid');
        $pid = $_GET['id'];
        $toPub = M('pub');
        $toUser = M('user');
        $toUserProfile = M('user_profile');

        // 获取物品 简要信息
        $con["pub_id"] = $pid;
        $con["isdel"] = 0;
        $pubData = $toPub->where($con)->find();
        if (!$pubData) {
            $this->display("Public:pageNotFound");       //404
            return;
        }

        //获取缩略图的路径
        $tmp = json_decode($pubData["image_data"], true);
        $splitTmp = explode("/", $tmp[0]);
        $splitTmpLength = count($splitTmp) - 1;
        if (!preg_match("/default/i", $splitTmp[$splitTmpLength])) {
                $lastStr = array_pop($splitTmp);
                array_push($splitTmp, "m_".$lastStr);         
        }
        
        $pubData["image_data"] = implode("/", $splitTmp);
        

        $this->assign('pubData',$pubData);

         //图片json转化为数据
        //$pubData["image_data"] = json_decode($pubData["image_data"], true);
        //$this->ajaxReturn(0 , $pubData["image_data"] , 1);
        //$this->assign("image", $pubData["image_data"]);

        // 获取买家信息

        $userProfile = $toUserProfile->where("uid = $uid")->find();
        $profileData = json_decode($userProfile['data'], true);
        $this->assign("addrs",$profileData['addr']);
        $this->display();
    }


    

    public function comfirmOrder()
    {
        //$this->ajaxReturn("yes it has come in");
        if (!session("uid")){
            $returnData["msg"] = "请您先登录!";
            $this->ajaxReturn($returnData);
        }

        $condition = array(
            'pub_id' => $_POST['pub_id'],
            //'uid' => session('uid')
        );
        
        $id = $_POST['id'];
       // 减少库存
        $con['uid'] = session('uid');
        $userProfile = M("user_profile");
        $profile = $userProfile->where($con)->find();
        $profile = json_decode($profile['data'],true);


        $toPub = M('pub');
        $pubData = $toPub->where($condition)->find();
        
        $seller_id = $pubData['pub_id'];
        $seller_name = $pubData['saler'];

        $pubData['stock'] = $pubData['stock']-1;
        $toPub->where($condition)->save($pubData);
        

        
        $form = D('user');
        $Data = $form->where($con)->find();
        
        $buyer_id = session('uid');
        $buyer = $Data['uname'];

        $uid = session('uid');
        $toUserProfile = M('user_profile');
        $userProfile = $toUserProfile->where("uid = $uid")->find();
        $profileData = json_decode($userProfile['data'], true);
        $addr = $profileData['addr'];
        $addr = $addr[$id];
        
        $data = array(
            'pub_id' => $_POST['pub_id'],
            'seller_id' => $seller_id,
            'seller' => $seller_name,
            'buyer_id' => session('uid'),
            'buyer' => $addr['consignee'],
            'buyer_addr' => $addr['addr'],
            'buyer_phone' => $addr['phone'],
            'trade_data' => $_POST['trade_data'],
            'trade_time' => time(),
            'trade_status' => 1
        );

        $tbPubTradeLogs = M('pub_trade_logs');

        $tbPubTradeLogs->add($data);
        $result = array(
            'status' => true,
            'msg' => '交易成功'
            );
        $this->ajaxReturn($result);

    }
}