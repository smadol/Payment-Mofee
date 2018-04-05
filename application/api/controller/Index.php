<?php
/**
 * Created by 小羊.
 * Author: 勇敢的小笨羊
 * 微博: http://weibo.com/xuzuxing
 * Date: 2018/3/4
 * Time: 22:18
 */

namespace app\api\controller;
use app\api\model\MerchantOrder;
use app\lib\Aes;
use app\lib\exception\OrderException;

class Index extends Base
{

    public function test(){
        $orderData = [
            'out_trade_no' => "41516000" . time(),      //平台支付单号
            'total_fee' => "1",   //支付金额
            'body'      => "测试", //支付项目
        ];

        $qpay = \Yansongda\Pay\Pay::qpay(config('qq.qpay'))->scan($orderData);

        return $qpay->code_url;
    }


    /**
     * @return mixed
     * @throws OrderException
     * @throws \think\exception\DbException
     */
    public function handle(){
        //商户订单传入参数
        $data = input();
        if (isset($data['trade_no']) && isset($data['type']) ){
            $order = MerchantOrder::get([
                'trade_no' => $data['trade_no'],
                'method'   => $data['type']
            ]);
                if ($order){
                $this->assign('orderData',$order);
                if($data['type'] == 'WXPAY'){
                    return $this->fetch('wxpay');
                }else{
                    return $this->fetch('qqpay');
                }
            }
            throw new OrderException(['msg'=>'订单参数错误'] );
        }else{
            throw new OrderException();
        }
    }
    

    /**
     * 查询订单状态
     * @param $trade_no
     * @param $timestamp
     * @return \think\response\Json
     * @throws \think\exception\DbException
     */
    public function check($trade_no,$timestamp)
    {
        $res = MerchantOrder::get(['trade_no'=>$trade_no]);
        if ($res['status'] == 2){
            return result($res['back_url']);
        }else{
            return result($timestamp,'0','未支付');
        }

    }

}