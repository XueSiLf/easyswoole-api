<?php

namespace EasySwoole\EasySwoole;

use EasySwoole\Component\Di;
use EasySwoole\EasySwoole\AbstractInterface\Event;
use EasySwoole\EasySwoole\Swoole\EventRegister;

class EasySwooleEvent implements Event
{
    public static function initialize()
    {
        date_default_timezone_set('Asia/Shanghai');

        Di::getInstance()->set(SysConst::HTTP_CONTROLLER_NAMESPACE, 'App\\Controller\\');
    }

    public static function mainServerCreate(EventRegister $register)
    {

    }
}