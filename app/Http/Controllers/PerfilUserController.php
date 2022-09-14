<?php

namespace App\Http\Controllers;

use App\Models\PerfilUser;
use App\Models\Categoria;
use App\Models\Habitacion;
use App\Models\User;
use Illuminate\Http\Request;

class PerfilUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        $habitaciones = Habitacion::all();
        return view ('perfil_user.index')->with('categorias', $categorias)->with('habitaciones',$habitaciones);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PerfilUser  $perfilUser
     * @return \Illuminate\Http\Response
     */
    public function show(PerfilUser $perfilUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PerfilUser  $perfilUser
     * @return \Illuminate\Http\Response
     */
    public function edit(PerfilUser $perfilUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PerfilUser  $perfilUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerfilUser $perfilUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PerfilUser  $perfilUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerfilUser $perfilUser)
    {
        //
    }
}
