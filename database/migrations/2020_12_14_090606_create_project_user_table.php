<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uci_project_user', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['0','1','2'])
            ->default('0')
            ->comment('0 = Pending, 1 = Accepted, 2 = Declined');
            $table->foreignId('uci_project_id')->constrained();
            $table->foreignId('uci_user_id')->constrained();
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
        Schema::dropIfExists('project_user');
    }
}
