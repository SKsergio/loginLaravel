<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{
    // method for resgister new user 
    /*This a login, but it isn't protected*/
    public function register(Request $request){

        //VALIDATE FIELDS
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|max:6',
            'password_confirmation' => 'required'
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); //para encriptar contrasenia

        $user->save();

        Auth::login($user); //para crear la sesion
        return redirect()->route('contenido'); //redirijir a una nueva pagina
    }
    //method to login
    public function login(Request $request){
        $credenciales = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $remember =($request->has('remember') ? true : false);

        if (Auth::attempt($credenciales, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended('contenido');
        }else{
            return back()->withErrors([
                'email' => 'Las credenciales ingresadas no son correctas'
            ])->onlyInput('email');
        }

    }
    //method to logout
    public function destroy(){

    }
}
