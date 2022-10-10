<?php

namespace App\Actions\RememberToken;

use App\Models\RememberToken;
use App\Models\User;

class AddRememberToken
{
    public function __invoke(RememberToken $rememberToken, User $user)
    {
        $rememberToken->users()->attach($user->id);
    }
}
