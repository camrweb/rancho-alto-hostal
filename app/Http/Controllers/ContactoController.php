<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\Categoria;
use App\Models\Habitacion;
use App\Models\GaleriaAdmin;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $correos = Contacto::all();
        return view ('admin.emails.index')->with('correos', $correos);
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
        $contacto = new Contacto();
        $contacto->name = $request->name;
        $contacto->email = $request->email;
        $contacto->telefono = $request->telefono;
        $contacto->message = $request->message;

        $contacto->save();

        // return response()->json($contacto);
        return redirect()->back()->with('info','Formulario enviado correctamente, nos pondremos en contacto contigo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $contacto=Contacto::find($id);
        $contacto->delete();
        $contacto=Contacto::all();
        return redirect()->back();
    }
}
