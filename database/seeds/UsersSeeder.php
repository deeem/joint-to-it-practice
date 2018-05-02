<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_superadmin = \App\Role::where('slug', 'superadmin')->first();
        $role_admin = \App\Role::where('slug', 'admin')->first();
        $role_manager =  \App\Role::where('slug', 'manager')->first();
        $role_user = \App\Role::where('slug', 'user')->first();

        factory('App\User')->create(['email' => 'superadmin@example.org'])
            ->roles()->attach($role_superadmin->id);

        factory('App\User')->create(['email' => 'admin@example.org'])
            ->roles()->attach($role_admin->id);

        factory('App\User')->create(['email' => 'manager@example.org'])
            ->roles()->attach($role_manager->id);

        factory('App\User')->create(['email' => 'user@example.org'])
            ->roles()->attach($role_user->id);
    }
}
