<?php
// +----------------------------------------------------------------------
// | Test1Middleware.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Tests\App\Middleware;

use Closure;
use Phalcon\Di\FactoryDefault;
use Buffary\Phalcon\Middleware\Middleware;

class SecondMiddleware extends Middleware
{
    public function handle($request, Closure $next)
    {
        // echo 'secondStart' . PHP_EOL;
        $response = $next($request);
        // echo 'secondEnd' . PHP_EOL;
        return $response;
    }
}
