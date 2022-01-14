<?php

namespace Database\Seeders;

use App\Models\Period;
use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $period = new Period();
        $period->term = '0';
        $period->start = '2021-09-14';
        $period->end = '2022-02-14';
        $period->save();

        $period = new Period();
        $period->term = '1';
        $period->start = '2022-02-15';
        $period->end = '2022-07-04';
        $period->save();
    }
}
