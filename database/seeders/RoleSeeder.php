<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected array $roles = [

        ['name' => 'SuperAdmin', 'guard_name' => 'admin'],
        ['name' => 'Admin', 'guard_name' => 'admin'],
        ['name' => 'Comptable', 'guard_name' => 'admin'],
        ['name' => 'Developper', 'guard_name' => 'admin']
    ];

    public function run()
    {
        foreach ($this->roles as $role) {
            Role::create($role);
        }
    }
}
