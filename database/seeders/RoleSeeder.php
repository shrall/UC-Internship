<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Role = new Role();
        $Role->name = 'Admin';
        $Role->save();

        $Role = new Role();
        $Role->name = 'Supervisor';
        $Role->save();

        $Role = new Role();
        $Role->name = 'Student';
        $Role->save();
    }
}
