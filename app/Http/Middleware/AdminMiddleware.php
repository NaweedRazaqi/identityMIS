<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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

        if(Auth::check()){
            //ddd( $request);
            if(Auth::User()->role != '1' || Auth::User()->activate == 0){

                return redirect(route('login'))->with('error','Access is denied! as you are not admin');
                //  return $next($request);
                // return redirect('/main','Access is Denid! Because you dont have the admin privilage');

            }
            else{
                return $next($request);

             }
        }
        else{
            return redirect('/login','Access is Denid! becaue you are not logged in');
        }
        return $next($request);


    }
}
