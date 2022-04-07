<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\auth;
use Closure;

class Admin
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
    if(Auth::user()&&Auth::user()->role==1){
        return $next($request);
    }
        return redirect('/admin/login');
    
    
    
    }
}
