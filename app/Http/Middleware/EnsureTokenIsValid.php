<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\UserTokenService;
use App\Exceptions\NotAuthenticateException;
use App\Exceptions\ExpiredAuthenticateException;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();
        $userTokenService = new UserTokenService();
        
        if (!$userTokenService->verifyTokenExists($token)) throw new NotAuthenticateException();
        if ($userTokenService->verifyTokenExpired($token)) throw new ExpiredAuthenticateException();

        return $next($request);
    }
}
