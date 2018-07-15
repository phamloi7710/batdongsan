<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSanGiaoDich1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('san_giao_dich', function (Blueprint $table) {
            $table->string('address', 255)->after('cate_id')->nullable();
            $table->enum('type', array('Mua Bán', 'Cho Thuê'))->after('cate_id')->nullable();
            $table->string('area', 255)->after('cate_id')->nullable();
            $table->string('price')->after('cate_id')->nullable();
            $table->integer('room')->after('cate_id')->nullable();
            $table->string('userPostName')->after('cate_id')->nullable();
            $table->string('userPostEmail', 255)->after('cate_id')->nullable();
            $table->string('userPostPhone')->after('cate_id')->nullable();
            $table->string('userPostAddress', 255)->after('cate_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('san_giao_dich', function (Blueprint $table) {
            $table->dropColumn('address');
            $table->dropColumn('type');
            $table->dropColumn('area');
            $table->dropColumn('price');
            $table->dropColumn('room');
            $table->dropColumn('userPostName');
            $table->dropColumn('userPostEmail');
            $table->dropColumn('userPostPhone');
            $table->dropColumn('userPostAddress');
        });
    }
}
