<?php

namespace App\Http\Middleware;

use Closure;

class AfterMiddleware{
    public function handle($request, Closure $next){
        $response = $next($request);
        // 这是后置中间件，$next 已经执行完毕并返回响应 $repsonse,
        // 我们可以在此处对响应进行修改
        return $response;
    }

}
