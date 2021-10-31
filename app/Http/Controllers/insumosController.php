<?php


namespace App\Http\Controllers;


use App\insumos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class insumosController extends Controller
{
    
    public function showAllInsumos()
    {

        /** 
        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }

        */

        $unidades = insumos::with('tipoInsumo','propositoInsumo')->get();
        //$unidades = unidades::all();
        //$unidades->tipoUnidad();
        //return response()->json(unidades::all()->tipoUnidad());
        return response()->json($unidades);
    }

    public function showOneInsumo($id)
    {
        //$unidad = unidades::find($id)
        $unidades = insumos::with('tipoInsumo','propositoInsumo')->find($id);



        //return response()->json(unidades::find($id));
        return response()->json($unidades);
    }

    public function create(Request $request)
    {
        $author = insumos::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = insumos::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        insumos::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}