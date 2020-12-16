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
        $user->detailable_type = 'App\Staff';
        $user->save();

        $user = new User();
        $user->name = 'Marshall - AdminLecturer';
        $user->email = 'marshall@adminlecturer.com';
        $user->password = Hash::make('marshalladminlecturer');
        $user->role_id = 1;
        $user->detailable_id = 1;
        $user->detailable_type = 'App\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Marshall - Staff';
        $user->email = 'marshall@staff.com';
        $user->password = Hash::make('marshallstaff');
        $user->role_id = 2;
        $user->detailable_id = 1;
        $user->detailable_type = 'App\Staff';
        $user->save();

        $user = new User();
        $user->name = 'Marshall - Lecturer';
        $user->email = 'marshall@lecturer.com';
        $user->password = Hash::make('marshalllecturer');
        $user->role_id = 2;
        $user->detailable_id = 1;
        $user->detailable_type = 'App\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Marshall - Student';
        $user->email = 'marshall@student.com';
        $user->password = Hash::make('marshallstudent');
        $user->role_id = 3;
        $user->detailable_id = 1;
        $user->detailable_type = 'App\Student';
        $user->info_id = 1;
        $user->save();

        $user = new User();
        $user->name = 'Tinara - AdminStaff';
        $user->email = 'tinara@adminstaff.com';
        $user->password = Hash::make('tinaraadminstaff');
        $user->role_id = 1;
        $user->detailable_id = 2;
        $user->detailable_type = 'App\Staff';
        $user->save();

        $user = new User();
        $user->name = 'Tinara - AdminLecturer';
        $user->email = 'tinara@adminlecturer.com';
        $user->password = Hash::make('tinaraadminlecturer');
        $user->role_id = 1;
        $user->detailable_id = 2;
        $user->detailable_type = 'App\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Tinara - Staff';
        $user->email = 'tinara@staff.com';
        $user->password = Hash::make('tinarastaff');
        $user->role_id = 2;
        $user->detailable_id = 2;
        $user->detailable_type = 'App\Staff';
        $user->save();

        $user = new User();
        $user->name = 'Tinara - Lecturer';
        $user->email = 'tinara@lecturer.com';
        $user->password = Hash::make('tinaralecturer');
        $user->role_id = 2;
        $user->detailable_id = 2;
        $user->detailable_type = 'App\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Tinara - Student';
        $user->email = 'tinara@student.com';
        $user->password = Hash::make('tinarastudent');
        $user->role_id = 3;
        $user->detailable_id = 2;
        $user->detailable_type = 'App\Student';
        $user->info_id = 2;
        $user->save();

        $user = new User();
        $user->name = 'Michelle - AdminStaff';
        $user->email = 'michelle@adminstaff.com';
        $user->password = Hash::make('michelleadminstaff');
        $user->role_id = 1;
        $user->detailable_id = 3;
        $user->detailable_type = 'App\Staff';
        $user->save();

        $user = new User();
        $user->name = 'Michelle - AdminLecturer';
        $user->email = 'michelle@adminlecturer.com';
        $user->password = Hash::make('michelleadminlecturer');
        $user->role_id = 1;
        $user->detailable_id = 3;
        $user->detailable_type = 'App\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Michelle - Staff';
        $user->email = 'michelle@staff.com';
        $user->password = Hash::make('michellestaff');
        $user->role_id = 2;
        $user->detailable_id = 3;
        $user->detailable_type = 'App\Staff';
        $user->save();

        $user = new User();
        $user->name = 'Michelle - Lecturer';
        $user->email = 'michelle@lecturer.com';
        $user->password = Hash::make('michellelecturer');
        $user->role_id = 2;
        $user->detailable_id = 3;
        $user->detailable_type = 'App\Lecturer';
        $user->save();

        $user = new User();
        $user->name = 'Michelle - Student';
        $user->email = 'michelle@student.com';
        $user->password = Hash::make('michellestudent');
        $user->role_id = 3;
        $user->detailable_id = 3;
        $user->detailable_type = 'App\Student';
        $user->info_id = 3;
        $user->save();
    }
}
