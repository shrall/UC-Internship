<?php

namespace Database\Seeders;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task();
        $task->name = 'NPLC Design Assets';
        $task->description = 'Membuatkan desain poster, instagram post, dan starter kit.';
        $task->deadline = Carbon::parse('2020-08-23');
        $task->duration = 23;
        $task->status = '1';
        $task->pu_id = 1;
        $task->save();

        $task = new Task();
        $task->name = 'Red Carpet Night Concepting';
        $task->description = 'Memikirkan konsep acara dan rundown.';
        $task->deadline = Carbon::parse('2021-03-20');
        $task->duration = 10;
        $task->status = '0';
        $task->pu_id = 3;
        $task->save();

        $task = new Task();
        $task->name = 'Rektor Cup Design Assets';
        $task->description = 'Membuatkan desain poster, instagram post, twibbon, dan story templates.';
        $task->deadline = Carbon::parse('2020-11-19');
        $task->duration = 30;
        $task->status = '0';
        $task->pu_id = 4;
        $task->save();


    }
}
