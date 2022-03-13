<?php

namespace App\Http\Middleware;

use Closure;
use App\Eloq\User;

class AuthUserAdminMiddleware
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
        $is_allowed = false;
        $user_id = session()->get('user_id');

        if (!is_null($user_id)) {
            $User = User::findOrFail($user_id);
            if ($User->priv == 'A') {
                $is_allowed = true;
            }
        }

        if (!$is_allowed) {
            return redirect()->to('/');
        }
        return $next($request);
    }
}