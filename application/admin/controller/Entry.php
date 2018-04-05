<?php
/**
 * Created by 小羊.
 * Author: 勇敢的小笨羊
 * 微博: http://weibo.com/xuzuxing
 * Date: 2018/3/9
 * Time: 20:08
 */

namespace app\admin\controller;


use app\admin\model\Admin as AdminModel;
use app\common\service\AdminService;
use think\captcha\Captcha;
use think\Controller;
use think\Request;

class Entry extends Controller
{

    public function index(){
        return $this->fetch();
    }
    /**
     * 生成验证码
     * @return \think\Response
     */
    public function verify(){
        $config = config('verify');//配置
        $captcha =  new Captcha($config);
        return $captcha->entry();
    }

    /**
     * @return mixed|\think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function login(){
        if(request()->isPost()){
            // 做一个简单的登录 组合where数组条件
            $data = Request::instance()->post();
            //验证码验证
            $res= check_verify($data['captcha']);
            if (!$res) {
                return result($data, '0', '验证码错误', 200);
            }
            //xmd5 加密
            $map['username'] =  $data['name'];
            $map['password'] =  xmd5($data['pass']);
            //账户密码验证
            $model = new AdminModel();
            $userdata= $model->where($map)->find();

            if (empty($userdata)) {
                return result($userdata,'0', '账号或者密码错误', 200);
            }else{
                //登录成功 数据更新
                $info = [
                    'last_login_ip'   => request()->ip(), //登录IP
                    'last_login_time' => time()  //登录时间
                ];
                $userdata->save($info);
                //基本数据存入session
                AdminService::createLoginStatus($userdata);
                return result();
            }

        }else{
            return $this->fetch();
        }
    }
    /**
     * 退出
     */
    public function logout(){
        //   基本数据更新
        $data = [
            'online'    => 0,
            'last_login_ip'   => request()->ip(),
            'last_login_time' => time()
        ];
        $userData = (new UserService())->checkLoginStatus();
        $model = new User();
        $res = $model
            ->where('uid',$userData['uid'])
            ->update($data);

        if(!$res){
            $this->error('系统异常');exit();
        }
        //清除session
        session(config('app.admin_auth_key'),null);
        $this->redirect('admin/login/index');
    }
}