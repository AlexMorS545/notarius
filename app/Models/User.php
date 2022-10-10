<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const TABLE = 'users';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
    ];

    public function records(): HasMany
    {
        return $this->hasMany(Record::class);
    }

    public function remember_tokens(): BelongsToMany
    {
        return $this->belongsToMany(RememberToken::class);
    }

}
