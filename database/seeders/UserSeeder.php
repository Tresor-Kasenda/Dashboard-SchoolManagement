<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = User::query()
            ->create([
                'name' => 'Admin',
                'email' => ''
            ]);

        $superAdminRole = Role::query()
            ->where('name', 'super-admin')
            ->first();

        $admins->assignRole($superAdminRole);
    }
}
