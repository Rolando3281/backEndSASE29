<?php


namespace App\Http\Controllers;


use App\tiposEquipos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tiposEquiposController extends Controller
{
    
    public function showAllTipos()
    {

        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }



        return response()->json(tiposEquipos::all());
    }

    public function showOneTipo($id)
    {
        return response()->json(tiposEquipos::find($id));
    }

    public function create(Request $request)
    {
        $author = tiposEquipos::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = tiposEquipos::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        tiposEquipos::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}