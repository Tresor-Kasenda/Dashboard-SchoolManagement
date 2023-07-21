<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Session;
use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SessionFactory extends Factory
{
    protected $model = Session::class;

    public function definition(): array
    {
        return [
            'start_year' => Carbon::now(),
            'end_year' => Carbon::now(),
            'university_id' => University::factory(),
        ];
    }
}
