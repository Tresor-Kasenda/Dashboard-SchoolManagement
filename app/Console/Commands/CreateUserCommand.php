<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

final class CreateUserCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'make:vinco-user';

    /**
     * @var string
     */
    protected $description = 'Command description';

    /**
     * @return void
     */
    public function handle(): void
    {
        $user['name'] = $this->ask('Name of the new user');
        $user['email'] = $this->ask('Email of the new user');
        $user['password'] = $this->secret('Password of the new user');

        $roleName = $this->choice(
            'Role of the new user',
            ["super-admin", 'admin', 'user'],
            0
        );

        $role = Role::query()
            ->where('name', '=', $roleName)
            ->first();

        if ( ! $role) {
            $this->error('Role not found');
            return;
        }

        DB::transaction(function () use ($role, $user): void {
            $user = User::query()->create($user);
            $user->assignRole($role);
        });

        $this->info('User'.$user['email'].'create successfully');
    }
}
