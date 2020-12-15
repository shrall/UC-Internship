<?php

namespace Database\Seeders;

use App\Models\Scholarship;
use Illuminate\Database\Seeder;

class ScholarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $scholarship = new Scholarship();
        $scholarship->name = 'Beasiswa Prestasi Unggulan';
        $scholarship->grade = 'A';
        $scholarship->duration = '4';
        $scholarship->minimum_gpa = '3.75';
        $scholarship->hps = '200';
        $scholarship->save();

        $scholarship = new Scholarship();
        $scholarship->name = 'Beasiswa Prestasi Unggulan';
        $scholarship->grade = 'B';
        $scholarship->duration = '4';
        $scholarship->minimum_gpa = '3.5';
        $scholarship->hps = '75';
        $scholarship->save();

        $scholarship = new Scholarship();
        $scholarship->name = 'Beasiswa Sosial Ekonomi';
        $scholarship->grade = 'A';
        $scholarship->duration = '1';
        $scholarship->minimum_gpa = '3.75';
        $scholarship->hps = '200';
        $scholarship->save();

        $scholarship = new Scholarship();
        $scholarship->name = 'Beasiswa Sosial Ekonomi';
        $scholarship->grade = 'B';
        $scholarship->duration = '1';
        $scholarship->minimum_gpa = '3.75';
        $scholarship->hps = '150';
        $scholarship->save();

        $scholarship = new Scholarship();
        $scholarship->name = 'Beasiswa Sosial Ekonomi';
        $scholarship->grade = 'C';
        $scholarship->duration = '1';
        $scholarship->minimum_gpa = '3.5';
        $scholarship->hps = '100';
        $scholarship->save();

        $scholarship = new Scholarship();
        $scholarship->name = 'Beasiswa Sosial Ekonomi';
        $scholarship->grade = 'D';
        $scholarship->duration = '1';
        $scholarship->minimum_gpa = '3.25';
        $scholarship->hps = '75';
        $scholarship->save();

        $scholarship = new Scholarship();
        $scholarship->name = 'Beasiswa Sosial Ekonomi';
        $scholarship->grade = 'e';
        $scholarship->duration = '1';
        $scholarship->minimum_gpa = '3.25';
        $scholarship->hps = '50';
        $scholarship->save();
    }
}
