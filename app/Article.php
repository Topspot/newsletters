<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['article_title', 'article_detail', 'article_image', 'article_link', 'attorney_id'];
    
     public function attorney()
    {
        return $this->belongsTo('App\Attorney');
    }

}