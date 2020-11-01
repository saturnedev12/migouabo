<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Route;
class ShopController extends Controller
{
    public function index(Request $request)
    {
        //capture de l'auth 
        $user = Auth::user();
        $categories = DB::select('SELECT * FROM categories', [1]);
        //$products = DB::select('SELECT * FROM products ORDER BY RAND() LIMIT 0, 12 ', [1]);
        //$products = DB::select('SELECT * FROM products', [1]);

        $sub_categorys = DB::table('categories')
            ->join('sub_categories','categories.id','=','sub_categories.id_category')
            ->select('categories.name_categorys','sub_categories.*')
            ->get();

        //prise de sous categories et de information sur leurs categorie et sous-categorie
        $products= DB::table('categories')
            ->join('sub_categories','categories.id','=','sub_categories.id_category')
            ->join('products','sub_categories.id','=','products.id_sub_category')
            ->select('categories.name_categorys','sub_categories.id_category','products.*')
            ->inRandomOrder()
            ->get();
        $products_all= DB::table('categories')
            ->join('sub_categories','categories.id','=','sub_categories.id_category')
            ->join('products','sub_categories.id','=','products.id_sub_category')
            ->select('categories.name_categorys','sub_categories.name_sub_categorys','products.*')
            ->get();
        //capture des parametre GET[] de des routes    
        $id_category = $request->get('id_category');
        //dd($products);
        return view('users/pages/shop',compact(
            'user',
            'categories',
            'id_category',
            'sub_categorys',
            'products_all',
            'products'

        ));
    }
    public function shop_sub(Request $request)
    {
                   //capture de l'auth 
        $user = Auth::user();
        $categories = DB::select('SELECT * FROM categories', [1]);
        //$products = DB::select('SELECT * FROM products ORDER BY RAND() LIMIT 0, 12 ', [1]);
        //$products = DB::select('SELECT * FROM products', [1]);

        $sub_categorys = DB::table('categories')
            ->join('sub_categories','categories.id','=','sub_categories.id_category')
            ->select('categories.name_categorys','sub_categories.*')
            ->get();

        //prise de sous categories et de information sur leurs categorie et sous-categorie
        $products= DB::table('categories')
            ->join('sub_categories','categories.id','=','sub_categories.id_category')
            ->join('products','sub_categories.id','=','products.id_sub_category')
            ->select('categories.name_categorys','sub_categories.id_category','sub_categories.name_sub_categorys','products.*')
            ->inRandomOrder()
            ->get();
        $products_all= DB::table('categories')
            ->join('sub_categories','categories.id','=','sub_categories.id_category')
            ->join('products','sub_categories.id','=','products.id_sub_category')
            ->select('categories.name_categorys','sub_categories.name_sub_categorys','products.*')
            ->get();
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
            'products'
        ));
    }
    public function product(Request $request)
    {
        $user = Auth::user();
        $categories = DB::select('SELECT * FROM categories ORDER BY RAND()', [1]);
        $products = DB::select('SELECT * FROM products ORDER BY RAND() LIMIT 0, 8', [1]);
        $sub_categorys = DB::table('categories')
            ->join('sub_categories','categories.id','=','sub_categories.id_category')
            ->select('categories.name_categorys','sub_categories.*')
            ->get();
        $products_all= DB::table('categories')
            ->join('sub_categories','categories.id','=','sub_categories.id_category')
            ->join('products','sub_categories.id','=','products.id_sub_category')
            ->select('categories.name_categorys','sub_categories.name_sub_categorys','products.*')
            ->get();
        $id_product = $request->get('id_product');   
        //$product_selected = DB::table('products')->find($id_product); //DB::select("SELECT * FROM products WHERE products.ID = ?", [$id_product]);
        
        $product_selected = DB::table('categories')
            ->join('sub_categories','categories.id','=','sub_categories.id_category')
            ->join('products','sub_categories.id','=','products.id_sub_category')
            ->select('categories.name_categorys','sub_categories.name_sub_categorys','products.*')
            ->where('products.id',$id_product)
            ->get();
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
