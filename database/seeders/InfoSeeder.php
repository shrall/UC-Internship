<?php

namespace Database\Seeders;

use App\Models\Info;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $info = new Info();
        $info->time_remaining = 200.00;
        $info->gpa = 4.00;
        $info->scholarship_id = 3;
        $info->save();

        $info = new Info();
        $info->time_remaining = 200.00;
        $info->gpa = 4.00;
        $info->scholarship_id = 3;
        $info->save();

        $info = new Info();
        $info->time_remaining = 200.00;
        $info->gpa = 4.00;
        $info->scholarship_id = 3;
        $info->save();
    }
}
