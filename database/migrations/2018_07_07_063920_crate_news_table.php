<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255)->nullable();
            $table->text('slug')->nullable();
            $table->string('image', 255)->nullable();
            $table->integer('cate_id')->nullable();
            $table->text('summary')->nullable();
            $table->longText('description')->nullable();
            $table->enum('status', array('active', 'inActive'))->default('active');
            $table->integer('sort')->nullable();
            $table->longText('SEO')->nullable();
            $table->integer('user_id')->nullable();
            $table->enum('hot', array('true', 'false'))->default('false');
            $table->enum('new', array('true', 'false'))->default('false');
            $table->enum('noibat', array('true', 'false'))->default('false');
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
        Schema::dropIfExists('news');
    }
}
