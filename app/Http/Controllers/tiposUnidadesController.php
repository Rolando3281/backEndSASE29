<?php


namespace App\Http\Controllers;


use App\tiposUnidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tiposUnidadesController extends Controller
{
    
    public function showAllTipos()
    {

        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }



        return response()->json(tiposUnidades::all());
    }

    public function showOneTipo($id)
    {
        return response()->json(tiposUnidades::find($id));
    }

    public function create(Request $request)
    {
        $author = tiposUnidades::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = tiposUnidades::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        tiposUnidades::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}