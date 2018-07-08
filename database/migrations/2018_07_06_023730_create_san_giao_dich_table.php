<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanGiaoDichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_giao_dich', function (Blueprint $table) {
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
        Schema::dropIfExists('san-giao-dich');
    }
}
