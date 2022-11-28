<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{

    // Retourne la page Inscription en méthode GET
    
    public function register() {

        return view('register');

    }

    // Retourne la réponse en methode POST de mon formulaire d'Inscription

    public function confirmregister(RegisterRequest $request) {

        $users = User::create($request->validated());

    }
}
