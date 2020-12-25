<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Seeder;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecturer = new Lecturer();
        $lecturer->nip = '0706011910009';
        $lecturer->nidn = '0706011910009';
        $lecturer->name = 'Marshall Ovierdo Kurniawan';
        $lecturer->email = 'marshall@lecturer.com';
        $lecturer->description = 'Aku anak gembala.';
        $lecturer->gender = 'M';
        $lecturer->phone = '081233129966';
        $lecturer->line_account = 'shrall';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 1;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->nip = '0706011910028';
        $lecturer->nidn = '0706011910028';
        $lecturer->name = 'Tinara Nathania Wiryonoputro';
        $lecturer->email = 'tinara@lecturer.com';
        $lecturer->description = 'Anaknya Yusuf.';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = 'tinaranw123';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 2;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->nip = '0706011910003';
        $lecturer->nidn = '0706011910003';
        $lecturer->name = 'Michelle Alexandra Dinata';
        $lecturer->email = 'michelle@lecturer.com';
        $lecturer->description = 'Anaknya siapa ini?';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = 'michellealexandra';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();
    }
}
