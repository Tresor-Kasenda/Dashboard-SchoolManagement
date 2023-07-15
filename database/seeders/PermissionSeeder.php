<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'view users',
            'create users',
            'edit users',
            'delete users',
            'view roles',
            'create roles',
            'edit roles',
            'delete roles',
            'view permissions',
            'create permissions',
            'edit permissions',
            'delete permissions',
            'view university',
            'create university',
            'edit university',
            'delete university',
            'view faculty',
            'create faculty',
            'edit faculty',
            'delete faculty',
            'view department',
            'create department',
            'edit department',
            'delete department'
        ];

        collect($permissions)
            ->each(fn ($permission) => Permission::create([
                'name' => $permission,
                'guard_name' => 'web',
            ]));
    }
}
