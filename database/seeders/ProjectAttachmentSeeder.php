<?php

namespace Database\Seeders;

use App\Models\ProjectAttachment;
use Illuminate\Database\Seeder;

class ProjectAttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projectattachment = new ProjectAttachment();
        $projectattachment->name = '7thnplc.png';
        $projectattachment->project_id = 1;
        $projectattachment->save();

        $projectattachment = new ProjectAttachment();
        $projectattachment->name = 'redcarpetnightphoto01.png';
        $projectattachment->project_id = 2;
        $projectattachment->save();

        $projectattachment = new ProjectAttachment();
        $projectattachment->name = 'rektorcup2019.png';
        $projectattachment->project_id = 3;
        $projectattachment->save();
    }
}
