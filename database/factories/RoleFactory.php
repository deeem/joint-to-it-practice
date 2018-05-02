<?php

use Faker\Generator as Faker;

$factory->define(App\Role::class, function (Faker $faker) {
    $name = $faker->word;

    return [
        'name' => $name,
        'slug' => $name,
        'permissions' => []
    ];
});

$factory->state(App\Role::class, 'superadmin', function (Faker $faker) {
    return [
        'name' => 'Super Admin',
        'slug' => 'superadmin',
        'permissions' => [
            'map' => true,
            'dashboard' => true,
            'charts' => true,
            'components' => true,
            'table' => true,
        ]
    ];
});

$factory->state(App\Role::class, 'admin', function (Faker $faker) {
    return [
        'name' => 'Admin',
        'slug' => 'admin',
        'permissions' => [
            'map' => true,
            'dashboard' => true,
            'charts' => true,
            'components' => true,
        ]
    ];
});

$factory->state(App\Role::class, 'manager', function (Faker $faker) {
    return [
        'name' => 'Manager',
        'slug' => 'manager',
        'permissions' => [
            'tables' => true,
        ]
    ];
});

$factory->state(App\Role::class, 'user', function (Faker $faker) {
    return [
        'name' => 'User',
        'slug' => 'user',
        'permissions' => [
            'components' => true,
        ]
    ];
});
