<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

use PhpParser\Node\Expr;

class LoginController extends Controller
{

    // Retourne la page de connexion en méthode GET

    public function login() {

        return view('login');

    }

    // Retourne la réponse en methode POST de mon formulaire de connexion

    public function confirmlogin(Loginrequest $request) {

        $pseudo = $request->input('pseudo');
        $password = $request->input('password');
        $login = Auth::attempt(['pseudo' => $pseudo, 'password' => $password]);

        if($login)
        {
            return redirect('characters')
            ->with('success', 'Connexion reussi ! Vous etes à present connecté.'); // false
        }
    
        return redirect('login')
            ->with('alert', 'Connexion échouée ! Vérifiez votre mot de passe et/ou votre E-mail'); // true

    }
}
