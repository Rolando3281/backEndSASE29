<?php


namespace App\Http\Controllers;


use App\bomberosServicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bomberosServiciosController extends Controller
{
    
    public function showAllBomberosServicios()
    {

        /** 
        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }

        */

        $unidades = bomberosServicios::with('bombero','servicio')->get();
        //$unidades = unidades::all();
        //$unidades->tipoUnidad();
        //return response()->json(unidades::all()->tipoUnidad());
        return response()->json($unidades);
    }

    public function showOneBomberosServicios($id)
    {
        //$unidad = unidades::find($id)
        $unidades = bomberosServicios::with('bombero','servicio')->find($id);



        //return response()->json(unidades::find($id));
        return response()->json($unidades);
    }

    public function create(Request $request)
    {
        $author = bomberosServicios::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = bomberosServicios::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        bomberosServicios::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}