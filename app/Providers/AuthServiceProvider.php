<?php

namespace App\Providers;

use App\Models\User;
use App\usuarios;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use SebastianBergmann\Environment\Console;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        // Here you may define how you wish users to be authenticated for your Lumen
        // application. The callback which receives the incoming request instance
        // should return either a User instance or null. You're free to obtain
        // the User instance via an API token or any other method necessary.

        $this->app['auth']->viaRequest('api', function ($request) {
            if ($request->input('api_token')) {
                return User::where('api_token', $request->input('api_token'))->first();

                /*

                $usuario = usuarios::where('api_token', $request->input('api_token'))->first();

                if(!is_null($usuario)){

                    $token_date =date_create( $usuario->fechaToken);
                $actual_date =date_create( Date("Y-m-d H:i:s"));
                $fecha_restante = date_diff($token_date,$actual_date);

                $minutos = ($fecha_restante->days * 24 * 60) + ($fecha_restante->h*60)+ ($fecha_restante->i);

                if($minutos<5){
                    return $usuario;
                }

                }*/
                


                // echo "Minutos que han pasado= ".$minutos;
                // echo " , fecha token= ".$usuario->fechaToken;
                
                


                //return usuarios::where('api_token', $request->input('api_token'))->first();
            }
        });
    }
}
