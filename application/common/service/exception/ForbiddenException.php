<?php

namespace  app\common\service\exception;

/**
 * ForbiddenException
 * @package app\common\service\exception
 */
class ForbiddenException extends BaseException
{
    public $code = 403;
    public $msg = 'Unauthorized Access';
    public $errorCode = 10001;
}