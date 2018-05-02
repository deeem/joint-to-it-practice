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
        Role::create([
            'name' => 'Super Admin',
            'slug' => 'superadmin',
            'permissions' => [
                'map' => true,
                'dashboard' => true,
                'charts' => true,
                'components' => true,
                'tables' => true,
            ]
        ]);

        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => [
                'map' => true,
                'dashboard' => true,
                'charts' => true,
                'components' => true,
            ]
        ]);

        Role::create([
            'name' => 'Manager',
            'slug' => 'manager',
            'permissions' => [
                'tables' => true,
            ]
        ]);

        Role::create([
            'name' => 'User',
            'slug' => 'user',
            'permissions' => [
                'components' => true,
            ]
        ]);
    }
}
