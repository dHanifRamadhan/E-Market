<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class returnBack
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $respon = $next($request);
        $respon->headers->set('Cache-Control', 'nocache, no-store, max-age=0, must-revalidate');
        $respon->headers->set('Pragma', 'no-cache');
        $respon->headers->set('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
        return $respon;
    }
}
