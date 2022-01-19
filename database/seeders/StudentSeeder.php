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

        $student = new Student();
        $student->nim = '0706011910036';
        $student->name = 'Alfredo Junio Kristianto';
        $student->email = 'ezralfredo@gmail.com';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 33;
        $student->save();

        $student = new Student();
        $student->nim = '0706012010042';
        $student->name = 'Justin Jap';
        $student->email = 'justinjap01@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 33;
        $student->save();

        $student = new Student();
        $student->nim = '0706021910022';
        $student->name = 'Putu denisa florence satriani';
        $student->email = 'Pflorence@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 34;
        $student->save();

        $student = new Student();
        $student->nim = '0706012110019';
        $student->name = 'ileene trinia';
        $student->email = 'isantoso@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 33;
        $student->save();

        $student = new Student();
        $student->nim = '0706012110057';
        $student->name = 'Kathlyne Sarah Fania Panggabean';
        $student->email = 'ksarahfania@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 33;
        $student->save();

        $student = new Student();
        $student->nim = '0706022010019';
        $student->name = 'Michelle Chandra';
        $student->email = 'mchandra04@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 34;
        $student->save();

        $student = new Student();
        $student->nim = '0706022110023';
        $student->name = 'Mercy Vanneca Ruthttita Oey';
        $student->email = 'mvanneca@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 34;
        $student->save();

        $student = new Student();
        $student->nim = '0706022010017';
        $student->name = 'Baghiz Zuhdi Adzin ';
        $student->email = 'bzuhdiadzin@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 34;
        $student->save();

        $student = new Student();
        $student->nim = '07022010011';
        $student->name = 'Christopher Tekvi Leonard';
        $student->email = 'cleonard@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 34;
        $student->save();

        $student = new Student();
        $student->nim = '0706022110042';
        $student->name = 'Angellie Ennovaryn Mertadana';
        $student->email = 'aennovaryn@student.ciputra.ac.id ';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 34;
        $student->save();

        $student = new Student();
        $student->nim = '0706022010020';
        $student->name = 'Nathalia Minoque Kusuma Salma Rasyid Jr.';
        $student->email = 'nminoque@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 34;
        $student->save();

        $student = new Student();
        $student->nim = '0706012010052';
        $student->name = 'Michael Chandra';
        $student->email = 'mchandra05@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 33;
        $student->save();

        $student = new Student();
        $student->nim = '0706022010025';
        $student->name = 'Zefanya Oktaviana Indrasanti';
        $student->email = 'zoktaviana@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 34;
        $student->save();

        $student = new Student();
        $student->nim = '0706022010031';
        $student->name = 'Jason widjaja';
        $student->email = 'jwidjaja02@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 34;
        $student->save();

        $student = new Student();
        $student->nim = '0706012010055';
        $student->name = 'Haning Galih Rani Kumbara';
        $student->email = 'haning.grk@gmail.com';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 33;
        $student->save();

        $student = new Student();
        $student->nim = '0706012010008';
        $student->name = 'Felix Jonathan Tjandra';
        $student->email = 'Fjonathan@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 33;
        $student->save();

        $student = new Student();
        $student->nim = '0706022010030';
        $student->name = 'Billy Agustian Dharmawan';
        $student->email = 'bagustian@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 34;
        $student->save();

        $student = new Student();
        $student->nim = '0706012110020';
        $student->name = 'Davina Teresa Wijaya';
        $student->email = 'dteresawijaya@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 33;
        $student->save();

        $student = new Student();
        $student->nim = '0706012110018';
        $student->name = 'Vebrillia Santoso';
        $student->email = 'vsantoso01@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 33;
        $student->save();

        $student = new Student();
        $student->nim = '0706012110027';
        $student->name = 'Nick Devano';
        $student->email = 'nsulistio@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 33;
        $student->save();

        $student = new Student();
        $student->nim = '0706012010012';
        $student->name = 'Sintya Tri Wahyu Adityawati';
        $student->email = 'striwahyu@student.ciputra.ac.id';
        $student->batch = '2022';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 33;
        $student->save();

        $student = new Student();
        $student->nim = '0706012110010';
        $student->name = 'Alfonsus Reklin Natanael';
        $student->email = 'anatanael@student.ciputra.ac.id';
        $student->batch = '2021';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 33;
        $student->save();

        $student = new Student();
        $student->nim = '0706012010030';
        $student->name = 'Selyandaru Riskanadi';
        $student->email = 'sriskanadi@student.ciputra.ac.id';
        $student->batch = '2020';
        $student->description = '-';
        $student->gender = 'M';
        $student->phone = '08123456789';
        $student->line_account = '-';
        $student->department_id = 33;
        $student->save();
    }
}
