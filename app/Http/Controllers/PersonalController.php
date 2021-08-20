<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personal;
use App\Models\Personal as ModelsPersonal;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Metodo GET
    public function index()
    {
        $personal = Personal::all();
        return response()->json(['personal'=>$personal], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personal = new Personal();
        $personal->cedula = $request->cedula;
        $personal->nombre = $request->nombre;
        $personal->apellido = $request->apellido;
        $personal->direccion = $request->direccion;
        $personal->cargo = $request->cargo;
        $personal->sede = $request->sede;

        $personal->save();
        return response()->json(['message'=>"Trabajador agregado correctamente", "data" => $personal], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal = Personal::find($id);
        return response()->json(['personal'=>$personal], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $personal = Personal::findOrFail($request->id);
        $personal->cedula = $request->cedula;
        $personal->nombre = $request->nombre;
        $personal->apellido = $request->apellido;
        $personal->direccion = $request->direccion;
        $personal->cargo = $request->cargo;
        $personal->sede = $request->sede;

        $personal->save();
        return $personal;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $personal = Personal::destroy($request->id);
        return $personal;
    }
}
