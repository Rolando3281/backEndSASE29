<?php


namespace App\Http\Controllers;


use App\llamadasEmergencias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class llamadasEmergenciasController extends Controller
{
    
    public function showAllLLamadasEmergencias()
    {

        /** 
        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }

        */

        $unidades = llamadasEmergencias::with('tipoEmergencia','bomberos','unidades')->get();
        //$unidades = unidades::all();
        //$unidades->tipoUnidad();
        //return response()->json(unidades::all()->tipoUnidad());
        return response()->json($unidades);
    }

    public function showOneLlamadasEmergencias($id)
    {
        //$unidad = unidades::find($id)
        $unidades = llamadasEmergencias::with('tipoEmergencia','bomberos','unidades')->find($id);



        //return response()->json(unidades::find($id));
        return response()->json($unidades);
    }

    public function create(Request $request)
    {
        $author = llamadasEmergencias::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = llamadasEmergencias::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        llamadasEmergencias::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}