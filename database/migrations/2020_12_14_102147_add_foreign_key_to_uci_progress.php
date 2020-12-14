<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToUciProgress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uci_progress', function (Blueprint $table) {
            $table->unsignedBigInteger('task_id')->index()->after('comment');
            $table->foreign('task_id')->references('id')->on('uci_tasks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uci_progress', function (Blueprint $table) {
            //
        });
    }
}
