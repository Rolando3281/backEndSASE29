<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Lumen\Auth\Authorizable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class usuarios extends Model implements AuthenticatableContract, AuthorizableContract, JWTSubject
{
    use Authenticatable, Authorizable, HasFactory;

    public $timestamps = false;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     * 
     */

     
    protected $fillable = [
        'usuario', 'password','fechaCreacion','api_token','fechaToken','rol','nombre','apellido'
    ];

    

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];


    /* Get the identifier that will be stored in the subject claim of the JWT.
    *
    * @return mixed
    */
   public function getJWTIdentifier()
   {
       return $this->getKey();
   }

   /**
    * Return a key value array, containing any custom claims to be added to the JWT.
    *
    * @return array
    */
   public function getJWTCustomClaims()
   {
       return [];
   }
}