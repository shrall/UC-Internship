<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->date('deadline');
            $table->enum('status', ['0','1','2','3'])
            ->default('0')
            ->comment('0 = Available, 1 = Ongoing, 2 = Completed, 3 = Suspended');
            $table->enum('category', ['0','1','2'])
            ->default('0')
            ->comment('0 = Event, 1 = Education, 2 = Other');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
