<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToUciHistories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uci_histories', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id')->index()->after('duration_after');
            $table->foreign('student_id')->references('id')->on('uci_users');
            $table->unsignedBigInteger('supervisor_id')->index()->after('student_id')->nullable();
            $table->foreign('supervisor_id')->references('id')->on('uci_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uci_histories', function (Blueprint $table) {
            //
        });
    }
}
