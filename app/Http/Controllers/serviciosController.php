<?php


namespace App\Http\Controllers;


use App\servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class serviciosController extends Controller
{
    
    public function showAllServicios()
    {

        /** 
        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }

        */

        $unidades = servicios::with('tipoServicio','bomberos','unidades')->get();
        //$unidades = unidades::all();
        //$unidades->tipoUnidad();
        //return response()->json(unidades::all()->tipoUnidad());
        return response()->json($unidades);
    }

    public function showOneServicio($id)
    {
        //$unidad = unidades::find($id)
        $unidades = servicios::with('tipoServicio','bomberos','unidades')->find($id);



        //return response()->json(unidades::find($id));
        return response()->json($unidades);
    }

    public function create(Request $request)
    {
        $author = servicios::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = servicios::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        servicios::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}