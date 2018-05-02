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
        $role_superadmin = factory('App\Role')->states('superadmin')->create();
        $role_admin = factory('App\Role')->states('admin')->create();
        $role_manager = factory('App\Role')->states('manager')->create();
        $role_user = factory('App\Role')->states('user')->create();

        $superadmin = factory('App\User')->create(['email' => 'superadmin@example.org']);
        $superadmin->roles()->attach($role_superadmin->id);

        $admin = factory('App\User')->create(['email' => 'admin@example.org']);
        $admin->roles()->attach($role_admin->id);

        $manager = factory('App\User')->create(['email' => 'manager@example.org']);
        $manager->roles()->attach($role_manager->id);

        $user = factory('App\User')->create(['email' => 'user@example.org']);
        $user->roles()->attach($role_user->id);
    }
}
