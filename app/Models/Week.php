<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static where(string $string, true $true)
 */
class Week extends Model
{
    protected $fillable = [
        'name',
        'start_at',
        'is_active',
        'max_picks',
        'payout',
    ];

    protected $casts = [
        'start_at' => 'datetime',
    ];

    public function games(): HasMany
    {
        return $this->hasMany(Game::class);
    }

    public function picks(): HasMany
    {
        return $this->hasMany(Pick::class);
    }
}
