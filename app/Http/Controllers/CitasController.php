<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Mail\CitasConfirmaMail;
use Illuminate\Support\Facades\Mail;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente_id=session('LoggedUser');
        $citas = Cita::where('cliente_id', $cliente_id)->get();
        return view('admin.citasinicio')->with(compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.citas_crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente_id=session('LoggedUser');
        $cita = new Cita();
        $cita->cliente_id = $cliente_id;
        $cita->mascota = $request->mascota;
        $cita->date = $request->date;
        $cita->hora = $request->hora;
        $cita->seleccion = $request->seleccion;
        $cita->save();
        $details = [
            'mascota' => $request->mascota,
            'date' => $request->date,
            'hora' => $request->hora,
            'seleccion' => $request->seleccion
        ];
        $usuario = Admin::where('id',$cliente_id)->first();
        $correo = $usuario->email;

        // dd($request->seleccion);
        //cambia el correo por la variable $correo
        Mail::to($correo)->send(new CitasConfirmaMail($details));
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cita $cita)
    {
        return view('admin.citas_editar')->with(compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cita $cita)
    {
        $cita->fill($request->input())->saveOrFail();
        return redirect()->route('citas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->route('citas.index');
    }
}
