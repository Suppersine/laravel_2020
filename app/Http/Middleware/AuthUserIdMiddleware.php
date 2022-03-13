<?php

namespace App\Http\Middleware;

use Closure;
use App\Eloq\User;

class AuthUserIdMiddleware
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
        $matches = false;
        $user_id = session()->get('user_id');

        if (!is_null($user_id)) {
            $User = User::findOrFail($user_id);
            if (($User->id == $user_id) || ($User->priv == 'A')) {
                $matches = true;
            }
        }

        if (!$matches) {
            return redirect()->to('/');
        }
        return $next($request);
    }
}