<?php

namespace Database\Seeders;

use App\Models\ProgressAttachment;
use Illuminate\Database\Seeder;

class ProgressAttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $progressattachment = new ProgressAttachment();
        $progressattachment->name = 'hearts.png';
        $progressattachment->progress_id = 2;
        $progressattachment->save();

        $progressattachment = new ProgressAttachment();
        $progressattachment->name = 'posterrektorcupfinal.png';
        $progressattachment->progress_id = 3;
        $progressattachment->save();

        $progressattachment = new ProgressAttachment();
        $progressattachment->name = 'screenshot03.png';
        $progressattachment->progress_id = 1;
        $progressattachment->save();
    }
}
