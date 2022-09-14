<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Habitacion;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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
        return $pdf->stream();
        // return $pdf->download('usuarios.pdf');
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

    public function userdetails(){

        $categorias = Categoria::all();
        $habitaciones = Habitacion::all();
        return view ('perfil_user.index')->with('categorias', $categorias)->with('habitaciones',$habitaciones);
    }

    public function userdetailsupdate(Request $request){

        $categorias = Categoria::all();
        $habitaciones = Habitacion::all();
        $user = User::find(auth()->id());
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();

        return back()->with('message', 'Datos actualizado correctamente');
    }

    public function userpasswordupdate(Request $request){
        $user = User::find(auth()->id());
        $userpassword = $user->password;

        $request->old_password !="";
            $newpassword = $request->password;
            $confirmpassword = $request->password_confirmation;


            //verifico si la contraseña es igual a la del usuario logueado
            if(Hash::check($request->old_password, $userpassword)){

                if($newpassword == $confirmpassword){

                    if(strlen($newpassword) >= 8){
                        $user->password = Hash::make($request->password);
                        $sqlBD = BD::table('user')
                                ->where('id', $user->id);
                        $userpassword->save();
                        
                        
                    }else{
                        
                    }

                }else{
                    
                }

            }else{
                
            }
            return response()->json($userpassword);
        // return redirect()->back()->with('updatepassword','La contraseña fue actualizada correctamente');
    }
}
