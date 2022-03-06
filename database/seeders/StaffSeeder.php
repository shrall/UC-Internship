<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = new Staff();
        $staff->nip = '0706011910009';
        $staff->name = 'Marshall Ovierdo Kurniawan';
        $staff->email = 'marshall@staff.com';
        $staff->description = 'Aku anak gembala.';
        $staff->gender = 'M';
        $staff->phone = '081233129966';
        $staff->line_account = 'shrall';
        $staff->department_id = 33;
        $staff->title_id = 99;
        $staff->save();

        $staff = new Staff();
        $staff->nip = '0706011910028';
        $staff->name = 'Tinara Nathania Wiryonoputro';
        $staff->email = 'tinara@staff.com';
        $staff->description = 'Anaknya Yusuf.';
        $staff->gender = 'F';
        $staff->phone = '08123456789';
        $staff->line_account = 'tinaranw123';
        $staff->department_id = 33;
        $staff->title_id = 99;
        $staff->save();

        $staff = new Staff();
        $staff->nip = '0706011910003';
        $staff->name = 'Staff';
        $staff->email = 'staff@jurnalmagang.com';
        $staff->description = '-';
        $staff->gender = 'F';
        $staff->phone = '08123456789';
        $staff->line_account = '-';
        $staff->department_id = 33;
        $staff->title_id = 99;
        $staff->save();
    }
}
