<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Models\University;
use App\Notifications\UniversityNotification;
use Illuminate\Support\Facades\Notification;

class UniversityListener
{
    /**
     * Create the event listener.
     */
    public function __construct(public University $university)
    {

    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        Notification::send($this->university->user, new UniversityNotification($event));
    }
}
