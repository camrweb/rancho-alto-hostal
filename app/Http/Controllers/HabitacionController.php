<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use App\Models\Categoria;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PDF;

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
        Log::Debug($name);
        Log::Debug($categoria);
        $habitaciones = Habitacion::where('categoria_id', $categoria->id)->get();
        return view('admin.habitaciones.index')->with('categoria', $name)->with('habitaciones', $habitaciones);
    }

    public function pdf($name)
    {
        $categoria = Categoria::where('name', $name)->first();
        $habitaciones = Habitacion::where('categoria_id', $categoria->id)->get();
        $pdf = PDF::loadView('admin.habitaciones.pdf', ['categoria'=>$categoria],['habitaciones'=>$habitaciones]);
        return $pdf->stream();
        // return $pdf->download('datos.pdf');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return view('admin.habitaciones.pdf')->with('categoria', $categoria)->with('habitaciones', $habitaciones);
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

        $campos=[
            'nombre'=>'required|string|max:100',
            'description'=>'required|string|max:100',
            'person_max'=>'required|string|max:100',
            'price'=>'required|string|max:100',
            'image'=>'required|max:10000|mimes:jpeg,png,jpg'
        ];

        $mensaje=[
            'nombre.required'=>'El nombre es requerido',
            'description.required'=>'La Descripcion es requerida',
            'person_max.required'=>'Las personas maximas son requeridas',
            'price.required'=>'El precio es requerido',
            'image.required'=>'La imagen es requerida'
        ];

        $this->validate($request,$campos,$mensaje);

        $category = Categoria::where('name', $categoria)->first();
        $habitacion = new Habitacion();
        $habitacion->name = $request->nombre;
        $habitacion->description = $request->description;
        $habitacion['person-max'] = $request->person_max;
        $habitacion->price = $request->price;
        if($request->hasFile('image')){
            $habitacion->foto = $request->file('image')->store('uploads','public');
        }
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
    public function edit($id)
    {
        $habitacion=Habitacion::find($id);
        $categoria=Categoria::find($habitacion->categoria_id);
        return view('admin.habitaciones.edit')->with('categoria', $categoria)->with('habitacion', $habitacion);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Habitacion  $habitacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $campos=[
            'nombre'=>'required|string|max:100',
            'description'=>'required|string|max:100',
            'person_max'=>'required|string|max:100',
            'price'=>'required|string|max:100'
        ];

        $mensaje=[
            'nombre.required'=>'El nombre es requerido',
            'description.required'=>'La Descripcion es requerida',
            'person_max.required'=>'Las personas maximas son requeridas',
            'price.required'=>'El precio es requerido'
        ];

        if($request->hasFile('image')){
            $campos=['image'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['image.required'=>'La imagen es requerida'];
        }

        $this->validate($request,$campos,$mensaje);

        $habitacion = Habitacion::find($id);
        $habitacion->name = $request->nombre;
        $habitacion->description = $request->description;
        $habitacion['person-max'] = $request->person_max;
        $habitacion->price = $request->price;
        if($request->hasFile('image')){
            Storage::delete('public/'.$habitacion->foto);
            $habitacion->foto = $request->file('image')->store('uploads','public');
        }
        $habitacion->save();

        return redirect()->back()->with('succes','Actualizado con exito!');
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
        if(Storage::delete('public/'.$habitacion->foto)){
            $habitacion->delete($id);
        }
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
