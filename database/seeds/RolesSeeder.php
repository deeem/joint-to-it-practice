<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = Role::create([
            'name' => 'Super Admin',
            'slug' => 'superadmin',
            'permissions' => [
                'map' => true,
                'dashboard' => true,
                'charts' => true,
                'components' => true,
                'table' => true,
            ]
        ]);

        $admin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => [
                'map' => true,
                'dashboard' => true,
                'charts' => true,
                'components' => true,
            ]
        ]);

        $manager = Role::create([
            'name' => 'Manager',
            'slug' => 'manager',
            'permissions' => [
                'tables' => true,
            ]
        ]);

        $user = Role::create([
            'name' => 'User',
            'slug' => 'user',
            'permissions' => [
                'components' => true,
            ]
        ]);
    }
}
