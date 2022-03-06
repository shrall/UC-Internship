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
        $lecturer->name = 'Lecturer';
        $lecturer->email = 'lecturer@jurnalmagang.com';
        $lecturer->description = '-';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = '-';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->name = 'Laura Mahendratta';
        $lecturer->email = 'laura@ciputra.ac.id';
        $lecturer->nip = '000000000001';
        $lecturer->nidn = '000000000001';
        $lecturer->description = '-';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = '-';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->name = 'Mychael Maoeretz Engel';
        $lecturer->email = 'mychael.engel@ciputra.ac.id';
        $lecturer->nip = '000000000002';
        $lecturer->nidn = '000000000002';
        $lecturer->description = '-';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = '-';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->name = 'Evan Tanuwijaya';
        $lecturer->email = 'evan.tanuwijaya@ciputra.ac.id';
        $lecturer->nip = '000000000003';
        $lecturer->nidn = '000000000003';
        $lecturer->description = '-';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = '-';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->name = 'Yosua Soekamto';
        $lecturer->email = 'yosua.soekamto@ciputra.ac.id';
        $lecturer->nip = '000000000004';
        $lecturer->nidn = '000000000004';
        $lecturer->description = '-';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = '-';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->name = 'Rinabi Tanamal';
        $lecturer->email = 'r.tanamal@ciputra.ac.id';
        $lecturer->nip = '000000000005';
        $lecturer->nidn = '000000000005';
        $lecturer->description = '-';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = '-';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->name = 'Yuwono Marthadinata';
        $lecturer->email = 'yuwono.dinata@ciputra.ac.id';
        $lecturer->nip = '000000000006';
        $lecturer->nidn = '000000000006';
        $lecturer->description = '-';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = '-';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->name = 'Christian';
        $lecturer->email = 'christian03@ciputra.ac.id';
        $lecturer->nip = '000000000007';
        $lecturer->nidn = '000000000007';
        $lecturer->description = '-';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = '-';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->name = 'Caecilia Citra Lestari';
        $lecturer->email = 'caecilia.citra@ciputra.ac.id';
        $lecturer->nip = '000000000008';
        $lecturer->nidn = '000000000008';
        $lecturer->description = '-';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = '-';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->name = 'Theresia Ratih';
        $lecturer->email = 'theresia.ratih@ciputra.ac.id';
        $lecturer->nip = '000000000009';
        $lecturer->nidn = '000000000009';
        $lecturer->description = '-';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = '-';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->name = 'Stephanus Eko Wahyudi';
        $lecturer->email = 'stephanus.eko@ciputra.ac.id';
        $lecturer->nip = '000000000010';
        $lecturer->nidn = '000000000010';
        $lecturer->description = '-';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = '-';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->name = 'Adi Suryaputra';
        $lecturer->email = 'adi.suryaputra@ciputra.ac.id';
        $lecturer->nip = '000000000011';
        $lecturer->nidn = '000000000011';
        $lecturer->description = '-';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = '-';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->name = 'Indra Maryati';
        $lecturer->email = 'indra.maryati@ciputra.ac.id';
        $lecturer->nip = '000000000012';
        $lecturer->nidn = '000000000012';
        $lecturer->description = '-';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = '-';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->name = 'Kartika Gianina Tileng';
        $lecturer->email = 'kartika@ciputra.ac.id';
        $lecturer->nip = '000000000013';
        $lecturer->nidn = '000000000013';
        $lecturer->description = '-';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = '-';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->name = 'Daniel M. Wonohadidjojo';
        $lecturer->email = 'daniel.m.w@ciputra.ac.id';
        $lecturer->nip = '000000000014';
        $lecturer->nidn = '000000000014';
        $lecturer->description = '-';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = '-';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();

        $lecturer = new Lecturer();
        $lecturer->name = 'Trianggoro Wiradinata';
        $lecturer->email = 'twiradinata@ciputra.ac.id';
        $lecturer->nip = '000000000015';
        $lecturer->nidn = '000000000015';
        $lecturer->description = '-';
        $lecturer->gender = 'F';
        $lecturer->phone = '08123456789';
        $lecturer->line_account = '-';
        $lecturer->department_id = 33;
        $lecturer->title_id = 12;
        $lecturer->jaka_id = 3;
        $lecturer->save();
    }
}
