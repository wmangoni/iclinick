<?php

namespace App\Http\Middleware;

use Closure;

class AfterDoctorVision
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
        dd(Auth::user());
        $user = DB::table('users')->where('email', $request->email)->get()->toArray();
        $user = $user[0];
        session(['user_id' => $user->id, 'user_name' => $user->name, 'user_email' => $user->email, 'user_type' => $user->type]);

        if(session('user_type') > 2)
            return response()->view('errors.denied', ['name' => session('user_name') ], 500);

        return $next($request);
    }
}
