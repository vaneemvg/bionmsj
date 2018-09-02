<?php

namespace App\Http\Controllers\admin;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Http\Requests\ClienteRequest;

class AdminClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $clientes = Cliente::all();
        return view('admin.clients.index')->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        $cliente = new Cliente();
        $respuesta = $cliente->guardar($request);
        if ($respuesta) {
            Flash::success("Se ha guardado el cliente " . $cliente->nombre . " exitosamente.");
        } else {
            Flash::error("No se ha podido guardar el cliente.");
        }

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('admin.clients.edit')->with('cliente', $cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, $id)
    {
        $cliente = Cliente::find($id);
        $respuesta = $cliente->editar($request);
        if ($respuesta) {
            Flash::success('El cliente ' . $cliente->id . ' ha sido modificado exitosamente.');
        } else {
            Flash::error("No se ha podido modificar al cliente.");
        }
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        //Validar si se puede eliminar al cliente
        if (count($cliente->users) > 0) {
            Flash::warning('El cliente ' . $cliente->nombre . " no puede ser eliminado porque tiene usuarios asignados.");
        } else {
            $respuesta = $cliente->eliminar();
            if ($respuesta) {
                Flash::success('El cliente ' . $cliente->nombre . ' ha sido eliminado exitosamente.');
            } else {
                Flash::error("No se ha podido eliminar al cliente.");
            }
        }

        return redirect()->route('clientes.index');
    }

    /**
     * Cambia el estado del cliente
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function state($id)
    {
        $cliente = Cliente::find($id);

        if ($cliente->estado == 'ACTIVO') {
            $respuesta = $cliente->desactivar();
            if (count($cliente->users) > 0) {
                //corresponderia desactivar usuarios?
            }
        } else {

            $respuesta = $cliente->activar();

        }

        if ($respuesta) {
            Flash::success('Se ha cambiado el estado del cliente exitosamente.');
        } else {
            Flash::error('No se ha podido cambiar el estado al cliente.');
        }

        return redirect()->route('clientes.index');
    }
}
