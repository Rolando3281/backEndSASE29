<?php


namespace App\Http\Controllers;


use App\bombero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bomberosController extends Controller
{
    
    public function showAllBomberos()
    {      
        return response()->json(bombero::all());
    }

    public function showOneBombero($id)
    {
        return response()->json(bombero::find($id));
    }

    public function create(Request $request)
    {
        $author = bombero::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $bombero = bombero::findOrFail($id);
        $bombero->update($request->all());

        return response()->json($bombero, 200);
    }

    public function delete($id)
    {
        bombero::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}