<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
Use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }
    function save(Request $request){

        //return $request->input();
        //Validacion
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12'
        ]);

        
        //insert data into database
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save){
            return back()->with('success','Nuevo usuario creado exitosamente');
        }else{
            return back()->with('fail', 'Algo salio mal, intentelo de nuevo mas tarde');
        }

    }

    function check(Request $request){
        // return $request->input();
        // Validacion de la request
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('email','=',$request->email)->first();

        if(!$userInfo){
            return back()->with('fail','No se reconoce la direccion email');
        }else{
            //chckeo del password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('admin/dashboard');
            }else{
                return back()->with('fail','Contraseña incorrecta');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }

    function dashboard(){
        $data=['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }

    function settings(){
        $data=['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.settings', $data);
    }
    
    function profile(){
        $data=['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.profile', $data);
    }
    
    function staff(){
        $data=['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('admin.staff', $data);
    }

}
