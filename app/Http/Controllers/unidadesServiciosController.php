<?php


namespace App\Http\Controllers;


use App\unidadesServicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class unidadesServiciosController extends Controller
{
    
    public function showAllUnidadesServicios()
    {

        /** 
        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }

        */

        $unidades = unidadesServicios::with('unidad','servicio')->get();
        //$unidades = unidades::all();
        //$unidades->tipoUnidad();
        //return response()->json(unidades::all()->tipoUnidad());
        return response()->json($unidades);
    }

    public function showOneUnidadesServicios($id)
    {
        //$unidad = unidades::find($id)
        $unidades = unidadesServicios::with('unidad','servicio')->find($id);



        //return response()->json(unidades::find($id));
        return response()->json($unidades);
    }

    public function create(Request $request)
    {
        $author = unidadesServicios::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = unidadesServicios::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        unidadesServicios::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}