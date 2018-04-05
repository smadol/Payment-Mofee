<?php
/**
 * Created by 小羊.
 * Author: 勇敢的小笨羊
 * 微博: http://weibo.com/xuzuxing
 * Date: 2018/3/6
 * Time: 16:32
 */

namespace app\user\controller;

use app\common\model\Merchant;
use app\common\service\UserToken;
use app\index\validate\ReginValidate;
use think\Controller;
use think\Exception;
use think\Request;
use think\Validate;

//用户相关入口
class Entry extends Controller
{
    /**
     * @return \think\response\Json
     * @throws \app\common\service\exception\ForbiddenException
     * @throws \app\common\service\exception\UserException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function login(){
        if(Request::instance()->isPost()){
            $data = Request::instance()->post();
            //数据校验
            //1.使用验证器验证
            $validate = new Validate([
                'name'  => 'require|max:25|min:6',
                'pass'  => 'require|min:6',
            ]);

            $validate->message([
                'name'      =>  '输入账户不正确',
                'pass'      =>  '密码需大于6位',
            ]);
            if (!$validate->check($data)) {
                return result('','0',$validate->getError());
            }

            //数据操作
            $auth = (new Merchant())->where([
                'uid'       =>  $data['name'],
                'password'  => xmd5($data['pass'])
            ])->find();

            if (!$auth){
                return result('','0','输入账户或密码错误');
            }else{
                //登陆成功
                $Token = new UserToken();
                $result = $Token->buil($auth);
                if (!$result){
                    return result('','0','用户登陆异常，请联系管理员~');
                }
                session('user_token',$result);
                return result($result);
            }
        }
        return result('','0','未知错误');
    }

    public function logout(){
        session('user_token',null);
        $this->redirect('/user/login');
    }

    /**
     * 申请商户
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function register(){
        if(Request::instance()->isPost()){
            $data = Request::instance()->post();
            //数据校验

            //1.使用验证器验证数据
            $validate = new ReginValidate();
            if(!$validate->check($data)){
                return result('','0',$validate->getError());
            }
            //2.验证码验证
            if ($data['code'] != cache(xmd5($data['code']))){
                return result($data['code'],'0','验证码错误');
            }

            //判断用户是否存在
            //邮箱存在判断 手机存在判断
            $mail = (new Merchant())->where(['mail'=>$data['email']])->find();
            if ($mail) {
                //商户已存在
                return result('', '0', '商户邮箱已存在，忘记密码请联系客服!');
            }
            $mobile = (new Merchant())->where(['mobile'=> $data['mobile']])->find();
            if ($mobile) {
                //商户已存在
                return result('', '0', '商户手机已存在，忘记密码请联系客服!');
            }
            $user = (new Merchant())->where(['merchant'=>$data['merchant']])->find();
            if ($user) {
                //商户已存在
                return result('','0','商户名称已存在，忘记密码请联系客服!');
            }else{
                //生成商户数据操作
                try{
                    //随机6位密码
                    $password = getRandChar('6','NUMBER');;
                    //生成商户
                    $userData = new Merchant();
                    $userData->appid        =   'mo' . time().rand(0,9);
                    $userData->password     =   xmd5($password);
                    $userData->accesskey    =   strtoupper(Token::generateToken());
                    $userData->merchant     =   $data['merchant'];
                    $userData->contact      =   $data['contact'];
                    $userData->mobile       =   $data['mobile'];
                    $userData->mail         =   $data['email'];
                    $userData->qq           =   $data['qq'];
                    $userData->website      =   $data['website'];
                    $userData->payment      =   $data['payment'];
                    $userData->account      =   $data['account'];
                    $userData->save();

                    //生成商户钱包
                    $userWallet = new MerchantWallet();
                    $userWallet->uid       = $userData->uid;
                    $userWallet->save();

                    //生成所有用户信息成功
                    //发送审核通过号
                    $this->sendApply($userData,$password);
                    return result($userData->uid);

                }catch (Exception $ex){
                    return result('','0',$ex->getMessage());
                }
            }

        }
        return result('','0','未知错误');
    }
    /**
     * 验证码需要
     *
     * @return \think\response\Json
     */
    public function checkAuthCode(){
        return result(['verifycode' => true ]);
    }

