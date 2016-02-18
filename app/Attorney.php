<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Attorney extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'attorneys';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'website','google_yelp', 'url', 'yelp', 'google', 'logo', 'phone', 'year', 'volume', 'banner_heading', 'banner_text', 'attorney_img', 'footer_logo', 'footer_text', 'footer_address', 'footer_website', 'copyright', 'unsubscribe','phone_number','recipe_show','thankyou_show','thankyou_heading','thankyou_subheading','thankyou_text','joke_show','joke_heading','joke_background','banner_background','check_banner'];
    
    
     public function articles()
    {
        return $this->hasMany('App\Article');
    }
    
    public function practiceareas()
    {
        return $this->hasMany('App\Practicearea');
    }

}