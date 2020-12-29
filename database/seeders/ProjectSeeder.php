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
        $project->deadline = Carbon::parse('2020-12-25');
        $project->status = '2';
        $project->category = '0';
        $project->period_id = 1;
        $project->supervisor_id = 7;
        $project->save();

        $project = new Project();
        $project->name = 'Red Carpet Night';
        $project->description = 'Ajang penghargaan untuk prodi IMT.';
        $project->deadline = Carbon::parse('2021-02-25');
        $project->status ='3';
        $project->category = '0';
        $project->period_id = 2;
        $project->supervisor_id = 14;
        $project->save();

        $project = new Project();
        $project->name = 'Rektor Cup 2020';
        $project->description = 'Lomba untuk setiap prodi di Universitas Ciputra.';
        $project->deadline = Carbon::parse('2020-12-10');
        $project->status = '1';
        $project->category = '0';
        $project->period_id = 1;
        $project->supervisor_id = 3;
        $project->save();

        $project = new Project();
        $project->name = 'Entrepreneurship Essentials';
        $project->description = 'Mata Kuliah untuk semester 1.';
        $project->deadline = Carbon::parse('2020-12-10');
        $project->status = '0';
        $project->category = '1';
        $project->period_id = 1;
        $project->supervisor_id = 3;
        $project->save();
    }
}
