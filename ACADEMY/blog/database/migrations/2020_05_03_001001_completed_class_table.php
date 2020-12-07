<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompletedClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completed_class',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('phn',1000);
            $table->string('ip_address',1000);
            $table->string('date',1000);
            $table->string('time',1000);
            $table->string('video_link',1000);
            $table->string('title',1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
