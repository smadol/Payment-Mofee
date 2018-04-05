<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use app\lib\Aes;
use app\lib\Mail;
use think\Log;
use app\lib\AliSms;
use think\captcha\Captcha;

/**
 * 通用化API接口数据输出
 * @param $code
 * @param $msg
 * @param array $data
 * @param int $httpCode
 * @return \think\response\Json
 */
function result($data=[], $code = '1', $msg = 'SUCCESS', $httpCode=200) {

    $data = [
        'code'  => $code,
        'msg'   => $msg,
        'time'  => \request()->time(),
        'data'  => $data
    ];

    return json($data, $httpCode);
}

/**
 * 检测是否登录
 * @return boolean 是否登录
 */
function check_login(){
    $res  = session(request()->cookie('admin_token'));
    if (empty($res)){
        return false;
    }else{
        return true;
    }
}

/**
 * 验证码效验
 * @param $code
 * @return mixed
 */
function check_verify($code){
    $captcha = new Captcha();
    return $captcha->check($code);
}

/**
 * 获取时间
 * @param string $date
 * @return array
 */
function getTimestamp($date ='today'){
    switch($date){
        case 'today':
            //php获取今日开始时间戳和结束时间戳
            $start=mktime(0,0,0,date('m'),date('d'),date('Y'));
            $end=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;
            break;
        case 'yesterday':
            //php获取昨日起始时间戳和结束时间戳
            $start=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
            $end=mktime(0,0,0,date('m'),date('d'),date('Y'))-1;
            break;
        case 'thisweek':
            //php获取本周周起始时间戳和结束时间戳
            $start=mktime(0,0,0,date('m'),date('d')-date('w'+1),date('Y'));
            $end=mktime(23,59,59,date('m'),date('d')-date('w')+7,date('Y'));
            break;
        case 'lastweek':
            //php获取上周起始时间戳和结束时间戳
            $start=mktime(0,0,0,date('m'),date('d')-date('w')+1-7,date('Y'));
            $end=mktime(23,59,59,date('m'),date('d')-date('w')+7-7,date('Y'));
            break;
        case 'thismonth':
            //php获取本月起始时间戳和结束时间戳
            $start=mktime(0,0,0,date('m'),1,date('Y'));
            $end=mktime(23,59,59,date('m'),date('t'),date('Y'));
            break;
        default :
            //php获取今日开始时间戳和结束时间戳
            $start=mktime(0,0,0,date('m'),date('d'),date('Y'));
            $end=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;
            break;
    }

    return ['start' =>$start,'end'=> $end];
}

/**
 * 系统邮件发送函数
 * @param $tomail
 * @param $name
 * @param string $subject
 * @param string $body
 * @param null $attachment
 * @return bool|string
 * @throws
 */
function send_mail($tomail, $name, $subject = '', $body = '', $attachment = null) {
    $result = Mail::send(
        $tomail,    //发给谁
        $name,      //接收名字
        $subject,   //标题
        $body,      //内容
        $attachment //附件
    );
    return $result;
}

/**
 * AES加密
 * @param $string
 * @return string
 */
function eAes($string){
    $aes = new Aes();
    return $aes->encrypt($string);

}


/**
 * Md5 盐加密
 * @param $string
 * @return string
 */
function xmd5($string){
    return md5($string . md5(config('app.md5key')));
}


/**
 * AES解密
 * @param $string
 * @return string
 */
function dAes($string){
    $aes = new Aes();
    return $aes->decrypt($string);

}
/**
 * linux读取/dev/urandom获取随机数
 * @param $len  //字符串长度
 * @return mixed|string
 */
function randomFromDev($len) {
    $fp = @fopen('/dev/urandom','rb');
    $result = '';
    if ($fp !== FALSE) {
        $result .= @fread($fp, $len);
        @fclose($fp);
    }
    else
    {
        trigger_error('Can not open /dev/urandom.');
        return substr(time().MD5(time().rand()), 0, $len);
    }
    // convert from binary to string
    $result = base64_encode($result);
    // remove none url chars
    $result = strtr($result, '+/', '-_');

    return substr($result, 0, $len);
}

/**
 * 生成支付订单号
 * @return string
 */
function makePayOrderNo()
{
    $yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
    $orderSn =
        $yCode[intval(date('Y')) - 2018] . strtoupper(dechex(date('m')))
        . date('d') . substr(time(), -5) . substr(microtime(), 2, 8)
        .substr(time(),3,8). sprintf('%02d', rand(0, 999));
    return $orderSn;
}

/**
 * 生成随机单号
 * @return string
 */
function makeNo($salt = '')
{
    $orderSn =
        $salt . date("YmdHis"). substr(microtime(), 2, 8)
        .substr(time(),3,8). sprintf('%02d', rand(0, 999));
    return $orderSn;
}


/**
 * @param $xml
 * @param $url
 * @param $target
 * @param int $retry
 * @param int $sleep
 * @param int $second
 * @return mixed
 */
function curl_post_xml($xml, $url, $target = 'FAIL', $retry=3, $sleep = 1 ,$second = 30)
{
    $ch = curl_init();
    //设置超时
    curl_setopt($ch, CURLOPT_TIMEOUT, $second);
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
    curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,FALSE);//严格校验
    //设置header
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    //要求结果为字符串且输出到屏幕上
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    //post提交方式
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);

    //运行curl
    $output = curl_exec($ch);
    while(strpos($output,$target) !== false  && $retry--){
        //检查$targe是否存在
        sleep($sleep); //阻塞1s
        $output = curl_exec($ch);
    }
    curl_close($ch);
    return $output;
}


/**
 * @param string $url post请求地址
 * @param array $params
 * @return mixed
 */
function curl_post($url, array $params = array())
{
    $data_string = json_encode($params);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt(
        $ch, CURLOPT_HTTPHEADER,
        array(
            'Content-Type: application/json'
        )
    );
    $data = curl_exec($ch);
    curl_close($ch);
    return ($data);
}

function curl_post_raw($url, $rawData)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $rawData);
    curl_setopt(
        $ch, CURLOPT_HTTPHEADER,
        array(
            'Content-Type: text'
        )
    );
    $data = curl_exec($ch);
    curl_close($ch);
    return ($data);
}

/**
 * @param string $url get请求地址
 * @param int $httpCode 返回状态码
 * @return mixed
 */
function curl_get($url, &$httpCode = 0)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    //不做证书校验,部署在linux环境下请改为true
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    $file_contents = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $file_contents;
}

/**
 * 获取随机字符
 * @param string $length
 * @param $format
 * @return null|string
 */
function getRandChar($length = '4',$format = '')
{
    switch($format){
        case 'CHAR':
            $strPol='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            break;
        case 'NUMBER':
            $strPol='0123456789';
            break;
        default :
            $strPol='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            break;
    }
    $str = null;
    //$strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
    $max = strlen($strPol) - 1;

    for ($i = 0;
         $i < $length;
         $i++) {
        $str .= $strPol[rand(0, $max)];
    }

    return $str;
}



function fromArrayToModel($m , $array)
{
    foreach ($array as $key => $value)
    {
        $m[$key] = $value;
    }
    return $m;
}


