<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActiveMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($this->isActive()) {
            return $next($request);
        }

        abort(403);
    }

    protected function isActive(): bool
    {
        return true;
    }
}
