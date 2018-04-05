<?php
namespace app\common\service\exception;

/**
 * ParameterException
 * @package app\common\service\exception
 */
class ParameterException extends BaseException
{
    public $code = 400;
    public $errorCode = 10000;
    public $msg = "invalid parameters";
}