<?php
/**
 * Author: Single Dog
 * Github: https://github.com/SingleSheep
 * Date: 2018/2/16 - 9:47
 */

namespace app\common\service;

use app\common\service\enum\ScopeEnum;
use app\common\service\exception\ForbiddenException;
use app\common\service\exception\UserException;
use think\Cache;

class UserToken extends Token
{
    /**
     * 登录成功  进行用户信息处理
     * @param $user
     * @return string
     * @throws ForbiddenException
     * @throws UserException
     */
    public function buil($user)
    {
        if (empty($user)) {
            throw new UserException();
        } else {
            //生成用户Token
            return $this->grantToken($user);
        }
    }

    /**
     * 颁发令牌 只要调用登陆就颁发新令牌
     * @param $user
     * @return string
     * @throws ForbiddenException
     */
    private function grantToken($user)
    {
        //存入缓存
        $cachedValue = $this->prepareCachedValue($user);
        $token = $this->saveToCache($cachedValue);
        return $token;
    }


    //创建缓存信息
    private function prepareCachedValue($user)
    {
        $cachedValue['uid'] = $user['uid'];
        $cachedValue['scope'] = ScopeEnum::User;
        $cachedValue['data'] = $user;
        return $cachedValue;
    }


    /**
     * 写入缓存信息
     * @param $cachedValue
     * @return string
     * @throws ForbiddenException
     */
    private function saveToCache($cachedValue)
    {
        $key        = self::generateToken();
        $value      = json_encode($cachedValue);
        $expire_in  = config('app.token_expire_in');
        $result     = Cache::set($key, $value, $expire_in);

        if (!$result){
            throw new ForbiddenException([
                'msg' => '服务器缓存异常',
                'errorCode' => 10005
            ]);
        }
        //返回Token
        return $key;
    }



}