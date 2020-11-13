<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Route;
use App\Models\Produit;
use App\Models\SousCategorie;



class ShopController extends Controller
{
    public function index(Request $request)
    {
        //capture de l'auth 
        $user = Auth::user();
        $categories = DB::select('SELECT * FROM categories', [1]);


        $sub_categorys = DB::table('categories')
            ->join('sous_categories','categories.id','=','sous_categories.categorie_id')
            ->select('categories.name AS name_categorys','sous_categories.*')
            ->get();

        //prise de sous categories et de information sur leurs categorie et sous-categorie
       /*$products= DB::table('categories')
            ->join('sub_categories','categories.id','=','sub_categories.id_category')
            ->join('products','sub_categories.id','=','products.id_sub_category')
            ->select('categories.name_categorys','sub_categories.id_category','products.*')
            ->inRandomOrder()
            ->get();*/
        $products_all= DB::table('categories')
            ->join('sous_categories','categories.id','=','sous_categories.categorie_id')
            ->join('produits','sous_categories.id','=','produits.souscategorie_id')
            ->select('categories.name AS name_categorys','sous_categories.name AS name_sub_categorys','produits.*')
            ->get();

        $images = DB::table('produits')
            ->join('images','images.produit_id','=','produits.id')
            ->select('images.*','produits.name AS name_products')
            ->get();  

        $products = Produit::all();
        //dd($products);
        //capture des parametre GET[] de des routes    
        $id_category = $request->get('id_category');
        //dd($products);
        return view('users/pages/shop',compact(
            'user',
            'categories',
            'id_category',
            'sub_categorys',
            'products',
            'products_all',
            'images'

        ));
    }
    public function shop_sub(Request $request)
    {
                   //capture de l'auth 
        $user = Auth::user();
        $categories = DB::select('SELECT * FROM categories ORDER BY RAND()', [1]);
        $products = Produit::all();
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
            'products',
            'images'
        ));
    }
    public function product(Request $request)
    {
        $user = Auth::user();
        $categories = DB::select('SELECT * FROM categories ORDER BY RAND()', [1]);
        $products = DB::select('SELECT * FROM produits ORDER BY RAND() LIMIT 0, 8', [1]);
        $products_all= Produit::all();
        $images = DB::table('images')->get(); 
        $sub_categorys = SousCategorie::all();

            $id_product = $request->get('id_product');   
        return view('users/pages/product-detail',compact(
            'user',
            'categories',
            'sub_categorys',
            'products_all',
            'id_product',
            'product_selected',
            'products'
        ));
    }
}
