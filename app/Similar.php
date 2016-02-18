<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Similar extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'similars';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['google_heading', 'google_text', 'google_image','yelp_image', 'article1_heading', 'article1_detail', 'article1_link', 'article1_image', 'article2_heading', 'article2_detail', 'article2_link', 'article2_image', 'article3_heading', 'article3_detail', 'article3_link', 'article3_image', 'practicearea_heading', 'recipe_heading', 'recipe_sub_heading', 'ingredient_heading', 'ingredient_text', 'ingredient_image', 'ingredient_link'];

}