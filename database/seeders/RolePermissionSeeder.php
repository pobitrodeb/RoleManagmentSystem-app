<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create role
        $roleSupperAdmin = Role::create(['name' => 'superadmin']);
        $roleAdmin       = Role::create(['name' => 'admin']);
        $roleEditor      = Role::create(['name' => 'editor']);
        $roleUser        = Role::create(['name' => 'user']);




        //permisson roles
        $permissions = [
            //Dashboar
            'dashboard.view',

            //Blog permissions
            'blog.create',
            'blog.view',
            'blog.edit',
            'blog.delete',
            'blog.approve',

             //Admin permissions
             'admin.create',
             'admin.view',
             'admin.edit',
             'admin.delete',
             'admin.approve',

             //Role permissions
             'role.create',
             'role.view',
             'role.edit',
             'role.delete',
             'role.approve',

             //Profile permissions
             'profile.view',
             'profile.edit',

        ];

        //Create and Sssing permissions

        for($i = 0; $i < count($permissions); $i++){
            //create permission
            $permission = Permission::create(['name' => $permissions[$i]]);
            $roleSupperAdmin->givePermissionTo($permission);
            $permission->assignRole($roleSupperAdmin);
        }
    }
}
