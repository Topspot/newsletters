<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'logo', 'year', 'volume', 'banner'];

}