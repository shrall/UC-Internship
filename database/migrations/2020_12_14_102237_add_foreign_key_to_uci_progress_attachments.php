<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToUciProgressAttachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uci_progress_attachments', function (Blueprint $table) {
            $table->unsignedBigInteger('progress_id')->index()->after('name');
            $table->foreign('progress_id')->references('id')->on('uci_progress');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uci_progress_attachments', function (Blueprint $table) {
            //
        });
    }
}
