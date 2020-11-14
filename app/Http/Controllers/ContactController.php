<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\SousCategorie;
use App\Models\Produit;

class ContactController extends Controller
{
    public function index(){
        $user = Auth::user();
        $categories = Categorie::all();;
        $products_all= Produit::all();
        $sub_categorys = SousCategorie::all();
        return view('users/pages/contact',compact(
            'user',
            'categories',
            'sub_categorys',
            'products_all',
           
        ));
    }
}
