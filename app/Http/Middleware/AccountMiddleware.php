<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
use App\Account;
class AccountMiddleware
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
        if(Auth::user()){
            $acc=Account::where('user_id', Auth::user()->id)->first();
                
        }else{
            //return redirect('/login');
            $acc=new Account;
    }
  $request->merge(compact('acc'));
        return $next($request);
    }
}
