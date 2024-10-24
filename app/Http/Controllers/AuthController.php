<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\registerRequestForm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register() {
        return view("auth.register");
    }

    public function handleRegister(registerRequestForm $request) {
         User::query()->create($request->validated());
         return redirect()->route("login")->with("success", "Inscription reussi");
    }

    public function login() {
        return view("auth.login");
    }

    public function handleLogin(LoginFormRequest $request) {
        if(Auth::attempt($request->validated())) {
            session()->regenerate();
            return redirect()->route("product.index")->with("success", "Connexion Ok");
        }
        return back()->withInput()->with("error", "identifiants invalid");
    }


    public function logout() {
        Auth::logout();
        return redirect()->route("product.index")->with("success", "DeConnexion Ok");

    }
}
