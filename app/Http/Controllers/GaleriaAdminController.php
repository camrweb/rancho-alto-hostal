<?php

namespace App\Http\Controllers;

use App\Models\GaleriaAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Console;

class GaleriaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galerias = GaleriaAdmin::all();
        return view('admin.galeriaadmin.index')->with('galerias', $galerias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.galeriaadmin.create');
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
            'image'=>'required|max:10000|mimes:jpeg,png,jpg'
        ];

        $mensaje=[
            'image.required'=>'La imagen es requerida'
        ];

        $this->validate($request,$campos,$mensaje);

        $galeria = request()->except('_token');
        
        if($request->hasFile('image')){
            $galeria['image'] = $request->file('image')->store('uploads','public');
        }

        GaleriaAdmin::insert($galeria);

        // return response()->json($imagen);
        return redirect()->route('galeria.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GaleriaAdmin  $galeriaAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(GaleriaAdmin $galeriaAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GaleriaAdmin  $galeriaAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(GaleriaAdmin $id)
    {
        //
        $galeria = GaleriaAdmin::find($id);

        return view('admin.galeriaadmin.edit')->with('galeria',$galeria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GaleriaAdmin  $galeriaAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $campos=[
        ];

        $mensaje=[
        ];

        if($request->hasFile('image')){
            $campos=['image'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['image.required'=>'La imagen es requerida'];
        }

        $this->validate($request,$campos,$mensaje);


        $galeria=request()->except(['_token','_method']);
        $galeria = GaleriaAdmin::find($id);

        if($request->hasFile('image')){
            Storage::delete('public/'.$galeria->image);
            Log::debug($galeria);

            $galeria['image'] = $request->file('image')->store('uploads','public');
        }
        $galeria->save();
        
        return redirect()->route('galeria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GaleriaAdmin  $galeriaAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $galeria=GaleriaAdmin::find($id);
        if(Storage::delete('public/'.$galeria->image));{
            $galeria->delete($id);
        }
        $galerias=GaleriaAdmin::all();
        return redirect()->back();
    }
}
