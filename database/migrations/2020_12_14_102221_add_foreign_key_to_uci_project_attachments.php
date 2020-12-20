<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToUciProjectAttachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uci_project_attachments', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id')->index()->after('name');
            $table->foreign('project_id')->references('id')->on('uci_projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uci_project_attachments', function (Blueprint $table) {
            //
        });
    }
}
