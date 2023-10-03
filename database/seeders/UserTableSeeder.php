<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user        =  new User;
        $user->name  =  'Super Admin';
        $user->email =  'admin@example.com';
        $user->password =  Hash::make('admin123');
        echo"------------Role Permission Name=> $user->name----------------"."\n";

        $user->save();
        echo"------------New User Cerated----------------"."\n";
        $user->assignRole(['is_admin']);
        echo"------------Role Permission Updated----------------"."\n";
    }
}