<?php
/**
 * Created by : PhpStorm
 * User: zachary
 * Email: z18811737572@163.com
 * Date: 2020/9/14
 * Time: 17:14
 */

namespace Zachary\Http;


use Zachary\Util\HttpUtil;

class HttpClient
{
    private static $connectTimeout = 30000;//30 second
    private static $readTimeout    = 80000;//80 second

    public static function execute($request)
    {
        return HttpUtil::send($request, self::$readTimeout, self::$connectTimeout);
    }
}