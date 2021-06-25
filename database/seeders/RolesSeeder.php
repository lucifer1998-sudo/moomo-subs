<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create( ['name' => 'super_admin'] );
        Roles::create( ['name' => 'user'] );
        Roles::create( ['name' => 'admin']);
    }
}
