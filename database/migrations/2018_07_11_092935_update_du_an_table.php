<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDuAnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('du_an', function (Blueprint $table) {
            $table->string('provinceid')->after('SEO')->nullable();
            $table->string('districtid')->after('provinceid')->nullable();
            $table->string('type')->after('cate_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('du_an', function (Blueprint $table) {
            $table->dropColumn('provinceid');
            $table->dropColumn('districtid');
            $table->dropColumn('type');
        });
    }
}
