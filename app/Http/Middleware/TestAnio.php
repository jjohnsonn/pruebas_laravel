<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestAnio
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
        $anio = $request->route('year');
        if(is_null($anio) || $anio != 2022){
            return redirect('/index');
        }
        return $next($request);
    }
}
