<?php
/**
 * Created by 小羊.
 * Author: 勇敢的小笨羊
 * 微博: http://weibo.com/xuzuxing
 * Date: 2018/3/9
 * Time: 20:01
 */

namespace app\admin\controller;

use app\common\service\AdminService;
use think\Controller;
use think\Request;

class Base extends Controller
{

    protected $userInfo = null;
    /**
     * 初始化
     * @param Request|null $request
     * @throws \think\exception\DbException
     */
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        if ($userInfo = AdminService::checkAdminStatus()) {
            $this->userInfo = $userInfo;
            $this->assign('userInfo',$userInfo);
        } else {
            $this->redirect('/admin/login.html');
        }
    }

}