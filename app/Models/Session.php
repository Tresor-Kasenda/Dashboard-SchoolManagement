<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_year',
        'end_year',
        'university_id',
    ];

    protected $casts = [
        'start_year' => 'datetime',
        'end_year' => 'datetime',
    ];
}
