<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uci_scholarships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('grade', 1);
            $table->string('duration');
            $table->float('minimum_gpa');
            $table->float('hps')
            ->comment('Hour Per Semester');
            $table->enum('status', ['0','1'])
                ->default('0')
                ->comment('0 = Open, 1 = Close');
            $table->softDeletes();
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
        Schema::dropIfExists('scholarships');
    }
}
