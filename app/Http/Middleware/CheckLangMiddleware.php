<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $lang = $request->header('Accept-Language');
    
        if ($lang !== 'fr' ) {
            return response()->json(['error' => 'Langue non supportée'], 400);
        }

        return $next($request);   
     }
}
