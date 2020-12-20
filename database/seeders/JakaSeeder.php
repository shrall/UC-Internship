<?php

namespace Database\Seeders;

use App\Models\Jaka;
use Illuminate\Database\Seeder;

class JakaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jaka = new Jaka();
        $jaka->name = 'Lecturer';
        $jaka->save();

        $jaka = new Jaka();
        $jaka->name = 'Asisten Ahli';
        $jaka->save();

        $jaka = new Jaka();
        $jaka->name = 'Lektor 150';
        $jaka->save();

        $jaka = new Jaka();
        $jaka->name = 'Lektor 300';
        $jaka->save();

        $jaka = new Jaka();
        $jaka->name = 'Professor';
        $jaka->save();
    }
}
