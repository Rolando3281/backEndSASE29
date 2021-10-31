<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bomberosEmergencias extends Model
{

    public $timestamps = false;
    protected $table = 'bomberosEmergencias';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     * 
     */

     
    protected $fillable = [
        'llamadaEmergenciaId', 'bomberoId'
    ];

    
    public function bombero(){
        return $this->belongsTo(bombero::class,'bomberoId');
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