<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(request $request){

        $email = $request->input('email');
        $password = $request->input('password');

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $validator->setCustomMessages([
            'email.required' => 'El campo "email" es obligatorio.',
            'email.email' => 'El campo "email" debe ser una dirección de correo electrónico válida.',
            'password.required' => 'El campo "contraseña" es obligatorio.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

            // Implementar la lógica de autenticación:
    if (Auth::attempt(['email' => $email, 'password' => $password])) {
        // Inicio de sesión exitoso:
        // Redirige a la página principal o al dashboard.
        return redirect()->intended('/dashboard');
    } else {
        // Inicio de sesión fallido:
        // Devuelve un mensaje de error.
        return redirect()->back()->with('error', 'Credenciales incorrectas');
    }

    }

    public function postLogin(Request $request){
        $token = $request->session()->token();
        $token = csrf_token();
        $email = $request->input('email');
        dd($token, $email);
        $this->validate($request)[""] = "";
    }
}
