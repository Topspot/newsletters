<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Practicearea extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'practiceareas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'link','attorney_id'];
    
    
      public function attorney()
    {
        return $this->belongsTo('App\Attorney');
    }

}