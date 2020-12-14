<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToUciInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uci_infos', function (Blueprint $table) {
            $table->unsignedBigInteger('scholarship_id')->index()->after('cv')->nullable();
            $table->foreign('scholarship_id')->references('id')->on('uci_scholarships');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uci_infos', function (Blueprint $table) {
            //
        });
    }
}
