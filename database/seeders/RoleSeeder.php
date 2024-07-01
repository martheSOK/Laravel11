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

        //création de toutes mes permission
        $models=['user','entreprise','evenement'];
        $actions=['create','liste','voir','store','edit','update','delete'];
        foreach ($models as $model_name) {
            foreach ($actions as $action) {
                //forma de création
                $permission_name=$action."_".$model_name;
                Permission::create(['name' => $permission_name]);
            }
        }
        $user_permissions=[
            'liste_user',
            // 'edit_user',
            'voir_user',
            'liste_evenement',
            'voir_evenement',
        ];


        //Permissions pour une entreprise



        Role::create(['name' => 'admin'])->givePermissionTo(Permission::all());
        Role::create(['name' => 'user'])->givePermissionTo($user_permissions);

    }
}
