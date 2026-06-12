<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($this->isAdmin()) {
            return $next($request);
        }

        return response('You are not a admin!');
    }

    protected function isAdmin(): bool
    {
        return false;
    }
}
