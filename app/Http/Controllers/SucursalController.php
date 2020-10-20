<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;
use App\Empleado;
class SucursalController extends Controller
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
        return view('sucursales.create');
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
            'nombre_sucursal' =>'required',
            'nombre_calle' =>'nullable',
            'nombre_colonia' =>'nullable',
            'numero_exterior' =>'nullable',
            'numero_interior' =>'nullable',
            'codigo_postal' =>'nullable',
            'ciudad' =>'nullable',
            'pais' =>'nullable',
        ]);

        
        $sucursal = new Sucursal();
        $sucursal->nombre_sucursal = $validatedData['nombre_sucursal'];
        $sucursal->nombre_calle = $validatedData['nombre_calle'];
        $sucursal->nombre_colonia = $validatedData['nombre_colonia'];
        $sucursal->numero_exterior =$validatedData['numero_exterior'];
        $sucursal->numero_interior = $validatedData['numero_interior'];
        $sucursal->codigo_postal = $validatedData['codigo_postal'];
        $sucursal->ciudad = $validatedData['ciudad'];
        $sucursal->pais =$validatedData['pais'];
        $sucursal->save();

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
    public function edit(Sucursal $sucursal)
    {
        $empleados = $sucursal->empleados;
        return view('sucursales.edit',compact('sucursal','empleados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sucursal $sucursal)
    {
        $validatedData = $request->validate([
            'nombre_sucursal' =>'required',
            'nombre_calle' =>'nullable',
            'nombre_colonia' =>'nullable',
            'numero_exterior' =>'nullable',
            'numero_interior' =>'nullable',
            'codigo_postal' =>'nullable',
            'ciudad' =>'nullable',
            'pais' =>'nullable',
        ]);


        $sucursal->nombre_sucursal = $validatedData['nombre_sucursal'];
        $sucursal->nombre_calle = $validatedData['nombre_calle'];
        $sucursal->nombre_colonia = $validatedData['nombre_colonia'];
        $sucursal->numero_exterior =$validatedData['numero_exterior'];
        $sucursal->numero_interior = $validatedData['numero_interior'];
        $sucursal->codigo_postal = $validatedData['codigo_postal'];
        $sucursal->ciudad = $validatedData['ciudad'];
        $sucursal->pais =$validatedData['pais'];
        $sucursal->save();

        $status="Se actualizo satisfactoriamente";
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
