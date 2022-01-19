<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Marshall - AdminStaff';
        $user->email = 'marshall@adminstaff.com';
        $user->password = Hash::make('marshalladminstaff');
        $user->role_id = 1;
        $user->detailable_id = 1;
        $user->detailable_type = 'App\Models\Staff';
        $user->save();

        $user = new User();
        $user->name = 'Marshall - AdminLecturer';
        $user->email = 'marshall@adminlecturer.com';
        $user->password = Hash::make('marshalladminlecturer');
        $user->role_id = 1;
        $user->detailable_id = 1;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Marshall - Staff';
        $user->email = 'marshall@staff.com';
        $user->password = Hash::make('marshallstaff');
        $user->role_id = 2;
        $user->detailable_id = 1;
        $user->detailable_type = 'App\Models\Staff';
        $user->save();

        $user = new User();
        $user->name = 'Marshall - Lecturer';
        $user->email = 'marshall@lecturer.com';
        $user->password = Hash::make('marshalllecturer');
        $user->role_id = 2;
        $user->detailable_id = 1;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Marshall - Student';
        $user->email = 'marshall@student.com';
        $user->password = Hash::make('marshallstudent');
        $user->role_id = 3;
        $user->detailable_id = 1;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 1;
        $user->save();

        $user = new User();
        $user->name = 'Tinara - AdminStaff';
        $user->email = 'tinara@adminstaff.com';
        $user->password = Hash::make('tinaraadminstaff');
        $user->role_id = 1;
        $user->detailable_id = 2;
        $user->detailable_type = 'App\Models\Staff';
        $user->save();

        $user = new User();
        $user->name = 'Tinara - AdminLecturer';
        $user->email = 'tinara@adminlecturer.com';
        $user->password = Hash::make('tinaraadminlecturer');
        $user->role_id = 1;
        $user->detailable_id = 2;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Tinara - Staff';
        $user->email = 'tinara@staff.com';
        $user->password = Hash::make('tinarastaff');
        $user->role_id = 2;
        $user->detailable_id = 2;
        $user->detailable_type = 'App\Models\Staff';
        $user->save();

        $user = new User();
        $user->name = 'Tinara - Lecturer';
        $user->email = 'tinara@lecturer.com';
        $user->password = Hash::make('tinaralecturer');
        $user->role_id = 2;
        $user->detailable_id = 2;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Tinara - Student';
        $user->email = 'tinara@student.com';
        $user->password = Hash::make('tinarastudent');
        $user->role_id = 3;
        $user->detailable_id = 2;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 2;
        $user->save();

        $user = new User();
        $user->name = 'Michelle - AdminStaff';
        $user->email = 'michelle@adminstaff.com';
        $user->password = Hash::make('michelleadminstaff');
        $user->role_id = 1;
        $user->detailable_id = 3;
        $user->detailable_type = 'App\Models\Staff';
        $user->save();

        $user = new User();
        $user->name = 'Michelle - AdminLecturer';
        $user->email = 'michelle@adminlecturer.com';
        $user->password = Hash::make('michelleadminlecturer');
        $user->role_id = 1;
        $user->detailable_id = 3;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Michelle - Staff';
        $user->email = 'michelle@staff.com';
        $user->password = Hash::make('michellestaff');
        $user->role_id = 2;
        $user->detailable_id = 3;
        $user->detailable_type = 'App\Models\Staff';
        $user->save();

        $user = new User();
        $user->name = 'Michelle - Lecturer';
        $user->email = 'michelle@lecturer.com';
        $user->password = Hash::make('michellelecturer');
        $user->role_id = 2;
        $user->detailable_id = 3;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Michelle - Student';
        $user->email = 'michelle@student.com';
        $user->password = Hash::make('michellestudent');
        $user->role_id = 3;
        $user->detailable_id = 3;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 3;
        $user->save();

        $user = new User();
        $user->name = 'Alfredo Junio Kristianto';
        $user->email = 'ezralfredo@gmail.com';
        $user->password = Hash::make('0706011910036');
        $user->role_id = 3;
        $user->detailable_id = 4;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 4;
        $user->save();

        $user = new User();
        $user->name = 'Justin Jap';
        $user->email = 'justinjap01@student.ciputra.ac.id';
        $user->password = Hash::make('0706012010042');
        $user->role_id = 3;
        $user->detailable_id = 5;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 5;
        $user->save();

        $user = new User();
        $user->name = 'Putu denisa florence satriani';
        $user->email = 'Pflorence@student.ciputra.ac.id';
        $user->password = Hash::make('0706021910022');
        $user->role_id = 3;
        $user->detailable_id = 6;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 6;
        $user->save();

        $user = new User();
        $user->name = 'ileene trinia';
        $user->email = 'isantoso@student.ciputra.ac.id';
        $user->password = Hash::make('0706012110019');
        $user->role_id = 3;
        $user->detailable_id = 7;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 7;
        $user->save();

        $user = new User();
        $user->name = 'Kathlyne Sarah Fania Panggabean';
        $user->email = 'ksarahfania@student.ciputra.ac.id';
        $user->password = Hash::make('0706012110057');
        $user->role_id = 3;
        $user->detailable_id = 8;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 8;
        $user->save();

        $user = new User();
        $user->name = 'Michelle Chandra';
        $user->email = 'mchandra04@student.ciputra.ac.id';
        $user->password = Hash::make('0706022010019');
        $user->role_id = 3;
        $user->detailable_id = 9;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 9;
        $user->save();

        $user = new User();
        $user->name = 'Mercy Vanneca Ruthttita Oey';
        $user->email = 'mvanneca@student.ciputra.ac.id';
        $user->password = Hash::make('0706022110023');
        $user->role_id = 3;
        $user->detailable_id = 10;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 10;
        $user->save();

        $user = new User();
        $user->name = 'Baghiz Zuhdi Adzin ';
        $user->email = 'bzuhdiadzin@student.ciputra.ac.id';
        $user->password = Hash::make('0706022010017');
        $user->role_id = 3;
        $user->detailable_id = 11;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 11;
        $user->save();

        $user = new User();
        $user->name = 'Christopher Tekvi Leonard';
        $user->email = 'cleonard@student.ciputra.ac.id';
        $user->password = Hash::make('07022010011');
        $user->role_id = 3;
        $user->detailable_id = 12;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 12;
        $user->save();

        $user = new User();
        $user->name = 'Angellie Ennovaryn Mertadana ';
        $user->email = 'aennovaryn@student.ciputra.ac.id ';
        $user->password = Hash::make('0706022110042');
        $user->role_id = 3;
        $user->detailable_id = 13;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 13;
        $user->save();

        $user = new User();
        $user->name = 'Nathalia Minoque Kusuma Salma Rasyid Jr.';
        $user->email = 'nminoque@student.ciputra.ac.id';
        $user->password = Hash::make('0706022010020');
        $user->role_id = 3;
        $user->detailable_id = 14;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 14;
        $user->save();

        $user = new User();
        $user->name = 'Michael Chandra';
        $user->email = 'mchandra05@student.ciputra.ac.id';
        $user->password = Hash::make('0706012010052');
        $user->role_id = 3;
        $user->detailable_id = 15;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 15;
        $user->save();

        $user = new User();
        $user->name = 'Zefanya Oktaviana Indrasanti';
        $user->email = 'zoktaviana@student.ciputra.ac.id';
        $user->password = Hash::make('0706022010025');
        $user->role_id = 3;
        $user->detailable_id = 16;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 16;
        $user->save();

        $user = new User();
        $user->name = 'Jason widjaja';
        $user->email = 'jwidjaja02@student.ciputra.ac.id';
        $user->password = Hash::make('0706022010031');
        $user->role_id = 3;
        $user->detailable_id = 17;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 17;
        $user->save();

        $user = new User();
        $user->name = 'Haning Galih Rani Kumbara';
        $user->email = 'haning.grk@gmail.com';
        $user->password = Hash::make('0706012010055');
        $user->role_id = 3;
        $user->detailable_id = 18;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 18;
        $user->save();

        $user = new User();
        $user->name = 'Felix Jonathan Tjandra';
        $user->email = 'Fjonathan@student.ciputra.ac.id';
        $user->password = Hash::make('0706012010008');
        $user->role_id = 3;
        $user->detailable_id = 19;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 19;
        $user->save();

        $user = new User();
        $user->name = 'Billy Agustian Dharmawan';
        $user->email = 'bagustian@student.ciputra.ac.id';
        $user->password = Hash::make('0706022010030');
        $user->role_id = 3;
        $user->detailable_id = 20;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 20;
        $user->save();

        $user = new User();
        $user->name = 'Davina Teresa Wijaya';
        $user->email = 'dteresawijaya@student.ciputra.ac.id';
        $user->password = Hash::make('0706012110020');
        $user->role_id = 3;
        $user->detailable_id = 21;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 21;
        $user->save();

        $user = new User();
        $user->name = 'Vebrillia Santoso';
        $user->email = 'vsantoso01@student.ciputra.ac.id';
        $user->password = Hash::make('0706012110018');
        $user->role_id = 3;
        $user->detailable_id = 22;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 22;
        $user->save();

        $user = new User();
        $user->name = 'Nick Devano';
        $user->email = 'nsulistio@student.ciputra.ac.id';
        $user->password = Hash::make('0706012110027');
        $user->role_id = 3;
        $user->detailable_id = 23;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 23;
        $user->save();

        $user = new User();
        $user->name = 'Sintya Tri Wahyu Adityawati';
        $user->email = 'striwahyu@student.ciputra.ac.id';
        $user->password = Hash::make('0706012010012');
        $user->role_id = 3;
        $user->detailable_id = 24;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 24;
        $user->save();

        $user = new User();
        $user->name = 'Alfonsus Reklin Natanael';
        $user->email = 'anatanael@student.ciputra.ac.id';
        $user->password = Hash::make('0706012110010');
        $user->role_id = 3;
        $user->detailable_id = 25;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 25;
        $user->save();

        $user = new User();
        $user->name = 'Selyandaru Riskanadi';
        $user->email = 'sriskanadi@student.ciputra.ac.id';
        $user->password = Hash::make('0706012010030');
        $user->role_id = 3;
        $user->detailable_id = 26;
        $user->detailable_type = 'App\Models\Student';
        $user->info_id = 26;
        $user->save();

        $user = new User();
        $user->name = 'Laura Mahendratta';
        $user->email = 'laura@ciputra.ac.id';
        $user->password = Hash::make('123456789');
        $user->role_id = 2;
        $user->detailable_id = 4;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Mychael Maoeretz Engel';
        $user->email = 'mychael.engel@ciputra.ac.id';
        $user->password = Hash::make('123456789');
        $user->role_id = 2;
        $user->detailable_id = 5;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Evan Tanuwijaya';
        $user->email = 'evan.tanuwijaya@ciputra.ac.id';
        $user->password = Hash::make('123456789');
        $user->role_id = 2;
        $user->detailable_id = 6;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Yosua Soekamto';
        $user->email = 'yosua.soekamto@ciputra.ac.id';
        $user->password = Hash::make('123456789');
        $user->role_id = 2;
        $user->detailable_id = 7;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Rinabi Tanamal';
        $user->email = 'r.tanamal@ciputra.ac.id';
        $user->password = Hash::make('123456789');
        $user->role_id = 2;
        $user->detailable_id = 8;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Yuwono Marthadinata';
        $user->email = 'yuwono.dinata@ciputra.ac.id';
        $user->password = Hash::make('123456789');
        $user->role_id = 2;
        $user->detailable_id = 9;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Christian';
        $user->email = 'christian03@ciputra.ac.id';
        $user->password = Hash::make('123456789');
        $user->role_id = 2;
        $user->detailable_id = 10;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Caecilia Citra Lestari';
        $user->email = 'caecilia.citra@ciputra.ac.id';
        $user->password = Hash::make('123456789');
        $user->role_id = 2;
        $user->detailable_id = 11;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Theresia Ratih';
        $user->email = 'theresia.ratih@ciputra.ac.id';
        $user->password = Hash::make('123456789');
        $user->role_id = 2;
        $user->detailable_id = 12;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Stephanus Eko Wahyudi';
        $user->email = 'stephanus.eko@ciputra.ac.id';
        $user->password = Hash::make('123456789');
        $user->role_id = 2;
        $user->detailable_id = 13;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Adi Suryaputra';
        $user->email = 'adi.suryaputra@ciputra.ac.id';
        $user->password = Hash::make('123456789');
        $user->role_id = 2;
        $user->detailable_id = 14;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Indra Maryati';
        $user->email = 'indra.maryati@ciputra.ac.id';
        $user->password = Hash::make('123456789');
        $user->role_id = 2;
        $user->detailable_id = 15;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Kartika Gianina Tileng';
        $user->email = 'kartika@ciputra.ac.id';
        $user->password = Hash::make('123456789');
        $user->role_id = 2;
        $user->detailable_id = 16;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Daniel M. Wonohadidjojo';
        $user->email = 'daniel.m.w@ciputra.ac.id';
        $user->password = Hash::make('123456789');
        $user->role_id = 2;
        $user->detailable_id = 17;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Trianggoro Wiradinata';
        $user->email = 'twiradinata@ciputra.ac.id';
        $user->password = Hash::make('123456789');
        $user->role_id = 2;
        $user->detailable_id = 18;
        $user->detailable_type = 'App\Models\Lecturer';
        $user->save();
    }
}
