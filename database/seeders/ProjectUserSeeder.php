<?php

namespace Database\Seeders;

use App\Models\ProjectUser;
use Illuminate\Database\Seeder;

class ProjectUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projectuser = new ProjectUser();
        $projectuser->status = '1';
        $projectuser->uci_project_id = 1;
        $projectuser->uci_user_id = 5;
        $projectuser->save();

        $projectuser = new ProjectUser();
        $projectuser->status = '2';
        $projectuser->uci_project_id = 1;
        $projectuser->uci_user_id = 15;
        $projectuser->save();

        $projectuser = new ProjectUser();
        $projectuser->status = '1';
        $projectuser->uci_project_id = 2;
        $projectuser->uci_user_id = 5;
        $projectuser->save();

        $projectuser = new ProjectUser();
        $projectuser->status = '1';
        $projectuser->uci_project_id = 3;
        $projectuser->uci_user_id = 5;
        $projectuser->save();

    }
}
