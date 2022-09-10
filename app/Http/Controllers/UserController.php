<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use PDF;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view ('admin.usuarios.index', ['users' => $users]);
    }



    public function pdf()
    {
        $users = User::all();
        $pdf = PDF::loadView('admin.usuarios.pdf',['users'=>$users]);
        // return $pdf->stream();
        return $pdf->download('usuarios.pdf');
        // return view ('admin.usuarios.index', ['users' => $users]);
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
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::findOrFail($id);
        return view('admin.usuarios.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        $user->name = $request->nombre;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();

        return redirect()->back()->with('succes','Actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return back()->with('succes', 'Usuario eliminado exitosamente!');
    }
}
