<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminVision
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
        if (!is_null(Auth::user())) {
            if(!session()->has('user_type')) {
                $user = DB::table('users')->where('email', Auth::user()->email)->get()->toArray();
                $user = $user[0];
                session(['user_id' => $user->id, 'user_name' => $user->name, 'user_email' => $user->email, 'user_type' => $user->type]);
            }

            if(session('user_type') != 1)
                return response()->view('errors.denied', ['name' => session('user_name') ], 500);
        }

        return $next($request);
    }
}
