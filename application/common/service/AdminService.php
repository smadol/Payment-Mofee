<?php
/**
 * Created by 小羊.
 * Author: 勇敢的小笨羊
 * 微博: http://weibo.com/xuzuxing
 * Date: 2018/3/25
 * Time: 18:28
 */

namespace app\common\service;
use app\admin\model\Admin;

class AdminService

{

    /**
     * 登录管理员状态检查
     * @return bool|null|static|string
     * @throws \think\exception\DbException
     */
    public static function checkAdminStatus(){

        $auth_session = session('admin_token');
        if (!$auth_session){
            return false;
        }
        list($auth_token,$userinfo) = explode("|",$auth_session);
        $userinfo = json_decode($userinfo);
        if(!$auth_token || !$userinfo){
            return false;
        }
        if( $userinfo && preg_match("/^\d+$/",$userinfo->id) ){
            $userinfo = Admin::get([ 'id' => $userinfo->id ]);
            if(!$userinfo){
                return false;
            }
            //校验auth_token
            if($auth_token !== self::createAuthToken($userinfo['id'],$userinfo['username'],$userinfo['password'],$_SERVER['HTTP_USER_AGENT'])){
                return false;
            }
            return $userinfo;
        }
        return false;
    }
    /**
     * 设置登录状态
     * @param $userinfo
     */
    public static function createLoginStatus($userinfo){
        $auth_token = self::createAuthToken($userinfo['id'],$userinfo['username'],$userinfo['password'],$_SERVER['HTTP_USER_AGENT']);
        Session('admin_token',$auth_token."|".$userinfo);
        cookie('admin_token',$auth_token);
    }

    /**
     * 生成用户授权码
     * @param $uid
     * @param $name
     * @param $email
     * @param $user_agent
     * @return string
     */
    public static function createAuthToken($uid,$name,$email,$user_agent){
        return md5($uid.$name.$email.$user_agent.config('app.token_salt'));
    }

}