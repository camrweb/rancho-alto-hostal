<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use App\Models\categoria;
use App\Models\habitacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use PDF;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $habitaciones=Habitacion::all();
        $categorias=Categoria::all();
        $reservas=reservation::all();
        return view ('admin.reservas.index')->with('reservas',$reservas)->with('categorias',$categorias)->with('habitaciones',$habitaciones);
    }


    public function pdf()
    {
        //
        $habitaciones=Habitacion::all();
        $categorias=Categoria::all();
        $reservas=reservation::all();

        $data = [
            'categorias'     => $categorias,
            'habitaciones' => $habitaciones,
            'reservas'  => $reservas
        ];

        $pdf = PDF::loadView('admin.reservas.pdf', $data);
        return $pdf->stream();
        // return view ('admin.reservas.index')->with('reservas',$reservas)->with('categorias',$categorias)->with('habitaciones',$habitaciones);
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
        //
        $reserva = request()->except('_token');
        Log::Debug($request->all());
        $reserva    =  new Reservation();
        $reserva->nombres = $request->nombres;
        $reserva->apellidos = $request->apellidos;
        $reserva->tipo_documento = $request->tipo_documento;
        $reserva->numero_documento = $request->numero_documento;
        $reserva->categoria_name = $request->_categorias;
        $reserva->habitacion_name = $request->_habitaciones;
        // $reserva->person_max = $request->person_max;
        $reserva->check_in = $request->date_1;
        $reserva->check_out = $request->date_2;
        $reserva->precio_total = $request->precio_total;
        
        $reserva->save();
        
        return redirect()->back()
        ->with('info','Se ha realizado la reserva correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $reserva=reservation::find($id);
        $reserva->delete();
        $reservas=reservation::all();
        return redirect('admin/reservas');
    }
}
