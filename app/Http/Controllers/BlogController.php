<?php

namespace App\Http\Controllers;

use App\Models\articles;
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
        $articles = articles::paginate(6);
            
        return view('users/pages/blog',compact(
            'user',
            'categories',
            'sub_categorys',
            'products_all',
            'articles',
        ));
    }
    public function article($id)
    {
        $user = Auth::user();
        $categories = Categorie::all();;
        $products_all= Produit::all();
        $sub_categorys = SousCategorie::all();

        $article = articles::findOrFail($id);

        return view('users/pages/blog-detail',compact(
            'user',
            'categories',
            'sub_categorys',
            'products_all',
            'article',
        ));
    }
}