    /**
     * @param $user
     * @param $password
     * @return bool
     */
    private function sendApply($user,$password){

        //收件人邮箱
        $toemail    =   $user->mail;
        //发件人昵称
        $name       =   $user->merchant;
        //邮件标题
        $subject    ='恭喜您成功申请Mofee聚合支付';

        //邮件内容
        ///User/active?uid=10003&code=8118260f5bd966fe8b1616672b2a6616
        $content1 = "<div id=\"main-main\" style=\"padding:40px 0;font-family:Microsoft YaHei;color:#3e3a39\">
                    <table style=\"width:680px;margin:0 auto; background:#fff; border-collapse:collapse; border-left:1px solid #eeeeee; border-right:1px solid #eeeeee\" align=\"center\">
                        <tbody><tr><td>
                        <div style=\"width:680px;margin:0 auto; background:#fff;\" class=\"mmsgLetter\">
                            <div style=\"background: #41CF58; height:60px; color:#fff; text-align:right;padding-right:20px; \" class=\"mmsgLetterHeader\">
                                <img height='50px;' src=\"https://www.98imo.com/logo_v2.svg\">
                            </div>
                            <div style=\"width:580px; margin:auto; margin-top:45px;\" class=\"mmsgLetterContent\">
                                <div class=\"content\">
                                <table style=\"width:580px; margin:auto; margin-top:45px;border-collapse:collapse;\" align=\"center\">
                                    <tbody><tr>
                                    <td>
                                    <div style=\"line-height:26px;\" class=\"content-t\">
                                        <p style=\"padding:0; margin:0;\" class=\"salutation\">
                                            尊敬的<span id=\"mailUserName\">{$name}</span>：
                                        </p>
                                        <p style=\"padding:0; margin:0; margin-top:10px;\">
                                            <span style=\"color:#3ecf58; font-size:21px;\" class=\"green\">恭喜你，成功通过Mofee聚合支付商户资料审核！</span>
                                        </p>
                                        <p style=\"padding:0; margin:0; margin-top:20px;\">
                                            以下为你的账户所需要的重要信息，请注意保密：
                                        </p>                        
                                    </div>
                                    </td>
                                    </tr>
                                    </tbody></table>
                                    <div style=\"background:#f1f5f0 url(https://wx.gtimg.com/mch/images/demo/email-bg.png) repeat\" class=\"content-table\">
                                     <table style=\"width:580px;margin:auto; margin-top:10px; border:none; font-size:14px; background:url(https://wx.gtimg.com/mch/images/demo/secret.png)  #f1f5f0 490px 10px no-repeat;\" align=\"center\">
                                     <tbody><tr><td colspan=\"2\" style=\"height:20px;\"></td></tr>
                
                                     <tr><td style=\"padding:12px 30px;\"><p style=\"color:#7d7d7d;padding-left:20px;\">商户平台登录帐号</p></td>
                                     <td style=\"word-break:break-all; padding-right:20px;\"><span style=\"border-bottom:1px dashed #ccc;z-index:1\" t=\"7\" onclick=\"return false;\" data=\"1493758822\">{$user->uid}</span>@<span style=\"border-bottom:1px dashed #ccc;z-index:1\" t=\"7\" onclick=\"return false;\" data=\"1493758822\">{$user->uid}</span></td>
                                     </tr>
                                     <tr><td style=\"padding:12px 30px;\"><p style=\"color:#7d7d7d;padding-left:20px;\">商户平台登录密码</p></td>
                                     <td style=\"word-break:break-all;padding-right:20px;\">{$password}</td>
                                     </tr>
                                     
                                     <tr><td style=\"padding:12px 30px;\"><p style=\"color:#7d7d7d;padding-left:20px;\">申请对应商户名称</p></td>
                                     <td style=\"word-break:break-all;padding-right:20px;\">{$name}</td>
                                     </tr> 
                                     <tr><td style=\"padding:12px 30px;\"><p style=\"color:#7d7d7d;padding-left:20px;\">申请对应APPID</p></td>
                                     <td style=\"word-break:break-all;padding-right:20px;\">{$user->appid}</td>
                                     </tr>
                                     
                                     
                                     <tr><td colspan=\"2\" style=\"height:20px;\"></td></tr>
                                    </tbody></table>
                                     </div>
                                     <div class=\"tips\" style=\"border-top:1px solid #eeeeee; padding-top:10px; margin-bottom:25px;\">
                                            <p style=\"font-size:14px; line-height:22px; color:#7d7d7d; margin-top:10px; font-size:14px;\">TIPS：</p>                        
                                            <p style=\"font-size:14px; line-height:22px; color:#7d7d7d; margin-top:10px; font-size:14px;\">你可在<span style=\"color:#3ecf58;\">账户总览</span>中，扫码加入你的专属Mofee聚合支付群，该商户号的相关业务消息会通过该Mofee聚合支付群通知你。</p>  
                                   </div>
                                </div>
                            </div>
                            <div class=\"mmsgLetterInscribe\" style=\"line-height:22px;\">
                                <table style=\"border-collapse:collapse; width:100%; color:#333333; \" align=\"center\">
                                    <tbody><tr>
                                        <td style=\"vertical-align:top;padding:15px;padding-right:15px;padding-left:50px;font-family:Microsoft YaHei;\">
                                            <h1 style=\"font-size:14px; margin:0;line-height:26px;\">Mofee聚合支付帮助中心</h1>
                                            <p style=\"font-size:14px; margin:0;line-height:24px;\">服务QQ：702154416 </p>
                                            <p style=\"font-size:14px; margin:0;\">服务电话：<span style=\"border-bottom:1px dashed #ccc;z-index:1\" t=\"7\" onclick=\"return false;\" data=\"18078687485\">18078687485</span></p>
                                            <p style=\"font-size:14px; margin:0;white-space:nowrap;\">服务邮箱：<a href=\"mailto:service@98imo.com\" style=\"color:#333333; text-decoration:none;\" target=\"_blank\">service@98imo.com</a></p>
                                        </td>
                                        <td style=\"padding:15px;padding-left:10px; padding-right:0;font-family:Microsoft YaHei;width:100px;\">
                                            <img src=\"https://www.98imo.com/static/qrcode.jpg\" width=\"100\" border=\"0\">
                                        </td>
                                        <td style=\"padding:15px;padding-left:10px; vertical-align:top;font-family:Microsoft YaHei;padding-right:30px;width:260px;\">
                                            <h1 style=\"font-size:14px; margin:0;line-height:26px;\">加入Mofee聚合支付结算群</h1>
                                            <p style=\"font-size:14px; margin:0;line-height:24px;\">为你提供Mofee聚合支付最新动态</p>
                                            <p style=\"font-size:14px; margin:0;white-space:nowrap;\">扫一扫入群</p>
                                        </td>
                                    </tr>
                                 </tbody></table>
                            </div>  
                            <table style=\"background: #41CF58; color: #ffffff;  font-size:12px;\" width=\"100%\" align=\"center\">
                            <tbody><tr>
                            <td>
                            <span style=\"padding-left:20px;line-height:40px;\">请注意，该邮件地址不接收回复邮件，请登录商户平台或联系商户平台客服进行咨询。</span>
                            </td>
                            <td>
                            <span style=\"line-height:40px; text-align:right;padding-right:20px; \">power by Mofee</span>
                            </td>
                            </tr>
                            </tbody></table>    
                        </div>
                        </td>
                        </tr>
                        </tbody></table>
                    </div>";

        $content2 = "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                        <tbody><tr bgcolor=\"#e9e9e9\">
                            <td align=\"center\" valign=\"middle\"> 
                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"600\" bgcolor=\"#FFFFFF\" style=\"\">
                                    <tbody>
                                        <tr bgcolor=\"#e9e9e9\">
                                            <td colspan=\"3\" height=\"60\"></td>
                                        </tr>
                                        <tr bgcolor=\"#1bb7f0\" style=\"height:100px;\">
                                            <td valign=\"middle\" width=\"30\"></td>
                                            <td valign=\"middle\">
                                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\" align=\"left\" style=\"\">
                                                    <tbody>
                                                        <tr>
                                                            <td height=\"32\"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width=\"148\"><img src=\"https://www.98imo.com/static/logo.png\"></td>
                                                        </tr>
                                                        <tr>
                                                            <td height=\"32\"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td valign=\"middle\" width=\"30\"></td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"3\" height=\"49\"></td>
                                        </tr>
                                        <tr>
                                            <td valign=\"middle\" width=\"30\"></td>
                                            <td valign=\"top\" style=\"color:#000000;font-size:15.6px;\"><p style=\"padding:0;margin:0;\">尊敬的【{$name}】：</p></td>
                                            <td valign=\"middle\" width=\"30\"></td>
                                        </tr>
                    
                                        
                                        <tr style=\"font-size:15px;color:#35bd62!important;\">
                                            <td valign=\"middle\" width=\"30\"></td>
                                            <td valign=\"middle\" style=\"color:#3ed086;font-size:15.6px;\"><p style=\"padding-top:17px;margin:0;\">恭喜您已成功通过Mofee聚合支付商户资料审核！</p></td>
                                            <td valign=\"middle\" width=\"30\"></td>
                                        </tr>
                                        <tr>
                                            <td valign=\"middle\" colspan=\"3\" height=\"6\"></td>
                                        </tr>
                                        <tr style=\"font-size:15px;\">
                                            <td valign=\"middle\" width=\"30\"></td>
                                            <td valign=\"middle\" height=\"58\" style=\"color:#000000;font-size:15.6px;\"><p style=\"padding:0;margin:0;\">以下是您的账户重要信息，请注意保密：</p></td>
                                            <td valign=\"middle\" width=\"30\"></td>
                                        </tr>
                                        <tr style=\"font-size:15px;\">
                                            <td valign=\"middle\" width=\"30\"></td>
                                            <td valign=\"middle\">
                                                <table cellpadding=\"0\" frame=\"void\" cellspacing=\"0\" border=\"0\" width=\"100%\" align=\"left\" style=\"\">
                                                    <tbody>
                                                        <tr bgcolor=\"f8f8f8\">
                                                            <td height=\"52\" valign=\"middle\" width=\"224\" style=\"padding-left:10px;font-size:15.6px;border-bottom:dashed 1px #e8e8e8;border-top:solid 1px #e8e8e8;\">支付商户名称</td>
                                                            <td height=\"52\" valign=\"middle\" style=\"padding-left:10px;font-size:15.6px;border-bottom:dashed 1px #e8e8e8;border-top:solid 1px #e8e8e8;\"><span style=\"border-bottom:1px dashed #ccc;z-index:1\" t=\"7\" onclick=\"return false;\" data=\"{$name}\">{$name}</span></td>
                                                        </tr>
                                                        <tr bgcolor=\"f8f8f8\">
                                                            <td height=\"52\" valign=\"middle\" width=\"224\" style=\"padding-left:10px;font-size:15.6px;border-bottom:dashed 1px #e8e8e8;border-top:solid 1px #e8e8e8;\">商户应用号</td>
                                                            <td height=\"52\" valign=\"middle\" style=\"padding-left:10px;font-size:15.6px;border-bottom:dashed 1px #e8e8e8;border-top:solid 1px #e8e8e8;\"><span style=\"border-bottom:1px dashed #ccc;z-index:1\" t=\"7\" onclick=\"return false;\" data=\"{$user->appid}\">{$user->appid}</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td height=\"52\" valign=\"middle\" style=\"padding-left:10px;font-size:15.6px;border-bottom:dashed 1px #e8e8e8;\">商户平台登录账号</td>
                                                            <td height=\"52\" valign=\"middle\" style=\"padding-left:10px;font-size:15.6px;border-bottom:dashed 1px #e8e8e8;\"><span style=\"border-bottom:1px dashed #ccc;z-index:1\" t=\"7\" onclick=\"return false;\" data=\"{$user->uid}\">{$user->uid}</span></td>
                                                        </tr>
                                                        <tr bgcolor=\"f8f8f8\">
                                                            <td height=\"52\" valign=\"middle\" style=\"padding-left:10px;font-size:15.6px;border-bottom:dashed 1px #e8e8e8;\">商户平台登录密码</td>
                                                            <td height=\"52\" valign=\"middle\" style=\"padding-left:10px;font-size:15.6px;border-bottom:dashed 1px #e8e8e8;\">{$password}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td valign=\"middle\" width=\"30\"></td>
                                        </tr>
                                        <tr>
                                            <td valign=\"middle\" colspan=\"3\" height=\"10\"></td>
                                        </tr>
                                        <tr>
                                            <td valign=\"middle\" width=\"30\"></td>
                                            <td style=\"text-align:right;color:#1bb7f0;font-size:15.6px;\"><p style=\"padding:0;margin:0;\"><a style=\"color:#1bb7f0;text-decoration:none;\" href=\"https://www.98imo.com/\" target=\"_blank\">前往商户平台</a></p></td>
                                            <td width=\"30\"></td>
                                        </tr>
                                        <tr>
                                            <td valign=\"middle\" colspan=\"3\" height=\"36\"></td>
                                        </tr>
                                
                                        <tr bgcolor=\"#f1f1f1\">
                                            <td valign=\"middle\" width=\"30\"></td>
                                            <td valign=\"middle\">
                                                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\" align=\"left\" style=\"\">
                                                    <tbody>
                                                        <tr>
                                                            <td height=\"49\" colspan=\"2\"></td>
                                                        </tr>
                                                        <tr>
                                                            <td valign=\"middle\" rowspan=\"2\" width=\"142\"><img height=\"120px;\" src=\"https://www.98imo.com/static/qrcode.jpg\"></td>
                                                            <td valign=\"middle\" height=\"60\" style=\"font-size:20px;\"><p style=\"padding:0;margin:0;\">加入Mofee聚合支付结算群</p></td>
                                                        </tr>
                                                        <tr>
                                                            <td valign=\"top\" height=\"50\" style=\"font-size:14px;color:#b2b2b2;line-height:20px;\">
                                                                <p style=\"padding:0;margin:0;\">为您提供Mofee聚合支付接入相关资讯</p>
                                                                <p style=\"padding:0;margin:0;\">扫描左侧二维码加入群聊</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=\"2\" height=\"30\" style=\"border-bottom:1px solid #d6d6d6\"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=\"2\" height=\"73\"><p style=\"color:#b2b2b2;font-size:14px;text-align:center\">注意：该电子邮件地址不接受回复邮件，如果您要解决问题，请联系商户平台客服。</p></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=\"2\" height=\"20\"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td valign=\"middle\" width=\"30\"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr bgcolor=\"#e9e9e9\">
                            <td height=\"60\"></td>
                        </tr>
                    </tbody>
                    </table>";
        //发送激活邮件
        send_mail($toemail,$name,$subject,$content2);
        return true;
    }

}