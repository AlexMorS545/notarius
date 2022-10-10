<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Record extends Model
{
    use HasFactory;

    const TABLE = 'records';

    public static array $types = [
        'trust' => 'доверенность',
        'heritage' => 'наследство',
        'reference' => 'справка',
    ];

    protected $fillable = [
        'user_id',
        'type',
        'recorded_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
