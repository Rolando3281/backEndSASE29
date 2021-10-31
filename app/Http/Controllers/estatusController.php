<?php


namespace App\Http\Controllers;


use App\estatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class estatusController extends Controller
{
    
    public function showAllEstatus()
    {

        if(DB::connection()->getDatabaseName())
            {
                echo "conncted sucessfully to database EXITO!!!!".DB::connection()->getDatabaseName();
            }



        return response()->json(estatus::all());
    }

    public function showOneEstatus($id)
    {
        return response()->json(estatus::find($id));
    }

    public function create(Request $request)
    {
        $author = estatus::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = estatus::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        estatus::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}