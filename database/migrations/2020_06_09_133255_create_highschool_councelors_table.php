<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHighschoolCouncelorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('highschool_councelors', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('school_id');
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('modified_by');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('highschool_councelors');
    }
}
