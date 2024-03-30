<?php

namespace App\Http\Controllers;

use App\Models\registroHora;
use Illuminate\Http\Request;

class RegistroHoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['registroHora']=registroHora::paginate(1000);
        return view('registroHora.mostrar',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('registroHora.registro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'id_reserva'            => 'required|string|max:100',
            'rut'                   => 'required|string|max:100',
            'motivo_reserva'        => 'required|string|max:1000',
            'fecha'                 => 'required|string|max:99999',
            'hora'                  => 'required|string|max:99999',
            'auto_marca'            => 'required|string|max:999999999',
            'auto_modelo'           => 'required|string|max:999999',
            'auto_año'              => 'required|string|max:99999',
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido',
        ];

        $this->validate($request, $campos, $mensaje);
        $datosRegistroHora = request()->except('_token');
        registroHora::insert($datosRegistroHora);
        return redirect('/')->with('mensaje','Registro actualizado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(registroHora $registroHora)
    {
        //
        return $registroHora;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $registroHora = registroHora::findOrFail($id);
        return view('registroHora.editar', compact('registroHora'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'id_reserva'            => 'required|string|max:100',
            'rut'                   => 'required|string|max:100',
            'motivo_reserva'        => 'required|string|max:1000',
            'fecha'                 => 'required|string|max:99999',
            'hora'                  => 'required|string|max:99999',
            'auto_marca'            => 'required|string|max:999999999',
            'auto_modelo'           => 'required|string|max:999999',
            'auto_año'              => 'required|string|max:99999',
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido',
        ];

        $this->validate($request, $campos, $mensaje);

        $datosRegistroHora = request()->except(['_token','_method']);

        registroHora::where('id','=',$id)->update($datosRegistroHora);
        $registroHora=registroHora::findOrFail($id);
        return redirect('/')->with('mensaje','Registro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $registroHora=registroHora::findOrFail($id);
        registroHora::destroy($id);
        return redirect('/')->with('mensaje','Producto borrado correctamente');
    }

    public function mostrarVistaEliminar()
    {
        $datos['registroHora']=registroHora::paginate(1000);
        return view('registroHora.eliminar',$datos);
    }

    public function mostrarVistaEditar()
    {
        $datos['registroHora']=registroHora::paginate(1000);
        return view('registroHora.mostrarEditar',$datos); 
    }
}
