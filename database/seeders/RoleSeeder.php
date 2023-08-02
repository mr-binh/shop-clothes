<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=[
            [
                'name' => 'super admin',
            ],
            [
                'name' => 'staff',
            ],
            [
                'name' => 'customer',
            ],
        ];
        Role::create($role);
    }
}
