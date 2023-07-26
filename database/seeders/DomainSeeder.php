<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Domain;
use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            'Informatique',
            'Electronique',
            'Mécanique',
            'Electrique',
            'Communication',
            'Economie',
            'Gestion',
            'Comptabilité',
            'Droit',
            'Lettre',
            'Langue',
            'Art'
        ])->each(fn ($domain) => Domain::factory()->create(['name' => $domain]));
    }
}
