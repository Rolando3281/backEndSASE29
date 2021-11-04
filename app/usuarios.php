<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{

    public $timestamps = false;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     * 
     */

     
    protected $fillable = [
        'usuario', 'password', 'fechaCreacion'
    ];

    

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}