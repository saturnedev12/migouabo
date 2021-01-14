<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\SousCategorie;
use Validator, Redirect, Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Cette fonction renvoie sur la page login-register
     */
    public function index()
    {
        $user = Auth::user();
        $categories = Categorie::all();;
        $products_all= Produit::all();
        $sub_categorys = SousCategorie::all();

        return view('users.pages.login-register', compact(
            'user',
            'categories',
            'products_all',
            'sub_categorys'
        ));
    }

    public function registration()
    {
        $user = Auth::user();
        $categories = Categorie::all();;
        $products_all= Produit::all();
        $sub_categorys = SousCategorie::all();

        return view('users.pages.login-register', compact(
            'user',
            'categories',
            'products_all',
            'sub_categorys'
        ));
    }

    public function postLogin(Request $request)
    {
        request()
        ->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials))
            // L'authentification passe 
        {
            return redirect()->intended('users.pages.home');
        }
        return redirect::to('users.pages.login-register');
    }

    public function postRegistration(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        $data = $request->all();
        $check = $this->create($data);
        // return redirect::to('users.pages.home');
        return redirect()->to('users.pages.home');

    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * Fonction de déconnexion
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('users.pages.login-register');
    }
}
