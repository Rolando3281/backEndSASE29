<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiposHerramientas extends Model
{

    public $timestamps = false;
    protected $table = 'tiposHerramientas';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     * 
     */

     
    protected $fillable = [
        'nombre'
    ];

    

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}