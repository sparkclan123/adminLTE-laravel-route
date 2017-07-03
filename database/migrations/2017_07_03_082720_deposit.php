<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Deposit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposit', function(Blueprint $table) {
            $table->increments('id');
  		    $table->string('username');
  		    $table->integer('balance');
  		    $table->string('bankdeposit');
  		    $table->string('accountnumberdeposit');
  		    $table->string('accontnamedeposit');
  		    $table->string('datetime');
  		    $table->string('channeldeposit');
  		    $table->string('tel');
  		    $table->string('opinion');



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
       Schema::drop('deposit');
    }
}
