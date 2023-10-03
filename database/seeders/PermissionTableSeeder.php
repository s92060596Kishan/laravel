<?php

namespace Database\Seeders;

use App\Models\PermissionGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permissions=[
            ['name'               => 'users_create',
            'permission_group_id' => PermissionGroup::where('name','Users')->first()->id
            ],
            ['name'               => 'users_list',
            'permission_group_id' => PermissionGroup::where('name','Users')->first()->id
            ],
            ['name'               => 'users_edit',
            'permission_group_id' => PermissionGroup::where('name','Users')->first()->id
            ],
            ['name'               => 'users_delete',
            'permission_group_id' => PermissionGroup::where('name','Users')->first()->id
            ],


            ['name'               => 'invoise_create',
            'permission_group_id' => PermissionGroup::where('name','Invoise')->first()->id],
            ['name'               => 'invoise_list',
            'permission_group_id' => PermissionGroup::where('name','Invoise')->first()->id],
            ['name'               => 'invoise_edit',
            'permission_group_id' => PermissionGroup::where('name','Invoise')->first()->id],
            ['name'               => 'invoise_delete'
           ,'permission_group_id' => PermissionGroup::where('name','Invoise')->first()->id
             ],


            ['name'               => 'members_create',
            'permission_group_id' => PermissionGroup::where('name','Mebmers')->first()->id
            ],
            ['name'               => 'members_list',
            'permission_group_id' => PermissionGroup::where('name','Mebmers')->first()->id],
            ['name'               =>'members_edit',
            'permission_group_id' => PermissionGroup::where('name','Mebmers')->first()->id],
            ['name'               => 'members_delete',
            'permission_group_id' => PermissionGroup::where('name','Mebmers')->first()->id],


            ['name'               => 'settings_dashboard_color',
            'permission_group_id' => PermissionGroup::where('name','Settings')->first()->id],
            ['name'               => 'settings_favicon',
            'permission_group_id' => PermissionGroup::where('name','Settings')->first()->id],
            ['name'               => 'settings_logo',
            'permission_group_id' => PermissionGroup::where('name','Settings')->first()->id],
            ['name'               => 'settings_email',
            'permission_group_id' => PermissionGroup::where('name','Settings')->first()->id],


        ];
        echo'------------------------------------------------'."\n";
        echo'----------------Permission Seeding--------'."\n";
        foreach($permissions as $key => $value)
        {
            $newpermission       = new Permission;
            $newpermission->name = $value['name'];
            $newpermission->permission_group_id = $value['permission_group_id'];
            $newpermission->save();
            echo"----------------Permission Name--------"."\n";

        }
        echo'----------------Permission Group Seeding Completed--------'."\n";
    }
}