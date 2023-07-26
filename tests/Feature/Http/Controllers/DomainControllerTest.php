<?php

declare(strict_types=1);

use App\Models\Domain;
use App\Models\User;

it('set domain configuration', function (): void {
    $domains = Domain::factory()->for(User::factory())
        ->count(10)->create();

});
