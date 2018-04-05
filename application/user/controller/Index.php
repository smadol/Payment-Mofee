<?php
/**
 * Author: Single Dog
 * Github: https://github.com/SingleSheep
 * Date: 2018/2/7 - 16:47
 */

namespace app\user\controller;

use app\user\service\Token;

class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }

    public function register()
    {
        // 登录检查
        $result = Token::isUserLogin();
        if($result){
            $this->redirect('/user?islogin');
        }
        return $this->fetch();
    }

    /**
     * 获取通知公告
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getNotice(){

        $noticeData = db('notice')
            ->order(['create_time'    => 'desc'])
            ->limit(0,5)
            ->select() ;
        return result($noticeData);
    }

}