<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{

    public $timestamps = false;
    protected $table = 'servicios';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     * 
     */

     
    protected $fillable = [
        'tipoServicioId', 'fechaServicio', 'solicitadoPor', 'direccion', 'observaciones'
    ];

    
    public function tipoServicio(){
        return $this->belongsTo(tiposServicios::class,'tipoServicioId');
    }

    public function bomberos(){
        return $this->hasMany(bomberosServicios::class,'servicioId');

    }
    
    public function unidades(){
        return $this->hasMany(unidadesServicios::class,'servicioId');

    }
   


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}