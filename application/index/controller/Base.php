<?php
/**
 * Created by 小羊.
 * Author: 勇敢的小笨羊
 * 微博: http://weibo.com/xuzuxing
 * Date: 2018/3/17
 * Time: 21:23
 */

namespace app\index\controller;


use app\common\service\VerificationCode;
use think\Controller;
use think\Validate;

class Base extends Controller
{

    /**
     * 发送验证码
     * @return \think\response\Json
     */
    public function sendValiCode($Towhom, $action = null)
    {
        //$validate = new Validate();
        if(is_null($action)){
            //默认邮件发送
            $result = VerificationCode::getInstance()->send($Towhom);
        }else{
            $result = VerificationCode::getInstance($action)->send($Towhom);
        }
        if ($result){
            return result();
        }else{
            return result('','0','发送异常了！估计是发太多次欠费了吧！');
        }
    }

}