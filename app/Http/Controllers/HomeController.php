<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
        
        /*
            capture de l'auth et de certains elements dans la base de donnée,
            prise de tout produit et des informations sur leur categorie ou leurs
            sous categorie par jointure de tables

        */
        $user = Auth::user();
        $categories = DB::select('SELECT * FROM categories ORDER BY RAND()', [1]);
        $products = DB::select('SELECT * FROM products ORDER BY RAND() LIMIT 0, 8', [1]);

        $products_all= DB::table('categories')
            ->join('sub_categories','categories.id','=','sub_categories.id_category')
            ->join('products','sub_categories.id','=','products.id_sub_category')
            ->select('categories.name_categorys','sub_categories.name_sub_categorys','products.*')
            ->get();

        $sub_categorys = DB::table('categories')
            ->join('sub_categories','categories.id','=','sub_categories.id_category')
            ->select('categories.name_categorys','sub_categories.*')
            ->get();

        //dd($products);
        //dd($user);
        return view('pages/home',compact(
            'user',
            'categories',
            'products',
            'sub_categorys',
            'products_all'
        ));
    }
    public function login()
    {
        return view('pages/login-register');
    }
}
