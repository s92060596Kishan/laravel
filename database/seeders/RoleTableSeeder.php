<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        echo'---------------------------------'."\n";
        echo'------------Role Add----------------'."\n";
        $role =new Role;
        $role->name = "is_admin";
        $role->save();
        echo"------------Role Add $role->name----------------"."\n";
        echo'---------------------------------'."\n";
        $permission = Permission::get();
         foreach ($permission as $key => $value){
            $role->givePermissionTo($value->name);
            echo"------------Role Permission Name=> $value->name----------------"."\n";
         }
         echo'------------Role Add  completed----------------'."\n";
    }
}