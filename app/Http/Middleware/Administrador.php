<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Administrador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function __construct(Guard $auth){
        $this->auth = $auth;
    }

    public function handle($request, Closure $next){

        switch ($this->auth->user()->rol_id) {
            case 1:
                return $next($request);
            break;
            
            default:
                return redirect()->route('home');
            break;
        }
        
    }
}
