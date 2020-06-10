<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIecOfStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iec_of_students', function (Blueprint $table) {
            $table->id();
            $table->integer('student_user_id');
            $table->integer('iec_user_id');
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
        Schema::dropIfExists('iec_of_students');
    }
}
