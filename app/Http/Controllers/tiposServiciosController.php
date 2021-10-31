<?php


namespace App\Http\Controllers;


use App\tiposServicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tiposServiciosController extends Controller
{
    
    public function showAllTipos()
    {

        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }



        return response()->json(tiposServicios::all());
    }

    public function showOneTipo($id)
    {
        return response()->json(tiposServicios::find($id));
    }

    public function create(Request $request)
    {
        $author = tiposServicios::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = tiposServicios::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        tiposServicios::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}