<?php

use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the Role Permission table seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get ID for the Administrator role.
        $role       = DB::select('SELECT roleID FROM [Role] WHERE roleName = :name', ['name' => 'Administrator']);

        //Get ID's of the permissions to grant to the Administrator role.
        $permission = DB::select('SELECT permissionID
                                  FROM Permission
                                  WHERE permissionName = :a
                                  OR permissionName = :b
                                  OR permissionName = :c
                                  OR permissionName = :d
                                  OR permissionName = :e
                                  OR permissionName = :f
                                  OR permissionName = :g
                                  OR permissionName = :h
                                  OR permissionName = :i
                                  OR permissionName = :j
                                  OR permissionName = :k
                                  OR permissionName = :l
                                  OR permissionName = :m
                                  OR permissionName = :n',
                                  [
                                      'a' => 'Admin',
                                      'b' => 'Admin:Activity',
                                      'c' => 'Admin:Users',
                                      'd' => 'Admin:UsersCreate',
                                      'e' => 'Admin:UsersEdit',
                                      'f' => 'Admin:UsersDelete',
                                      'g' => 'Admin:Roles',
                                      'h' => 'Admin:RolesCreate',
                                      'i' => 'Admin:RolesEdit',
                                      'j' => 'Admin:RolesDelete',
                                      'k' => 'Admin:Permissions',
                                      'l' => 'Admin:PermissionsCreate',
                                      'm' => 'Admin:PermissionsEdit',
                                      'n' => 'Admin:PermissionsDelete'
                                  ]);

        foreach($permission as $permissionID)
        {
            $permissions[] = [
                                'roleID'       => $role[0]->roleID,
                                'permissionID' => $permissionID->permissionID
                             ];
        }

        //Insert the role / permission relationship for Administrators.
        DB::table('RolePermission')->insert($permissions);
    }
}
