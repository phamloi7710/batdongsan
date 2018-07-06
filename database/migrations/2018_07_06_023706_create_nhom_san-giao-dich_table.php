<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhomSanGiaoDichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhom_san-giao-dich', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('slug')->nullable();
            $table->longText('description')->nullable();
            $table->enum('status', array('active', 'inActive'))->default('active');
            $table->integer('sort')->nullable();
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
        Schema::dropIfExists('nhom_san-giao-dich');
    }
}
