<?php

declare(strict_types=1);

namespace App\Models;

use App\Events\UniversityEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

final class University extends Model
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

    protected $dispatchesEvents = [
        'created' => UniversityEvent::class
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
