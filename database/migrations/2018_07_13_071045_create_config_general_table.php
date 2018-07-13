<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigGeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('hotline', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('fax', 255)->nullable();
            $table->string('logo', 255)->nullable();
            $table->string('favicon', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('seoTitle', 255)->nullable();
            $table->string('seoDescription', 255)->nullable();
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
        Schema::dropIfExists('config.general');
    }
}
