<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQsologsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qsologs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('logbook_id')->unsigned();
            $table->date('qsoDate');
            $table->time('qsoTime')->nullable();
            $table->decimal('frequency', 12, 4)->nullable()->comment('Frequency in MHz');
            $table->integer('callsign_id')->unsigned();
            $table->string('name', 50)->nullable();
            $table->integer('mode_id')->unsigned()->nullable();
            $table->integer('power')->unsigned()->nullable();
            $table->smallInteger('rstSent')->unsigned()->nullable();
            $table->smallInteger('rstRecv')->unsigned()->nullable();
            $table->integer('comment_id')->unsigned()->nullable();
            $table->integer('qslstatus_id')->unsigned()->nullable();
            $table->integer('lotwqslstatus_id')->unsigned()->nullable();
            $table->integer('qsoGroup')->unsigned()->nullable();
            $table->tinyInteger('cqZone')->unsigned()->nullable();
            $table->tinyInteger('ituZone')->unsigned()->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('qsologs');
    }
}
