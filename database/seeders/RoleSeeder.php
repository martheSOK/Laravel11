<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Permission::create(['name' => 'admin']);
        Permission::create(['name' => 'user']);


        Role::create(['name' => 'admin'])->givePermissionTo(['admin','user']);
        Role::create(['name' => 'user'])->givePermissionTo('user');

    }
}
