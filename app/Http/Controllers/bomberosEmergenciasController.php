<?php


namespace App\Http\Controllers;


use App\bomberosEmergencias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bomberosEmergenciasController extends Controller
{
    
    public function showAllBomberosEmergencias()
    {

        /** 
        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }

        */

        $unidades = bomberosEmergencias::with('bombero','llamada')->get();
        //$unidades = unidades::all();
        //$unidades->tipoUnidad();
        //return response()->json(unidades::all()->tipoUnidad());
        return response()->json($unidades);
    }

    public function showOneBomberosEmergencias($id)
    {
        //$unidad = unidades::find($id)
        $unidades = bomberosEmergencias::with('bombero','llamada')->find($id);



        //return response()->json(unidades::find($id));
        return response()->json($unidades);
    }

    public function create(Request $request)
    {
        $author = bomberosEmergencias::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = bomberosEmergencias::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        bomberosEmergencias::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}