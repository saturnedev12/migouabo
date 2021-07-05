<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Categorie;
use App\Models\SousCategorie;
use App\Models\Produit;

class ApiController extends Controller
{
    //le blog
    public function articles(){
        return articles::all();
    }
    public function article($id){
       return articles::findOrFail($id);
    }
    //les produits
    public function products(){
        return Produit::all();
    }
    public function product($id){
        return Produit::findOrFail($id);
    }
    public function categories(){
        return Categorie::all();
    }
    public function sub_categories(){
        return SousCategorie::all();
    }

}
