<?php

namespace App\Middlewares;

use Closure;
use Core\Request\Request;

class HasAuth
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->data()["auth"] != "yes") {
            return redirect("/");
        }

        return $next($request);
    }
}
