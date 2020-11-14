<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\SousCategorie;
use App\Models\Produit;

class BlogController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $categories = Categorie::all();;
        $products_all= Produit::all();
        $sub_categorys = SousCategorie::all();
            
        return view('users/pages/blog',compact(
            'user',
            'categories',
            'sub_categorys',
            'products_all',
            
        ));
    }
    public function blog()
    {
        $user = Auth::user();
        $categories = Categorie::all();;
        $products_all= Produit::all();
        $sub_categorys = SousCategorie::all();

        return view('users/pages/blog-detail',compact(
            'user',
            'categories',
            'sub_categorys',
            'products_all',
            
        ));
    }
}
