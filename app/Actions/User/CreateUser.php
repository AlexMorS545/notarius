<?php

namespace App\Actions\User;

use App\Models\User;

class CreateUser
{
    public function __invoke($data)
    {
        $user = User::where('email', $data['email'])->first();
        if (!$user) {
            $user = User::create([
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
            ]);
        }

        return $user;
    }
}
