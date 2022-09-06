<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Habitacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PDF;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias=Categoria::all();
        return view ('admin.categorias.index')->with('categorias',$categorias);
    }


    public function pdf(Categoria $categoria)
    {
        $categorias=Categoria::all();
        $pdf = PDF::loadView('admin.categorias.pdf', ['categorias'=>$categorias]);
        PDF::setOption(['dpi' =>60]);
        // return $pdf->stream();
        return $pdf->download('datos.pdf');
        // $pdf->loadHTML('<h1>Test</h1>');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $campos=[
            'nombre'=>'required|string|max:100'
        ];

        $mensaje=[
            'nombre.required'=>'El nombre es requerido'
        ];

        $this->validate($request,$campos,$mensaje);

        $categoria = new Categoria();
        $categoria->name = $request->nombre;
        $categoria->save();
        return redirect()->route('categorias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $categoria=Categoria::all();
        return view('admin.categorias.edit')->with('categoria', $categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $categoria = Categoria::find($id);
        $categoria->name = $request->nombre;
        $categoria->save();

        return redirect()->back()->with('succes','Actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria=Categoria::find($id);
        $categoria->delete();
        $categorias=Categoria::all();
        return redirect('admin/categorias');
    }

    public function getCategorias()
    {
        $categorias=Categoria::all();
        return $categorias;
    }
}
