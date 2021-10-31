<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unidadesServicios extends Model
{

    public $timestamps = false;
    protected $table = 'unidadesServicios';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     * 
     */

     
    protected $fillable = [
        'servicioId', 'unidadId'
    ];

    
    public function unidad(){
        return $this->belongsTo(unidades::class,'unidadId');
    }

    public function servicio(){
        return $this->belongsTo(servicios::class,'servicioId');
    }
   

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}