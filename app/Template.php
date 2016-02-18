<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'templates';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'detail'];

}