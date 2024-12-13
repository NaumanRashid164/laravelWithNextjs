<?php

namespace Database\Seeders;

use App\Enums\Role as EnumsRole;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                "name" => EnumsRole::SUPER_ADMIN->value,
                "slug" => str(EnumsRole::SUPER_ADMIN->value)->slug("-")->value(),
            ],
            [
                "name" => EnumsRole::ADMIN->value,
                "slug" => str(EnumsRole::ADMIN->value)->slug("-")->value(),
            ],
            [
                "name" => EnumsRole::USER->value,
                "slug" => str(EnumsRole::USER->value)->slug("-")->value(),
            ],
        ];
        $roles = Arr::map($roles, function ($role) {
            $role["created_at"] = now();
            $role["updated_at"] = now();
            return $role;
        });

        Role::insert($roles);
    }
}
