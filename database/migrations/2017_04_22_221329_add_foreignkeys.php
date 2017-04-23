<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('qsologs', function (Blueprint $table) {
            $table->foreign('callsign_id')->references('id')->on('callsigns');
            $table->foreign('mode_id')->references('id')->on('modes');
            $table->foreign('comment_id')->references('id')->on('comments');
            $table->foreign('qslstatus_id')->references('id')->on('qslstatus');
            $table->foreign('lotwqslstatus_id')->references('id')->on('lotw_qslstatus');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('qsologs', function (Blueprint $table) {
            $table->dropForeign('qsologs_callsign_id_foreign');
            $table->dropForeign('qsologs_mode_id_foreign');
            $table->dropForeign('qsologs_comment_id_foreign');
            $table->dropForeign('qsologs_qslstatus_id_foreign');
            $table->dropForeign('qsologs_lotw_qslstatus_id_foreign');
        });
        Schema::enableForeignKeyConstraints();
    }
}
