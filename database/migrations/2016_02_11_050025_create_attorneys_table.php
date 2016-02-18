<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttorneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('attorneys', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');$table->string('website');$table->string('url');$table->string('yelp');$table->string('google');$table->string('logo');$table->string('phone');$table->string('year');$table->string('volume');$table->string('banner_heading');$table->string('banner_text');$table->string('attorney_img');$table->string('footer_logo');$table->string('footer_text');$table->string('footer_address');$table->string('footer_website');$table->string('copyright');$table->string('unsubscribe');
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
        Schema::drop('attorneys');
    }
}