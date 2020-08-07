<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {

        $datos['clientes'] = Cliente::paginate(5);
        return view('clientes', $datos);
    }


    public function create()
    {
        return view('clientes');
    }

    

    public function store(Request $request)
    {
        $datosCliente= request()->except('_token');

        Cliente::insert($datosCliente);

 
        return redirect('clientes');
        //return response()->json($datosCliente);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $cliente = Cliente::findOrFail($id);

        return view('editarcliente', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCliente= request()->except(['_token', '_method']);
        Cliente::where('id','=', $id)->update($datosCliente);

        $cliente = Cliente::findOrFail($id);
        $cliente->save();
        return redirect('clientes');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::destroy($id);

        return redirect('clientes');
    }
}
