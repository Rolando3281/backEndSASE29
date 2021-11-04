<?php


namespace App\Http\Controllers;


use App\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $author = usuarios::create($request->all());

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
        $name = $request->input('usuario');
        $password = $request->input('password');

        $bombero = usuarios::where('usuario','=',$name)->firstOrFail();
        
        if($bombero!=null){
            if($bombero->password==$password){
                return response()->json($bombero, 200);
            }
            else{
                return response()->json("ERROR AUTENTICACION", 404);
            }

        }
        else{
            return response()->json("ERROR AUTENTICACION", 404);
        }

        

        
    }

    public function delete($id)
    {
        usuarios::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}