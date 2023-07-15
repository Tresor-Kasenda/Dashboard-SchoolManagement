<?php

declare(strict_types=1);

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasRoles;
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'firstname',
        'email',
        'phone_number',
        'status',
        'feature_image_id',
        'password',
        'university_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'status' => StatusEnum::class,
    ];

    public function attachUniversity(): void
    {
        $this->university()->create([
            'name' => 'University of the Philippines',
            'initials' => 'UP',
            'address' => 'University of the Philippines',
            'email' => 'kasenda@gmail.com',
            'code' => Arr::random(['UP', 'UPD', 'UPM', 'UPC', 'UPV',])
        ]);
    }

    public function university(): BelongsTo
    {
        return $this->belongsTo(University::class);
    }
}
