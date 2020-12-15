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
        $jaka->name = 'MarshallJaka';
        $jaka->save();

        $jaka = new Jaka();
        $jaka->name = 'TinaraJaka';
        $jaka->save();

        $jaka = new Jaka();
        $jaka->name = 'MichelleJaka';
        $jaka->save();
    }
}
