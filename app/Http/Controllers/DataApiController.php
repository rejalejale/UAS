<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataApiController extends Controller
{
    public function index()
    {
        $data = Data::all();
        return response()->json(['message' => 'Success','data' => $data]);
    }

    public function show($id)
    {
        $data = Data::find($id);
        return response()->json(['messagae'=> 'success', 'data' => $data]);
    }

    public function store(Request $request)
    {
        $data = Data::create($request->all());
        return response()->json(['message'=>'success','data'=> $data]);
    }
}
