<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

final class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'super-admin',
            'admin',
            'user',
            'teacher',
            'student',
            'parent',
            'librarian'
        ];

        collect($roles)->each(fn ($role) => Role::create([
            'name' => $role,
            'guard_name' => 'web'
        ]));
    }
}
