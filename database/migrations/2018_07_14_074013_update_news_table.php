<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('seo');
            $table->text('seoTitle')->after('noibat')->nullable();
            $table->text('seoDescription')->after('seoTitle')->nullable();
            $table->text('seoKeywords')->after('seoDescription')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('seoTitle');
            $table->dropColumn('seoDescription');
            $table->dropColumn('seoKeywords');
        });
    }
}
