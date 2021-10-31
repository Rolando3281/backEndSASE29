<?php


namespace App\Http\Controllers;


use App\propositosInsumos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class propositosInsumosController extends Controller
{
    
    public function showAllInsumos()
    {

        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }



        return response()->json(propositosInsumos::all());
    }

    public function showOneInsumo($id)
    {
        return response()->json(propositosInsumos::find($id));
    }

    public function create(Request $request)
    {
        $author = propositosInsumos::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = propositosInsumos::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        propositosInsumos::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}