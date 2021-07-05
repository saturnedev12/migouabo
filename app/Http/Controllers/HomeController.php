<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Categorie;
use App\Models\SousCategorie;
use App\Models\Produit;



class HomeController extends Controller
{
    public function index(){
        /*
            User::all(); recuperer tout les utilisateur
            Auth::user(); recuperer l'auth courant
          */    
        
        /*
            capture de l'auth et de certains elements dans la base de donnée,
            prise de tout produit et des informations sur leur categorie ou leurs
            sous categorie par jointure de tables

        */
        $user = Auth::user();
        
        $categories = Categorie::all();;
        $products_all= Produit::all();
        $sub_categorys = SousCategorie::all();
        //dd($products_all);
        //dd($user);
        // dd($products_all);
        return view('users/pages/home',compact(
            'user',
            'categories',
            'sub_categorys',
            'products_all',          
        ));

    }
    public function login()
    {
        return view('users/pages/login-register');
    }
}
