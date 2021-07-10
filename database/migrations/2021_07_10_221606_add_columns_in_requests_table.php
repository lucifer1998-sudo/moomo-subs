<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsInRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('requests', function (Blueprint $table) {
            $table -> text('embed_yt')->default(null)->nullable();
            $table -> text('yt')->default(null)->nullable();
            $table -> text('gd')->default(null)->nullable();
            $table -> text('dm')->default(null)->nullable();
            $table -> text('other_1')->default(null)->nullable();
            $table -> text('other_2')->default(null)->nullable();
            $table -> integer('done')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('requests', function (Blueprint $table) {
            $table -> dropColumn('yt');
            $table -> dropColumn('embed_yt');
            $table -> dropColumn('gd');
            $table -> dropColumn('dm');
            $table -> dropColumn('other_1');
            $table -> dropColumn('other_2');
            $table -> dropColumn('done');
        });
    }
}
