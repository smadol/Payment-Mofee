<?php
namespace app\common\service\exception;


/**
 * OrderException
 * @package app\common\service\exception
 */
class OrderException extends BaseException
{
    public $code = 404;
    public $msg = 'Order does not exist';
    public $errorCode = 80000;
}