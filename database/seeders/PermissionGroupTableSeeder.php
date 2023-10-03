<?php

namespace Database\Seeders;

use App\Models\PermissionGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissionGroups=[
            ['name'=>'Users'],

            ['name'=>'Invoise'],

            ['name'=>'Mebmers'],

            ['name'=>'Settings'],

        ];
        echo'------------------------------------------------'."\n";
        echo'----------------Permission Group Seeding--------'."\n";
        foreach($permissionGroups as $key => $value)
        {
            $permissionGroup       = new PermissionGroup;
            $permissionGroup->name = $value['name'];
            $permissionGroup->save();
            echo'----------------Permission Group Seeding Save--------'."\n";

        }
        echo'----------------Permission Group Seeding Completed--------'."\n";
    }
}
