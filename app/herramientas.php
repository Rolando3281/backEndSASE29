<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class herramientas extends Model
{

    public $timestamps = false;
    protected $table = 'herramientas';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     * 
     */

     
    protected $fillable = [
        'tipoHerramientaId', 'tipoEquipoId', 'estatusId', 'origenId', 'marca', 'modelo','numeroSerie','nombre','fechaIngreso','fechaBaja','razonBaja'
    ];

    
    public function tipoHerramienta(){
        return $this->belongsTo(tiposHerramientas::class,'tipoEquipoId');
    }

    public function tipoEquipo(){
        return $this->belongsTo(tiposEquipos::class,'tipoHerramientaId');
    }

    public function estatus(){
        return $this->belongsTo(estatus::class,'estatusId');
    }

    public function origen(){
        return $this->belongsTo(tipoOrigen::class,'origenId');
    }


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}