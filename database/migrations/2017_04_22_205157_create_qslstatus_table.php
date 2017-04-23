<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQslstatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qslstatus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qsologs_id');
            $table->boolean('qslSent')->default(false);
            $table->date('qslSentDate')->nullable();
            $table->boolean('qslRecv')->default(false);
            $table->date('qslRecvDate')->nullable();
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
        Schema::dropIfExists('qslstatus');
    }
}
