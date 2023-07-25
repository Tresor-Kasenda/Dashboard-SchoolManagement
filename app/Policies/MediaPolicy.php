<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Media;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

final class MediaPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function update(User $user, Media $media): bool
    {
    }

    public function delete(User $user, Media $media): bool
    {
    }

    public function restore(User $user, Media $media): bool
    {
    }

    public function forceDelete(User $user, Media $media): bool
    {
    }
}
