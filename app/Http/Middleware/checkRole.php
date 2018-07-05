<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CheckRole
{
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if($user->isAdmin == 'true'){
                return $next($request);
            }else{
                
                return redirect()->route('getLogoutAdmin');
            }
        }else{
            
            return redirect()->route('getLogoutAdmin');
        }
    }
}
