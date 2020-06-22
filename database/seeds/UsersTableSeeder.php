<?php

use App\Models\User;
use App\Repositories\RoleRepository;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleRepository = app(RoleRepository::class);
        $roleAdmin = $roleRepository->getByRole('admin');
        $roleUser = $roleRepository->getByRole();
        User::create(['name' => 'Admin', 'email_verified_at' => Carbon::now(), 'email' => 'admin@admin.com', 'password' => bcrypt('111111')])
            ->roles()->saveMany([$roleAdmin, $roleUser]);
        User::create(['name' => 'Admin1', 'email_verified_at' => Carbon::now(), 'email' => 'admin1@admin.com', 'password' => bcrypt('111111')])
            ->roles()->save($roleAdmin);
        User::create(['name' => 'User', 'email_verified_at' => Carbon::now(), 'email' => 'user@user.com', 'password' => bcrypt('111111')])
            ->roles()->save($roleUser);
    }
}
