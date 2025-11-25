<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'capacity',
        'location',
        'start_date',
    ];

    protected function casts(): array
    {
        return [
            'start_date' => 'date',
        ];
    }

    public function teams(): HasMany
    {
        return $this->hasMany(Team::class);
    }
}
