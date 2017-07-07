<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Activitylog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('activitylogs', function(Blueprint $table) {


  		    $table->increments('id');
  		    $table->integer('user_id')->unsigned()->activitylog();
  		    $table->text('message');
            $table->text('detail');


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
        Schema::drop('activitylogs');
    }
}
