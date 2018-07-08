<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSanGiaoDichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('san-giao-dich', function (Blueprint $table) {
            $table->integer('price')->after('cate_id')->nullable();
            $table->string('area', 255)->after('cate_id')->nullable();
            $table->string('address', 255)->after('cate_id')->nullable();
            $table->enum('type', array('Mua Bán', 'Cho Thuê'))->after('cate_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('san-giao-dich', function (Blueprint $table) {
            $table->dropColumn('area');
            $table->dropColumn('address');
            $table->dropColumn('type');
            $table->dropColumn('price');
        });
    }
}
