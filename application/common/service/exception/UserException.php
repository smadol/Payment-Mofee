<?php
/**
 * Author: Single Dog
 * Github: https://github.com/SingleSheep
 * Date: 2018/2/9 - 17:23
 */

namespace app\common\service\exception;


/**
 * UserException
 * @package app\common\service\exception
 */
class UserException extends BaseException
{
    public $code = 401;
    public $msg = '用户不存在';
    public $errorCode = 60000;
}