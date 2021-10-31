<?php


namespace App\Http\Controllers;


use App\unidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class unidadesController extends Controller
{
    
    public function showAllUnidades()
    {

        /** 
        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }

        */

        $unidades = unidades::with('tipoUnidad','estatus','origen')->get();
        //$unidades = unidades::all();
        //$unidades->tipoUnidad();
        //return response()->json(unidades::all()->tipoUnidad());
        return response()->json($unidades);
    }

    public function showOneUnidades($id)
    {
        //$unidad = unidades::find($id)
        $unidades = unidades::with('tipoUnidad','estatus','origen')->find($id);



        //return response()->json(unidades::find($id));
        return response()->json($unidades);
    }

    public function create(Request $request)
    {
        $author = unidades::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = unidades::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        unidades::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}