<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        $categoria = Categoria::where('name', $name)->first();
        $habitaciones = Habitacion::where('categoria_id', $categoria->id)->get();
        return view('admin.habitaciones.index')->with('categoria', $name)->with('habitaciones', $habitaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($categoria)
    {
        //
        return view('admin.habitaciones.create')->with('categoria', $categoria);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $categoria)
    {
        $category = Categoria::where('name', $categoria)->first();
        $habitacion = new Habitacion();
        $habitacion->name = $request->nombre;
        $habitacion->description = $request->description;
        $habitacion['person-max'] = $request->person_max;
        $habitacion->price = $request->price;
        $habitacion->categoria_id = $category->id;
        $habitacion->save();
        return redirect()->route('habitaciones.show', $categoria);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function show(Habitacion $habitacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Habitacion $habitacion, $categoria)
    {
        return view('admin.habitaciones.edit')->with('habitacion', $habitacion)->with('categoria', $categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habitacion $habitacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $habitacion=Habitacion::find($id);
        $habitacion->delete();
        $habitaciones=Habitacion::all();
        return redirect()->back();
    }

    public function getByCategory($categoria)
    {
        $habitaciones = DB::table('habitacions')->where('categoria_id', $categoria)->get();
        return response()->json([
            'success' => true,
            'data' => $habitaciones
        ]);
    }

    public function getRoomData($room)
    {
        $habitacion = DB::table('habitacions')->where('name', $room)->get();
        return response()->json([
            'success' => true,
            'data' => $habitacion
        ]);
    }
}
