<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insumos extends Model
{

    public $timestamps = false;
    protected $table = 'insumos';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     * 
     */

     
    protected $fillable = [
        'tipoInsumoId', 'propsitoId', 'nombre', 'minimo', 'maximo'
    ];

    
    public function tipoInsumo(){
        return $this->belongsTo(tiposInsumos::class,'tipoInsumoId');
    }

    public function propositoInsumo(){
        return $this->belongsTo(propositosInsumos::class,'propsitoId');
    }

    


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}