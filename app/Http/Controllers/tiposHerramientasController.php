<?php


namespace App\Http\Controllers;


use App\tiposHerramientas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tiposHerramientasController extends Controller
{
    
    public function showAllTipos()
    {

        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }



        return response()->json(tiposHerramientas::all());
    }

    public function showOneTipo($id)
    {
        return response()->json(tiposHerramientas::find($id));
    }

    public function create(Request $request)
    {
        $author = tiposHerramientas::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = tiposHerramientas::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        tiposHerramientas::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}