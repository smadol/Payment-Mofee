<?php
/**
 * Author: Single Dog
 * Github: https://github.com/SingleSheep
 * Date: 2018/2/16 - 9:46
 */

namespace app\common\service;

use app\common\service\ScopeEnum;
use think\Cache;

class Token
{
    /**
     * 生成令牌
     * @return string
     */
    public static function generateToken()
    {
        $randChar   = getRandChar(32);
        $timestamp  = $_SERVER['REQUEST_TIME_FLOAT'];
        $tokenSalt  = config('app.token_salt');
        return md5($randChar . $timestamp . $tokenSalt);
    }

    //登陆判断
    public static function isUserLogin(){

        //找服务器session 登录标记
        $token = session('user_token');
        if($token){
            //存在 寻在cache 用户信息 不存在返回false
            $user = self::getCurrentTokenVar($token,'data');
            return $user;
        }else{
            //2.都不存在则需要重新登陆
            return false;
        }
    }

    /**
     * 获取TOKEN里的个人信息
     * @param $key|$token
     * @return bool|mixed
     */
    public static function getCurrentTokenVar($token,$key)
    {
        $vars = Cache::get($token);
        if (!$vars)
        {
            return false;
        }
        else {
            if(!is_array($vars))
            {
                $vars = json_decode($vars, true);
            }
            if (array_key_exists($key, $vars)) {
                return $vars[$key];
            }
            else{
                return false;
            }
        }
    }

}