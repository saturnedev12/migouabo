<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        
        $categories = DB::select('SELECT * FROM categories ORDER BY RAND()', [1]);
        $products = DB::select('SELECT * FROM produits ORDER BY RAND() LIMIT 0, 8', [1]);
        $products_all= Produit::all();
        $images = DB::table('images')->get(); 
        $sub_categorys = SousCategorie::all();

        //dd($products_all);
        //dd($user);
        return view('users/pages/home',compact(
            'user',
            'categories',
            'products',
            'sub_categorys',
            'products_all',
            'images'
        ));
    }
    public function login()
    {
        return view('users/pages/login-register');
    }
}
