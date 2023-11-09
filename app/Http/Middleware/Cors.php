<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //これじゃあかん
        // return $next($request);
        // ->header('Access-Control-Allow-Origin', 'http://localhost:3000')
        // ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        // ->header('Access-Control-Allow-Headers', 'Content-Type');

        /** @var Response $response */
        $response = $next($request);

        if (env('APP_DEBUG') && $request->header('Origin')) {
            $response->headers->set('Access-Control-Allow-Credentials', 'true');
            $response->headers->set('Access-Control-Allow-Origin', $request->header('Origin'));
            $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
            $response->headers->set('Access-Control-Allow-Headers', 'Origin, Authorization, Accept, Content-Type, X-XSRF-Token');
            $response->headers->set('Access-Control-Expose-Headers', 'Authorization');
        }

        return $response;
    }
}
