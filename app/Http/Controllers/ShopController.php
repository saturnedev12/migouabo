<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Route;
use App\Models\Categorie;
use App\Models\SousCategorie;
use App\Models\Produit;


class ShopController extends Controller
{
    public function index(Request $request)
    {
        //capture de l'auth 
        $user = Auth::user();
        $categories = Categorie::all();;
        $products_all= Produit::all();
        $sub_categorys = SousCategorie::all();

        //capture des parametre GET[] de des routes    
        $id_category = $request->get('id_category');
        //dd($products);
        return view('users/pages/shop',compact(
            'user',
            'categories',
            'id_category',
            'sub_categorys',
            'products_all',
            

        ));
    }
    public function shop_sub(Request $request)
    {
                   //capture de l'auth 
        $user = Auth::user();
        $categories = DB::select('SELECT * FROM categories ORDER BY RAND()', [1]);
        $products_all= Produit::all();
        $images = DB::table('images')->get(); 
        $sub_categorys = SousCategorie::all();

        //capture des parametre GET[] de des routes    
        $name_sub_category = $request->get('sub_category');
        //dd($name_sub_category);
        //dd($products);
        return view('users/pages/shop_sub',compact(
            'user',
            'categories',
            'name_sub_category',
            'sub_categorys',
            'products_all',
            
        ));
    }
    public function product(Request $request)
    {
       
        $user = Auth::user();
        $categories = Categorie::all();;
        $products_all= Produit::all();
        $sub_categorys = SousCategorie::all();
        $produit = Produit::findOrFail($request->get('produit_id'));
        //dd($produit);
        return view('users/pages/product-detail',compact(
            'user',
            'categories',
            'sub_categorys',
            'products_all',
            'produit',
        ));
    }
}
