<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SousCategorie;
use App\Models\Produit;

class ContactController extends Controller
{
    public function index(){
        $user = Auth::user();
        $categories = DB::select('SELECT * FROM categories ORDER BY RAND()', [1]);
        $products = DB::select('SELECT * FROM produits ORDER BY RAND() LIMIT 0, 8', [1]);
        $products_all= Produit::all();
        $images = DB::table('images')->get(); 
        $sub_categorys = SousCategorie::all();
        return view('users/pages/contact',compact(
            'user',
            'categories',
            'sub_categorys',
            'products_all',
            'products',
            'images'
        ));
    }
}
