<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotwQslstatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotw_qslstatus', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('lotwSent')->default(false);
            $table->date('lotwSentDate')->nullable();
            $table->boolean('lotwRecv')->default(false);
            $table->date('lotwRecvDate')->nullable();
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
        Schema::dropIfExists('lotw_qslstatus');
    }
}
