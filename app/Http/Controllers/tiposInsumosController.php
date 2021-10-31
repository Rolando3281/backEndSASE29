<?php


namespace App\Http\Controllers;


use App\tiposInsumos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tiposInsumosController extends Controller
{
    
    public function showAllTipos()
    {

        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }



        return response()->json(tiposInsumos::all());
    }

    public function showOneTipo($id)
    {
        return response()->json(tiposInsumos::find($id));
    }

    public function create(Request $request)
    {
        $author = tiposInsumos::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = tiposInsumos::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        tiposInsumos::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}