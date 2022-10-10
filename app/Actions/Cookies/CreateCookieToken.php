<?php

namespace App\Actions\Cookies;

use Illuminate\Support\Str;

class CreateCookieToken
{
    public function __invoke()
    {
        return Str::random(60);
    }
}
