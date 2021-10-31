<?php


namespace App\Http\Controllers;


use App\herramientas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class herramientasController extends Controller
{
    
    public function showAllHerramientas()
    {

        /** 
        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }

        */

        $unidades = herramientas::with('tipoHerramienta','tipoEquipo','estatus','origen')->get();
        //$unidades = unidades::all();
        //$unidades->tipoUnidad();
        //return response()->json(unidades::all()->tipoUnidad());
        return response()->json($unidades);
    }

    public function showOneHerramientas($id)
    {
        //$unidad = unidades::find($id)
        $unidades = herramientas::with('tipoHerramienta','tipoEquipo','estatus','origen')->find($id);



        //return response()->json(unidades::find($id));
        return response()->json($unidades);
    }

    public function create(Request $request)
    {
        $author = herramientas::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = herramientas::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        herramientas::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}