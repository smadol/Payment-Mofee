<?php
/**
 * Author: Single Dog
 * Github: https://github.com/SingleSheep
 * Date: 2018/2/17 - 22:08
 */

namespace app\admin\controller;


use app\common\model\MerchantOrder;
use app\common\model\MerchantSettle;
use app\common\model\MerchantWallet;

class Index extends Base
{

    /**
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index(){

        //获取当日
        $cur_date = strtotime(date('Y-m-d'));
        $res = db('merchant_order')
            ->where("create_time >= '{$cur_date}' and status > '1'")
            ->select();
        $total = '';
        foreach($res as $key=>$val){
            $total+= $val['amount'];
        }
        $now_day_count  = count($res);
        $now_day_amount = $total;
        //获取订单统计
        $model = new MerchantOrder();
        $orderData = $model->order('create_time desc')->limit(0,5)->select();
        $orderCount = $model->count();

        $total_fee = (new MerchantWallet())->sum('total');

        $this->assign('now_day_count',$now_day_count);
        $this->assign('orderCount',$orderCount);
        $this->assign('orderData',$orderData);
        $this->assign('total',$total_fee);
        return $this->fetch();
    }
    /**
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function order(){
        $model = new MerchantOrder();
        $orderData = $model
            ->order(['create_time'=>'desc'])
            ->select();
        $this->assign('orderData',$orderData);
        return $this->fetch();
    }

    /**
     * 结算记录
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function settle(){
        //获取结算记录
        $model = new MerchantSettle();
        $settleCount = $model->count();
        $settleData = $model
            ->order(['create_time'=>'desc'])
            ->select();
        $this->assign('settleCount',$settleCount);
        $this->assign('settleData',$settleData);
        return $this->fetch();
    }

}