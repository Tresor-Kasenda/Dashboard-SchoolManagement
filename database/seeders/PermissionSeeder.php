<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

final class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'view users',
            'view roles',
            'view permissions',
            'view university',
            'dashboard',
            'settings',
            'profile',
            'header-administrate',
            'header-academics',
            'manage users',
            'manage roles',
            'manage permissions',
            'manage university',
            'manage academics'
        ];

        collect($permissions)
            ->each(fn ($permission) => Permission::create([
                'name' => $permission,
                'guard_name' => 'web',
            ]));

        $superAdmin = Role::query()
            ->where('name', '=', 'super-admin')
            ->first();

        $superAdmin->givePermissionTo(Permission::all());

        $user = Role::query()
            ->where('name', '=', 'user')
            ->first();

        $user->givePermissionTo([
            'dashboard',
            'settings',
            'profile',
            'header-administrate',
        ]);

        $admin = Role::query()
            ->where('name', '=', 'admin')
            ->first();

        $admin->givePermissionTo([
            'view users',
            'view roles',
            'dashboard',
            'settings',
            'profile',
            'header-administrate',
            'header-academics',
            'manage users',
            'manage university',
            'manage academics'
        ]);
    }
}
