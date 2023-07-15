<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class University extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'initials',
        'address',
        'email',
        'phone',
        'code',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
