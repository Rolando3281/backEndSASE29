<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unidades extends Model
{

    public $timestamps = false;
    protected $table = 'unidades';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     * 
     */

     
    protected $fillable = [
        'tipoUnidadId', 'marca', 'linea', 'modelo', 'ejes', 'origenId','estatusId','fechaIngreso','fechaBaja','razonBaja','observaciones','numeroUnidad','codigo'
    ];

    
    public function tipoUnidad(){
        return $this->belongsTo(tiposUnidades::class,'tipoUnidadId');
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