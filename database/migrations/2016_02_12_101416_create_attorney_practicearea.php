<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttorneyPracticearea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('attorney_practicearea', function(Blueprint $table)
        {
            $table->integer('attorney_id')->unsigned();
            $table->integer('practicearea_id')->unsigned();
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
        Schema::drop('practiceareas');
    }
}
