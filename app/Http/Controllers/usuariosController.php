<?php


namespace App\Http\Controllers;


use App\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use SebastianBergmann\Type\NullType;

class usuariosController extends Controller
{
    
    public function showAllBomberos()
    {

        // if(DB::connection()->getDatabaseName())
        //     {
        //         echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
        //     }



        return response()->json(usuarios::all());
    }

    public function showOneBombero($id)
    {
        return response()->json(usuarios::find($id));
    }

    public function create(Request $request)
    {

        $input = $request->all();
        $input['password'] = Hash::make($request->password);
        $input['fechaCreacion']= Date("Y-m-d H:i:s");


        //$author = usuarios::create($request->all());
        $author = usuarios::create($input);

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = usuarios::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function login( Request $request)
    {

        $credentials = request(['usuario', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);

        /*    
        $user = usuarios::whereUsuario($request->usuario)->first();
       

        if(!is_null($user) && Hash::check($request->password, $user->password))
        {
            $user->api_token = Str::random(length:200);
            $user->fechaToken = Date("Y-m-d H:i:s");
            $user->save();

            return response()->json([
                'res' => true,
                'token' => $user->api_token,
                'message' => 'autenticado exitosamente'
            ],200);
        }
        else{


            return response()->json([
                'res' => false,               
                'message' => 'Usuario o Password incorrectos.'
            ],404);

        }
        */

        // $name = $request->input('usuario');
        // $password = $request->input('password');

        // $bombero = usuarios::where('usuario','=',$name)->firstOrFail();
        
        // if($bombero!=null){
        //     if($bombero->password==$password){
        //         return response()->json($bombero, 200);
        //     }
        //     else{
        //         return response()->json("ERROR AUTENTICACION", 404);
        //     }

        // }
        // else{
        //     return response()->json("ERROR AUTENTICACION", 404);
        // }

        

        
    }

    public function logout(){

        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);


        /*
        $autenticado= auth()->user();
        $autenticado->api_token=null;
        $autenticado->fechaToken=null;
        $autenticado->save();       

        return response()->json([
            'res' => true,          
            'message' => 'sesion finalizada exitosamente',
            'usuario' => $autenticado
        ],200);
        */
    }

    public function delete($id)
    {
        usuarios::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}