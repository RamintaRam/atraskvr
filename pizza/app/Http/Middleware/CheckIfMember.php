<?php

namespace App\Http\Middleware;

use App\models\DTRoles;
use App\models\DTUsers;
use Closure;

class CheckIfMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $roles = auth()->user()->rolesConnections->pluck('roles_id')->toArray();

        if(in_array("member", $roles) or in_array("check-role-member", $roles))

            return $next($request);

        return abort(403, "no permission!");
    }
}

