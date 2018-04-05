<?php
/**
 * Created by 小羊.
 * Author: 勇敢的小笨羊
 * 微博: http://weibo.com/xuzuxing
 * Date: 2018/3/13
 * Time: 14:54
 */

namespace app\user\validate;

class ReginValidate extends BaseValidate
{
    protected $rule = [
        'code'      => 'require|isPositiveInteger',
        'contact'   => 'require',
        'mobile'    => 'require|isMobile',
        'email'     => 'require|email',
        'qq'        => 'require',
        'merchant'  => 'require',
        'website'   => 'require',
        'account'   => 'require',
        'payment'   => 'require',
    ];

    protected $message = [
        'code'      => '请检查验证码',
        'contact'   => '请检查联系人',
        'mobile'    => '请检查手机号',
        'email'     => '请检查邮箱',
        'qq'        => '请检查QQ',
        'merchant'  => '请检查商户名称',
        'website'   => '请检查网站',
        'account'   => '请检查结算账户',
        'payment'   => '请检查结算方式',
    ];
}