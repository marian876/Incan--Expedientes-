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
        $admin = Role::create(['name' => 'admin']);
        $medico = Role::create(['name' => 'medico']);
        $supervisor = Role::create(['name' => 'supervisor']);


        Permission::create(['name' => 'expedientes.edit'])->assignRole([$admin, $supervisor]);
        // Permission::create(['name' => 'dashboard'])->assignRole([$admin]);

    }
}
