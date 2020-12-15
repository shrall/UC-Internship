<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = new Department();
        $department->initial = 'REC';
        $department->name = 'Rectorat';
        $department->save();

        $department = new Department();
        $department->initial = 'DPK';
        $department->name = 'Board of Executive';
        $department->save();

        $department = new Department();
        $department->initial = 'EXM';
        $department->name = 'Executive Management';
        $department->save();

        $department = new Department();
        $department->initial = 'SU';
        $department->name = 'University Senate';
        $department->save();

        $department = new Department();
        $department->initial = 'NNP';
        $department->name = 'Networking and Partnership';
        $department->save();

        $department = new Department();
        $department->initial = 'HCM';
        $department->name = 'Human Capital Management';
        $department->save();

        $department = new Department();
        $department->initial = 'QA';
        $department->name = 'Quality Assurance';
        $department->save();

        $department = new Department();
        $department->initial = 'MNA';
        $department->name = 'Marketing and Admission';
        $department->save();

        $department = new Department();
        $department->initial = 'PM';
        $department->name = 'Property Management';
        $department->save();

        $department = new Department();
        $department->initial = 'LPPM';
        $department->name = 'Research and Community Development';
        $department->save();

        $department = new Department();
        $department->initial = 'TLC';
        $department->name = 'Teaching and Learning Center';
        $department->save();

        $department = new Department();
        $department->initial = 'PRO';
        $department->name = 'Project UC';
        $department->save();

        $department = new Department();
        $department->initial = 'MDP';
        $department->name = 'Medical Doctor Profession Education';
        $department->save();

        $department = new Department();
        $department->initial = 'BAA';
        $department->name = 'Office of the Registrar';
        $department->save();

        $department = new Department();
        $department->initial = 'ICT';
        $department->name = 'Information and Communication Technology';
        $department->save();

        $department = new Department();
        $department->initial = 'BMA';
        $department->name = 'Student and Alumni Affairs';
        $department->save();

        $department = new Department();
        $department->initial = 'LIB';
        $department->name = 'Library';
        $department->save();

        $department = new Department();
        $department->initial = 'FA';
        $department->name = 'Finance and Accounting';
        $department->save();

        $department = new Department();
        $department->initial = 'AA';
        $department->name = 'Apple Developer Academy';
        $department->save();

        $department = new Department();
        $department->initial = 'MEM';
        $department->name = 'Magister of Management';
        $department->save();

        $department = new Department();
        $department->initial = 'IBM-RC';
        $department->name = 'Management - Reguler Class';
        $department->save();

        $department = new Department();
        $department->initial = 'IBM-IC';
        $department->name = 'Management - International Class';
        $department->save();

        $department = new Department();
        $department->initial = 'ACC';
        $department->name = 'Accounting';
        $department->save();

        $department = new Department();
        $department->initial = 'PSY';
        $department->name = 'Psychology';
        $department->save();

        $department = new Department();
        $department->initial = 'COM';
        $department->name = 'Communication Science';
        $department->save();

        $department = new Department();
        $department->initial = 'CBZ';
        $department->name = 'Tourism - Culinary Business';
        $department->save();

        $department = new Department();
        $department->initial = 'HTB';
        $department->name = 'Tourism - Hotel and Tourism Business';
        $department->save();

        $department = new Department();
        $department->initial = 'VCD';
        $department->name = 'Visual Communication Design';
        $department->save();

        $department = new Department();
        $department->initial = 'FPD';
        $department->name = 'Fashion Product Design and Business';
        $department->save();

        $department = new Department();
        $department->initial = 'INA';
        $department->name = 'Architecture';
        $department->save();

        $department = new Department();
        $department->initial = 'MED';
        $department->name = 'Medicine';
        $department->save();

        $department = new Department();
        $department->initial = 'FTP';
        $department->name = 'Food Technology Program';
        $department->save();

        $department = new Department();
        $department->initial = 'IMT';
        $department->name = 'Informatics';
        $department->save();

        $department = new Department();
        $department->initial = 'ISB';
        $department->name = 'Information System';
        $department->save();
    }
}
