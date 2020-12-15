<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new Student();
        $student->nim = '0706011910009';
        $student->name = 'Marshall Ovierdo Kurniawan';
        $student->email = 'marshall@student.com';
        $student->batch = '2019';
        $student->description = 'Aku anak gembala.';
        $student->gender = 'M';
        $student->phone = '081233129966';
        $student->line_account = 'shrall';
        $student->department_id = 33;
        $student->save();

        $student = new Student();
        $student->nim = '0706011910028';
        $student->name = 'Tinara Nathania Wiryonoputro';
        $student->email = 'tinara@student.com';
        $student->batch = '2019';
        $student->description = 'Anaknya Yusuf.';
        $student->gender = 'F';
        $student->phone = '08123456789';
        $student->line_account = 'tinaranw123';
        $student->department_id = 33;
        $student->save();

        $student = new Student();
        $student->nim = '0706011910003';
        $student->name = 'Michelle Alexandra Dinata';
        $student->email = 'michelle@student.com';
        $student->batch = '2019';
        $student->description = 'Anaknya siapa ini?';
        $student->gender = 'F';
        $student->phone = '08123456789';
        $student->line_account = 'michellealexandra';
        $student->department_id = 33;
        $student->save();
    }
}
