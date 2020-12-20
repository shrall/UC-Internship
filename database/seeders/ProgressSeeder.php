<?php

namespace Database\Seeders;

use App\Models\Progress;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $progress = new Progress();
        $progress->description = 'Membuat website marketing NLPC.';
        $progress->time_start = Carbon::now()->format('Y-m-d H:i:s');;
        $progress->time_end = Carbon::now()->format('Y-m-d H:i:s');;
        $progress->is_approved = '1';
        $progress->comment = 'Sudah oke, tapi warnanya sedikit mencolok. Mungkin dibuatkan lebih kusam lagi.';
        $progress->task_id = 1;
        $progress->save();

        $progress = new Progress();
        $progress->description = 'Membuat design poster RCN.';
        $progress->time_start = Carbon::now()->format('Y-m-d H:i:s');;
        $progress->time_end = Carbon::now()->format('Y-m-d H:i:s');;
        $progress->is_approved = '0';
        $progress->comment = '';
        $progress->task_id = 2;
        $progress->save();

        $progress = new Progress();
        $progress->description = 'Membuat design poster Rektor Cup.';
        $progress->time_start = Carbon::now()->format('Y-m-d H:i:s');;
        $progress->time_end =Carbon::now()->format('Y-m-d H:i:s');;
        $progress->is_approved = '1';
        $progress->comment = 'Very nice.';
        $progress->task_id =3;
        $progress->save();

        $progress = new Progress();
        $progress->description = 'Membuat design oprec post untuk instagram Rektor Cup.';
        $progress->time_start = Carbon::now()->format('Y-m-d H:i:s');;
        $progress->time_end = Carbon::now()->format('Y-m-d H:i:s');;
        $progress->is_approved = '1';
        $progress->comment = 'Masih ada typo. Seharusnya "divisi", bukan "dvisi".';
        $progress->task_id = 3;
        $progress->save();
    }
}
