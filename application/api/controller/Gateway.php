<?php
/**
 * Author: Single Dog
 * Github: https://github.com/SingleSheep
 * Date: 2018/2/4 - 21:28
 */

namespace app\api\controller;
error_reporting(E_ERROR);

use app\common\service\exception\ForbiddenException;
use think\Loader;
use think\Request;

Loader::import('phpqrcode.phpqrcode');

/**
 * 支付网关
 * Class Gateways
 * @package app\api\controller
 */
class Gateway extends Base
{

    /**
     * 指定路由forbidden
     * @throws ForbiddenException
     */
    public function index(){

        throw new ForbiddenException();
    }

    /**
     * 跳转网关支付
     * @return array|mixed
     * @throws OrderException
     * @throws ParameterException
     */
    public function gateway(){
        $REQUEST_DATA = Request::instance()->post();
        $validate = new GatewayValidate();
        //参数完整性
        if (is_null($REQUEST_DATA['appid']||$REQUEST_DATA['mch_id'])){
            throw new ParameterException([
                'msg'   =>  '商户参数错误'
            ]);
        }
        if($REQUEST_DATA['body'] == '' || $REQUEST_DATA['total_fee'] == '' || $REQUEST_DATA['out_trade_no'] == ''){
            throw new ParameterException([
                'msg'   =>  '订单参数错误'
            ]);
        }
        if($REQUEST_DATA['return_url'] == '' || $REQUEST_DATA['notify_url'] == '' || $REQUEST_DATA['nonce_str'] == ''){
            throw new ParameterException([
                'msg'   =>  '订单参数错误'
            ]);
        }
        //传入订单信息
        $MoPay= new MoPay($REQUEST_DATA);
        $result = $MoPay->pay();

        if($REQUEST_DATA['trade_type'] == 'ALIPAY'){
            return $result;
        }else {
                if ($result) {
                    $url = 'https://api.pay.98imo.com/redirect?trade_no=';
                    $param= $REQUEST_DATA['out_trade_no']
                        . '&type=' . $REQUEST_DATA['trade_type']
                        . '&t=' . time() . rand(1000.99999) . md5(time())
                        . '&callback=' . $REQUEST_DATA['return_url'] ;
                $this->redirect($url.$param);
            } else {
                throw new OrderException(['msg' => '订单生成错误']);
            }
        }
    }



    public function transfer()
    {
        $order = [
            'out_biz_no' => date('Ydmhis') . time(),
            'payee_type' => 'ALIPAY_LOGONID',
            'payee_account' => '702154416@qq.com',
            'amount' => '0.01',
        ];

        $result = PayService::alipay(config('ali.alipay'))->transfer($order);
        dump($result);
    }

    /**
     * 商户API调用支付接口
     * @return string
     * @throws ForbiddenException
     * @throws ParameterException
     * @throws \app\lib\exception\OrderException
     * @throws \app\lib\exception\UserException
     */
    public function getPreOrder()
    {
        if(Request::instance()->isPost()){
            //接收传送的数据
            $fileContent = file_get_contents("php://input");

            //把xml转换为数组
            $REQUEST_DATA = (new MoPayDataBase())->FromXml($fileContent);
            //参数完整性
            if ($REQUEST_DATA['appid'] == ''  || $REQUEST_DATA['mch_id'] == '' ){
                throw new ParameterException([
                    'msg'   =>  '商户参数错误'
                ]);
            }
            if($REQUEST_DATA['body'] == '' || $REQUEST_DATA['total_fee'] == '' || $REQUEST_DATA['out_trade_no'] == ''){
                throw new ParameterException([
                    'msg'   =>  '订单参数错误'
                ]);
            }
            //传入订单信息
            $pay= new MoPay($REQUEST_DATA);
            $res = $pay->pay();
            //XML返回
            return $res;

        }else{
            throw new ForbiddenException([
                'msg'   =>  '提交方式不正确'
            ]);
        }
    }


    /**
     * 二维码
     * @param $data
     * @return string
     */
    public function qrcode($data){
        $url = urldecode($data);
        $level = 'L';// 纠错级别：L、M、Q、H
        $size =4;// 点的大小：1到10,用于手机端4就可以了
        $QRcode = new \QRcode();
        ob_start();
        $QRcode->png($url,false,$level,$size,2);
        $imageString = base64_encode(ob_get_contents());
        ob_end_clean();
        $qrdata =  "data:image/jpg;base64," . $imageString ;
        return "<img src='{$qrdata}' />";
    }


    //WxPay支付回调
    public function qqNotify()
    {
        $notify = new QpayNotify();
        $notify->handle();
    }

    /**
     * 阿里支付跳转
     * @throws \Yansongda\Pay\Exceptions\InvalidSignException
     * @throws \think\exception\DbException
     */
    public function aliRedirect()
    {
        $notify = new AliNotify();
        $url = $notify->backMerchant();
        $this->redirect($url);
    }

    /**
     * AliPay
     * @throws \Yansongda\Pay\Exceptions\InvalidSignException
     */
    public function aliNotify()
    {
        $notify = new AliNotify();
        $notify->handle();

    }

    public function notifyConcurrency()
    {
        $notify = new WxNotify();
        $notify->handle();
    }

    //WxPay支付回调
    public function wxNotify()
    {
        $notify = new WxNotify();
        $notify->handle();
    }

    public function receiveNotify()
    {
        $notify = new WxNotify();
        $notify->handle();
    }
}