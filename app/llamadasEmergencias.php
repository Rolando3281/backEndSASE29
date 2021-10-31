<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class llamadasEmergencias extends Model
{

    public $timestamps = false;
    protected $table = 'llamadasEmergencias';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     * 
     */

     
    protected $fillable = [
        'control', 'tipoEmergenciaId', 'puntoReferencia', 'direccion', 'telefono','nombre','salida','entrada','piloto','telefonista','telefonistaCentral'
    ];

    
    public function tipoEmergencia(){
        return $this->belongsTo(tiposEmergencias::class,'tipoEmergenciaId');
    }

    public function bomberos(){
        return $this->hasMany(bomberosEmergencias::class,'llamadaEmergenciaId');

    }
    
    public function unidades(){
        return $this->hasMany(unidadesEmergencias::class,'llamadaEmergenciaId');

    }
   


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}