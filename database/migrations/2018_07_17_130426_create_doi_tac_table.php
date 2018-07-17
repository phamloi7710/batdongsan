<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoiTacTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doi_tac', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', array('active', 'inActive'))->default('active');
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
        Schema::dropIfExists('doi_tac');
    }
}
