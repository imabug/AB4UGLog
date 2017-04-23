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
            $table->date('qsoDate');
            $table->time('qsoTime')->nullable();
            $table->decimal('frequency', 12, 4)->nullable();
            $table->unsignedInteger('callsign_id');
            $table->string('name', 50)->nullable();
            $table->unsignedInteger('mode_id')->nullable();
            $table->unsignedInteger('power')->nullable();
            $table->unsignedSmallInteger('rstSent')->nullable();
            $table->unsignedSmallInteger('rstRecv')->nullable();
            $table->unsignedInteger('comment_id')->nullable();
            $table->unsignedInteger('qslstatus_id')->nullable();
            $table->unsignedInteger('lotwqslstatus_id')->nullable();
            $table->unsignedInteger('qsoGroup')->nullable();
            $table->unsignedTinyInteger('cqZone')->nullable();
            $table->unsignedTinyInteger('ituZone')->nullable();
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
