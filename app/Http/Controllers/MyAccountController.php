<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\SousCategorie;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // dd($user->name);
        $categories = Categorie::all();;
        $products_all= Produit::all();
        $sub_categorys = SousCategorie::all();
        return view('users.auth.my-account', compact(
            'user',
            'categories',
            'products_all',
            'sub_categorys'
        ));
    }
}
