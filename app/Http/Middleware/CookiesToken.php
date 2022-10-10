<?php

namespace App\Http\Middleware;

use App\Models\RememberToken;
use App\Actions\Cookies\CreateCookieToken;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookiesToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (!Cookie::has('Cookie-Token')) {
            $cookie_token = (new CreateCookieToken)();
            $rememberToken = RememberToken::create(['token' => $cookie_token]);
            Cookie::queue('Cookie-Token', $rememberToken->token, 10080);
        }

        return $next($request);
    }
}
