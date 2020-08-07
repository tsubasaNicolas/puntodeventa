<?php

namespace App\Http\Controllers;

use App\Venta;
use App\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
       // $nombre = $request->get('inputBuscar');
     //  $producto = Producto::get();
     
       //return view('ventas', compact('producto'));     
       $datos['productos'] = Producto::paginate(20);
        
       return view('ventas', $datos);     
    }

    public function buscador(Request $request)
    {    
       $nombre = $request->get('inputBuscar');

        $producto = Producto::where('descripcion', 'like', "%".$nombre."%")->take(3)->get();
       
        return view('paginas', compact('producto'));     
       
    }

  

    public function create()
    {
        return view('ventas') ; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
    }

}
