<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\University;
use Exception;
use Illuminate\Database\Seeder;

final class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @throws Exception
     */
    public function run(): void
    {
        University::query()
            ->create([
                'name' => "Vinco E-Learning",
                'initials' => "Vinco",
                'address' => "South Africa, Johasbourg 20",
                'email' => "information@vinco.educ",
                'phone' => "+243975492273",
                'code' => random_bytes(5)
            ]);
    }
}
