<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bomberosServicios extends Model
{

    public $timestamps = false;
    protected $table = 'bomberosServicios';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     * 
     */

     
    protected $fillable = [
        'servicioId', 'bomberoId'
    ];

    
    public function bombero(){
        return $this->belongsTo(bombero::class,'bomberoId');
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