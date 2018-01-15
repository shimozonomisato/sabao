<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed 
     */
    public function handle($request, Closure $next)
    {

        $data = [
          ['name'=>'taro', 'mail'=>'taro@yamada'],
          ['name'=>'moca', 'mail'=>'moca@tanaka'],
          ['name'=>'sabao', 'mail'=>'sabao@saki'],
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
