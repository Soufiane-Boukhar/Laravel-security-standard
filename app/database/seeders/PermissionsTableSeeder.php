<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name' => 'create-ProjectController']);
        Permission::create(['name' => 'index-ProjectController']);
        Permission::create(['name' => 'show-ProjectController']);
        Permission::create(['name' => 'edit-ProjectController']);
        Permission::create(['name' => 'update projects']);
        Permission::create(['name' => 'delete projects']);
    }
}
