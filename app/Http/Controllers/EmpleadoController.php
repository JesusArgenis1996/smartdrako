<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Sucursal;
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursales = Sucursal::all();
        return view('empleados.create',compact('sucursales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_empleado' =>'required',
            'RFC' =>'required',
            'puesto' =>'nullable',
            'sucursal_id' =>'required',
        ]);

        
        $empleado = new Empleado();
        $empleado->nombre_empleado = $validatedData['nombre_empleado'];
        $empleado->RFC = $validatedData['RFC'];
        $empleado->puesto = $validatedData['puesto'];
        $empleado->sucursal_id = $validatedData['sucursal_id'];
        $empleado->save();

        $status="Se registro satisfactoriamente";
        return back()->with(compact('status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        $sucursales = Sucursal::all();
        return view('empleados.edit',compact('empleado','sucursales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $validatedData = $request->validate([
            'nombre_empleado' =>'required',
            'RFC' =>'required',
            'puesto' =>'nullable',
            'sucursal_id' =>'required',
        ]);

        
        
        $empleado->nombre_empleado = $validatedData['nombre_empleado'];
        $empleado->RFC = $validatedData['RFC'];
        $empleado->puesto = $validatedData['puesto'];
        $empleado->sucursal_id = $validatedData['sucursal_id'];
        $empleado->save();

        $status="Se registro satisfactoriamente";
        return back()->with(compact('status'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
