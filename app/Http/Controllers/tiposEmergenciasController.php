<?php


namespace App\Http\Controllers;


use App\tiposEmergencias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tiposEmergenciasController extends Controller
{
    
    public function showAllTipos()
    {

        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }



        return response()->json(tiposEmergencias::all());
    }

    public function showOneTipo($id)
    {
        return response()->json(tiposEmergencias::find($id));
    }

    public function create(Request $request)
    {
        $author = tiposEmergencias::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = tiposEmergencias::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        tiposEmergencias::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}