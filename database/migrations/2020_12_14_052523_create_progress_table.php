<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uci_progress', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->dateTime('time_start');
            $table->dateTime('time_end');
            $table->enum('status', ['0','1','2'])
            ->default('0')
            ->comment('0 = Pending, 1 = Accepted, 2 = Declined');
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('progress');
    }
}
