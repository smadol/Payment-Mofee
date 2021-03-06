<?php
/**
 * Author: Single Dog
 * Github: https://github.com/SingleSheep
 * Date: 2018/2/16 - 9:02
 */

namespace app\user\controller;

use app\common\service\Token;
use think\Controller;

class Base extends Controller
{
    protected $uid      = null;
    protected $userInfo = null;

    public function _initialize()
    {
        parent::_initialize();
        // TODO: Change the autogenerated stub
        // 登录检查
        $result = Token::isUserLogin();
        $this->uid      = $result['uid'];
        $this->userInfo = $result;
        if($result){
            $this->assign('uid',$this->uid);
            $this->assign('userInfo',$this->userInfo);
        }else{
            $this->assign('uid',$this->uid);
            $this->assign('userInfo',$this->userInfo);
        }
    }


}