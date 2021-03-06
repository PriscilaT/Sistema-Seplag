<?php

namespace App\Http\Middleware;

use Closure;

class EnsureAdmin
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
        if(isset($_SESSION['usuario']->is_admin)) {
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}