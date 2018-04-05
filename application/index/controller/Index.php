<?php
/**
 * Created by 小羊.
 * Author: 勇敢的小笨羊
 * 微博: http://weibo.com/xuzuxing
 * Date: 2018/3/17
 * Time: 19:39
 */

namespace app\index\controller;


use app\common\service\AliSms;
use app\common\service\Mail;
use app\common\service\VerificationCode;

class Index extends Base
{

    public function index()
    {
        //发送邮件
        //Mail::getInstance(config('mail'))->send('1078509454@qq.com','大老婆','老婆我爱你','这不是废话嘛！');
        //发送短信
        //AliSms::getInstance(config('alisms'))->send('18078687485','666666');
        //发送短信验证码
        //VerificationCode::getInstance('SMS')->send('18078687485');
        //发送邮件验证码
        //VerificationCode::getInstance('Mail')->send('1078509454@qq.com');
        //验证码检查
        //return VerificationCode::getInstance()->valid('1078509454@qq.com','748517')? 1: 0;

        return $this->fetch();
    }

    public function pcPay()
    {
        return $this->fetch();
    }
    public function phonePay()
    {
        return $this->fetch();
    }

    public function scanPay()
    {
        return $this->fetch();
    }
    public function cardPay()
    {
        return $this->fetch();
    }

}