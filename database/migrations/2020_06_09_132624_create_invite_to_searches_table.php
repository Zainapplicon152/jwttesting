<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInviteToSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invite_to_searches', function (Blueprint $table) {
            $table->id();
            $table->integer('search_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('invite_to_searches');
    }
}
