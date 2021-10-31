<?php


namespace App\Http\Controllers;


use App\unidadesEmergencias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class unidadesEmergenciasController extends Controller
{
    
    public function showAllUnidadesEmergencias()
    {

        /** 
        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }

        */

        $unidades = unidadesEmergencias::with('unidad','llamada')->get();
        //$unidades = unidades::all();
        //$unidades->tipoUnidad();
        //return response()->json(unidades::all()->tipoUnidad());
        return response()->json($unidades);
    }

    public function showOneUnidadesEmergencias($id)
    {
        //$unidad = unidades::find($id)
        $unidades = unidadesEmergencias::with('unidad','llamada')->find($id);



        //return response()->json(unidades::find($id));
        return response()->json($unidades);
    }

    public function create(Request $request)
    {
        $author = unidadesEmergencias::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = unidadesEmergencias::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        unidadesEmergencias::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}