<?php

namespace Database\Seeders;

use App\Enums\Role as EnumsRole;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    private $allRoles;
    public function __construct()
    {
        $this->allRoles = Role::all();
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allUsers = User::all();

        $superAdminID = $this->allRoles->where("slug", EnumsRole::SUPER_ADMIN->value)->first()->id;
        $adminID = $this->allRoles->where("slug", EnumsRole::ADMIN->value)->first()->id;
        $user = $this->allRoles->where("slug", EnumsRole::USER->value)->first()->id;

        $permissions = [
            'Permission-read' => [$superAdminID],
            'Permission-create' => [$superAdminID],
            'Permission-update' => [$superAdminID],
            'Permission.delete' => [$superAdminID],

            'Roles-read' => [$superAdminID],
            'Roles-create' => [$superAdminID],
            'Roles-update' => [$superAdminID],
            'Roles-delete' => [$superAdminID],
            'Roles-assign-permission' => [$superAdminID],

            'Users-read' => [$superAdminID],
            'Users-create' => [$superAdminID],
            'Users-update' => [$superAdminID],
            'Users-delete' => [$superAdminID],

            'category-read' => [$superAdminID, $adminID, $user],
            'category-create' => [$superAdminID, $adminID, $user],
            'category-update' => [$superAdminID, $adminID, $user],
            'category-delete' => [$superAdminID, $adminID, $user],
            'setting-read' => [$superAdminID, $adminID, $user],
        ];

        foreach ($permissions as $key => $roles) {
            $permission = Permission::create(['name' => $key, "slug" => str($key)->slug("-")]);
            foreach ($roles as $roleID) {
                $role = $this->allRoles->find($roleID);
                $role->permissions()->attach($permission->id);
            }
        }
        // Assign User Role  & PERMISSION
        foreach ($allUsers as $user) {
            switch ($user->email) {
                case "super@admin.com":
                    $this->assignUserRolePermission($user, EnumsRole::SUPER_ADMIN->value);
                    break;
                case "admin@admin.com":
                    $this->assignUserRolePermission($user, EnumsRole::ADMIN->value);
                    break;
                default:
                    $this->assignUserRolePermission($user, EnumsRole::ADMIN->value);
                    break;
            }
        }
    }

    function assignUserRolePermission($user, $roleName)
    {
        $role = $this->allRoles->where("slug", $roleName)->first();
        info("ROLEs", [$role,$this->allRoles]);
        $permissionsID = \DB::table("roles_permissions")->where("role_id", $role->id)->pluck("permission_id")->toArray();
        $user->roles()->attach($role->id);
        $user->permissions()->attach($permissionsID);
    }
}
