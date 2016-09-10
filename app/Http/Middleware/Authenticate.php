<?php

namespace App\Http\Middleware;

use App\AppClasses\RoleHandler;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Auth;
use Illuminate\Support\Facades\Session;

class Authenticate
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('auth/login');
            }
        }

//        if (!Session::has('routesList')) {
//            $userRoles = json_decode(Auth::user()->role->roles);
//            Session::push('routesList', $userRoles);
//        }

        $userRoles = RoleHandler::userRoles();
        if (in_array($request->route()->getActionName(), $userRoles)) {
            return $next($request);
        }
        return response('Unauthorized.', 401);
    }
}
