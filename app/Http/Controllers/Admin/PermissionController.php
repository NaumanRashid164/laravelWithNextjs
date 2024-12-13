<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PermissionController extends Controller
{
    public function Permission()
    {
        $user_permission = Permission::where('slug', 'create-tasks')->first();
        $admin_permission = Permission::where('slug', 'edit-users')->first();

        //RoleTableSeeder.php
        $user_role = new Role();
        $user_role->slug = 'user';
        $user_role->name = 'User_Name';
        $user_role->save();
        $user_role->permissions()->attach($user_permission);

        $admin_role = new Role();
        $admin_role->slug = 'admin';
        $admin_role->name = 'Admin_Name';
        $admin_role->save();
        $admin_role->permissions()->attach($admin_permission);

        $user_role = Role::where('slug', 'user')->first();
        $admin_role = Role::where('slug', 'admin')->first();

        $createTasks = new Permission();
        $createTasks->slug = 'create-tasks';
        $createTasks->name = 'Create Tasks';
        $createTasks->save();
        $createTasks->roles()->attach($user_role);

        $editUsers = new Permission();
        $editUsers->slug = 'edit-users';
        $editUsers->name = 'Edit Users';
        $editUsers->save();
        $editUsers->roles()->attach($admin_role);

        $user_role = Role::where('slug', 'user')->first();
        $admin_role = Role::where('slug', 'admin')->first();
        $user_perm = Permission::where('slug', 'create-tasks')->first();
        $admin_perm = Permission::where('slug', 'edit-users')->first();

        $user = new User();
        $user->name = 'user1';
        $user->email = 'user1@test.com';
        $user->password = Hash::make('1234567');
        $user->save();
        $user->roles()->attach($user_role);
        $user->permissions()->attach($user_perm);

        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@test.com';
        $admin->password = Hash::make('1234567');
        $admin->save();
        $admin->roles()->attach($admin_role);
        $admin->permissions()->attach($admin_perm);


        return redirect()->back();
    }
}
