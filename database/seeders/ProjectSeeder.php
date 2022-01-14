<?php

namespace Database\Seeders;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = new Project();
        $project->name = '8th NPLC';
        $project->description = 'National Programming and Logic Competition, lomba yang diadakan tiap tahun oleh jurusan IMT.';
        $project->deadline = Carbon::parse('2021-12-25');
        $project->status = '2';
        $project->category = '0';
        $project->period_id = 1;
        $project->supervisor_id = 7;
        $project->save();

        $project = new Project();
        $project->name = 'Red Carpet Night';
        $project->description = 'Ajang penghargaan untuk prodi IMT.';
        $project->deadline = Carbon::parse('2022-02-25');
        $project->status ='3';
        $project->category = '0';
        $project->period_id = 2;
        $project->supervisor_id = 14;
        $project->save();

        $project = new Project();
        $project->name = 'Rektor Cup 2020';
        $project->description = 'Lomba untuk setiap prodi di Universitas Ciputra.';
        $project->deadline = Carbon::parse('2022-12-10');
        $project->status = '1';
        $project->category = '0';
        $project->period_id = 1;
        $project->supervisor_id = 3;
        $project->save();

        $project = new Project();
        $project->name = 'Entrepreneurship Essentials';
        $project->description = 'Mata Kuliah untuk semester 1.';
        $project->deadline = Carbon::parse('2022-12-10');
        $project->status = '0';
        $project->category = '1';
        $project->period_id = 1;
        $project->supervisor_id = 3;
        $project->save();

        $project = new Project();
        $project->name = 'Rekap Daftar KI';
        $project->description = 'Sortir daftar KI.';
        $project->deadline = Carbon::parse('2022-12-12');
        $project->status = '0';
        $project->category = '3';
        $project->period_id = 1;
        $project->supervisor_id = 4;
        $project->save();

        $project = new Project();
        $project->name = "Valentine's Day";
        $project->description = "Membuat design poster untuk Valentine's Day.";
        $project->deadline = Carbon::parse('2022-12-12');
        $project->status = '0';
        $project->category = '0';
        $project->period_id = 1;
        $project->supervisor_id = 4;
        $project->save();

        $project = new Project();
        $project->name = "Father's Day";
        $project->description = "Membuat design poster untuk Father's Day.";
        $project->deadline = Carbon::parse('2022-12-12');
        $project->status = '0';
        $project->category = '0';
        $project->period_id = 1;
        $project->supervisor_id = 4;
        $project->save();

        $project = new Project();
        $project->name = "Mother's Day";
        $project->description = "Membuat design poster untuk Mother's Day.";
        $project->deadline = Carbon::parse('2022-12-12');
        $project->status = '0';
        $project->category = '0';
        $project->period_id = 1;
        $project->supervisor_id = 4;
        $project->save();

        $project = new Project();
        $project->name = "Christmas";
        $project->description = "Membuat design poster untuk Christmas.";
        $project->deadline = Carbon::parse('2022-12-12');
        $project->status = '0';
        $project->category = '0';
        $project->period_id = 1;
        $project->supervisor_id = 4;
        $project->save();

        $project = new Project();
        $project->name = "New Year's Eve";
        $project->description = "Membuat design poster untuk New Year's Eve.";
        $project->deadline = Carbon::parse('2022-12-12');
        $project->status = '0';
        $project->category = '0';
        $project->period_id = 1;
        $project->supervisor_id = 4;
        $project->save();

        $project = new Project();
        $project->name = "Lunar New Year";
        $project->description = "Membuat design poster untuk Lunar New Year.";
        $project->deadline = Carbon::parse('2022-12-12');
        $project->status = '0';
        $project->category = '0';
        $project->period_id = 1;
        $project->supervisor_id = 4;
        $project->save();

        $project = new Project();
        $project->name = "Open Recruitment Student Council";
        $project->description = "Membuat design poster untuk Open Recruitment Student Council.";
        $project->deadline = Carbon::parse('2022-12-12');
        $project->status = '0';
        $project->category = '0';
        $project->period_id = 1;
        $project->supervisor_id = 4;
        $project->save();

        $project = new Project();
        $project->name = "Webinar Narkoba";
        $project->description = "Membuat design poster untuk Webinar Narkoba.";
        $project->deadline = Carbon::parse('2022-12-12');
        $project->status = '0';
        $project->category = '0';
        $project->period_id = 1;
        $project->supervisor_id = 4;
        $project->save();

        $project = new Project();
        $project->name = "Webinar Effective Learning";
        $project->description = "Membuat design poster untuk Webinar Effective Learning.";
        $project->deadline = Carbon::parse('2022-12-12');
        $project->status = '0';
        $project->category = '0';
        $project->period_id = 1;
        $project->supervisor_id = 4;
        $project->save();

        $project = new Project();
        $project->name = "Pra-LDK";
        $project->description = "Membuat design powerpoint untuk Pra-LDK.";
        $project->deadline = Carbon::parse('2022-12-12');
        $project->status = '0';
        $project->category = '0';
        $project->period_id = 1;
        $project->supervisor_id = 4;
        $project->save();

        $project = new Project();
        $project->name = "BMA O-Week";
        $project->description = "Membuat design powerpoint untuk BMA O-Week.";
        $project->deadline = Carbon::parse('2022-12-12');
        $project->status = '0';
        $project->category = '0';
        $project->period_id = 1;
        $project->supervisor_id = 4;
        $project->save();
    }
}
