<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cros
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Max-Age: 86400');
        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE, PATCH');

        if (strtolower($request->getMethod()) == 'options') {
            return response(['true']);
        }

        return $next($request);
    }
}
