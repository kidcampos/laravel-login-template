<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if (Auth::check()):     
            if ($request->user()->email !== "delpazcampos@mail.com"):
                return redirect('/');
            endif;
        else:
            return redirect('/login');
        endif;

        return $next($request);
    }
}
