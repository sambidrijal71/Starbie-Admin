<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;


class PermissionController extends Controller
{
    public function initPermission()
    {

        //create two roles
        $superAdmin = Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);


        //get two users... one for super admin and one for admin
        $superAdminUser = User::where('id', '2')->first();
        $adminUser = User::where('id', '3')->first();


        //assign roles to users
        $superAdminUser->assignRole($superAdmin);
        $adminUser->assignRole($admin);


        print_r("Done");
    }
}

