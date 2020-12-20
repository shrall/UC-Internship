<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToUciTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uci_tasks', function (Blueprint $table) {
            $table->unsignedBigInteger('pu_id')->index()->after('status');
            $table->foreign('pu_id')->references('id')->on('uci_project_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uci_tasks', function (Blueprint $table) {
            //
        });
    }
}
