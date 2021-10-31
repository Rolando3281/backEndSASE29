<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bombero extends Model
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
        'nombres', 'apellidos', 'fechaNacimiento', 'direccion', 'telefonoResidencial', 'telefonoMovil','email','fechaAlta','fechaBaja','categoria','turno','fotografia','fechaCreacion'
    ];

    

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}