<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToUciUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uci_users', function (Blueprint $table) {
            $table->unsignedBigInteger('info_id')->index()->after('detailable_type')->nullable();
            $table->foreign('info_id')->references('id')->on('uci_infos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uci_users', function (Blueprint $table) {
            //
        });
    }
}
