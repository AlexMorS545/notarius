<?php

namespace App\Actions\Cookies;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;

class GetToken
{
    public function __invoke()
    {
        $cookie_token = Crypt::decryptString(Cookie::get('Cookie-Token'), false);
        $token = explode('|', $cookie_token)[1];
        return $token;
    }
}
