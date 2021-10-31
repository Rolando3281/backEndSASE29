<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unidadesEmergencias extends Model
{

    public $timestamps = false;
    protected $table = 'unidadesEmergencias';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     * 
     */

     
    protected $fillable = [
        'llamadaEmergenciaId', 'unidadId'
    ];

    
    public function unidad(){
        return $this->belongsTo(unidades::class,'unidadId');
    }

    public function llamada(){
        return $this->belongsTo(llamadasEmergencias::class,'llamadaEmergenciaId');
    }
   

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}