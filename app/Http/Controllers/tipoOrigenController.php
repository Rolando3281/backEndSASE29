<?php


namespace App\Http\Controllers;


use App\tipoOrigen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tipoOrigenController extends Controller
{
    
    public function showAllTipos()
    {

        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }



        return response()->json(tipoOrigen::all());
    }

    public function showOneTipo($id)
    {
        return response()->json(tipoOrigen::find($id));
    }

    public function create(Request $request)
    {
        $author = tipoOrigen::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = tipoOrigen::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        tipoOrigen::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}