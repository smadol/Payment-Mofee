<?php
/**
 * Created by 小羊.
 * Author: 勇敢的小笨羊
 * 微博: http://weibo.com/xuzuxing
 * Date: 2018/3/17
 * Time: 21:58
 */

namespace app\index\controller;


class Support extends Base
{
    /**
     * API支付文档
     * @return mixed
     */
    public function document()
    {
        return $this->fetch();
    }

    public function help(){
        return $this->fetch();
    }
    public function sdk(){
        return $this->fetch();
    }

}