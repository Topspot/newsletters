<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimilarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('similars', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('google_heading');$table->string('google_text');$table->string('google_image');$table->string('article1_heading');$table->text('article1_detail');$table->string('article1_link');$table->string('article1_image');$table->string('article2_heading');$table->text('article2_detail');$table->string('article2_link');$table->string('article2_image');$table->string('article3_heading');$table->text('article3_detail');$table->string('article3_link');$table->string('article3_image');$table->string('practicearea_heading');$table->string('recipe_heading');$table->string('recipe_sub_heading');$table->string('ingredient_heading');$table->string('ingredient_text');$table->string('ingredient_image');$table->string('ingredient_link');
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
        Schema::drop('similars');
    }
}