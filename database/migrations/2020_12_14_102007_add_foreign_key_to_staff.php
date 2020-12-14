<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->unsignedBigInteger('department_id')->index()->after('line_account');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->unsignedBigInteger('title_id')->index()->after('department_id');
            $table->foreign('title_id')->references('id')->on('titles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staff', function (Blueprint $table) {
            //
        });
    }
}
