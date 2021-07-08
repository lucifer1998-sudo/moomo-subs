<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVideoColumnsInVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('videos', function (Blueprint $table) {
            $table ->string('gd');
            $table -> string('yt');
            $table ->string('dm');
            $table -> string('other_1');
            $table -> string('other_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('videos', function (Blueprint $table) {
            $table -> dropColumn('gd');
            $table -> dropColumn('yt');
            $table -> dropColumn('dm');
            $table -> dropColumn('other_1');
            $table -> dropColumn('other_2');
        });
    }
}
