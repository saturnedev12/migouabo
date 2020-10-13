<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
       
        /*
            User::all(); recuperer tout les utilisateur
            Auth::user(); recuperer l'auth courant
            
         */
        $user = Auth::user();
        //dd($user);
        return view('pages/home',compact(
            'user'
        ));
    }
    public function login()
    {
        return view('pages/login-register');
    }
}
