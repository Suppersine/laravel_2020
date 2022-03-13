<?php

namespace App\Http\Middleware;

use Closure;
use App\Eloq\User;

class AuthUserMiddleware
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
        $is_logged_in = false;
        $user_id = session()->get('user_id');

        if (!is_null($user_id)) {
            $User = User::findOrFail($user_id);
            $is_logged_in = true;
        }

        if (!$is_logged_in) {
            return redirect()->to('/user/auth/sign-in');
        }
        return $next($request);
    }
}
