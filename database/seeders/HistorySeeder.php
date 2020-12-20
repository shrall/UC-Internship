<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $history = new History();
        $history->duration_before = '20';
        $history->duration_after = '30';
        $history->student_id = 5;
        $history->supervisor_id = 13;
        $history->save();

        $history = new History();
        $history->duration_before = '2';
        $history->duration_after = '10';
        $history->student_id = 10;
        $history->supervisor_id = 6;
        $history->save();

        $history = new History();
        $history->duration_before = '13';
        $history->duration_after = '29';
        $history->student_id = 15;
        $history->supervisor_id = 2;
        $history->save();
    }
}
