<?php

namespace App\Actions\RememberToken;

use App\Models\RememberToken;

class CreateRememberToken
{
    public function __invoke($token)
    {
        $rememberToken = RememberToken::create(['token' => $token]);
        return $rememberToken;
    }
}
