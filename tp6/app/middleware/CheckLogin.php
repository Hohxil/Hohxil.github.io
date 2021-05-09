<?php
declare (strict_types = 1);

namespace app\middleware;
use think\facade\Session;
class CheckLogin
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        $response = $next($request);
        if(!Session::has('isLogin') && Session::has('isLogin') == false){

            return redirect('../');
        }
         return $next($request);
    }
}
