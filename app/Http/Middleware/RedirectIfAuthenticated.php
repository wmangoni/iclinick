<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/adm/home');
        }
        $user = DB::table('users')->where('email', $request->email)->get()->toArray();
        if (!empty($user)) {
            $user = $user[0];
            session(['user_id' => $user->id, 'user_name' => $user->name, 'user_email' => $user->email, 'user_type' => $user->type]);
        } else {
            return redirect('/adm/login')->withErrors(['Dados inválidos.', 'msg']);
        }

        return $next($request);
    }
}
