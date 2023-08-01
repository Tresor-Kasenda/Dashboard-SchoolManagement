<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\University;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

final class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = User::query()
            ->create([
                'name' => 'Administration',
                'email' => 'administration@vinco.com',
                'university_id' => University::first()->id,
                'password' => Hash::make('password')
            ]);

        $superAdminRole = Role::query()
            ->where('name', 'super-admin')
            ->first();

        $admins->assignRole($superAdminRole);
        $admins->givePermissionTo(Permission::all());
    }
}
