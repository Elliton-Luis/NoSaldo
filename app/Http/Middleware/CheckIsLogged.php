<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIsLogged
{
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check()){
            return $next($request);
        }
        return redirect()->route('login.index')->with('error','Você não tem acesso a essa área');
    }
}
