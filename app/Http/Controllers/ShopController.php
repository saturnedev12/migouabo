<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use App\Models\Wishlist;
use App\Models\Categorie;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Models\SousCategorie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Routing\Route;


class ShopController extends Controller
{
    public function index(Request $request)
    {
        //capture de l'auth 
        $user = Auth::user();
        $categories = Categorie::all();;
        $products_all= Produit::all();
        $sub_categorys = SousCategorie::all();
        $id_category = $request->get('id_category');
        // dd($request->input('s'));
        // Récupération du mot saisi par l'utilisateur
        // $search = $request->input('s');
        // if(isset($_GET['cat_s']) && $request->input('s') != null)
        // {
        //     $search = $request->input('s');
        //     $s_cat_id = $_GET['cat_s'];
        // }
        // dd($search, $s_cat_id);

        if (isset($_GET['cat_s']) && $request->input('s') != null)
        {
            $search = $request->input('s');
            $s_cat_id = $_GET['cat_s'];
            if ($s_cat_id == 'all') {
                // $products = Product::where('name','like', "%$search%")->get();
                $products = DB::table('categories')
                            ->select('categories.name as c_name', 'categories.id as c_id' , 'produits.id as p_id', 'produits.name as p_name', 'produits.price as p_price', 'produits.description as p_desc', 'images.name as img_name')
                            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
                            ->join('produits', 'sous_categories.id', '=', 'produits.souscategorie_id')
                            ->join('images', 'images.produit_id', '=', 'produits.id')
                            ->where('produits.name', 'like', "%$search%")
                            ->get();
                // dd($products);
            }
            else {
                // $category = Categories::where('name', $category_name)->get();
                
                $products = DB::table('categories')
                ->select('categories.name as c_name', 'produits.id as p_id', 'produits.name as p_name', 'produits.price as p_price', 'produits.description as p_desc', 'images.name as img_name')
                ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
                ->join('produits', 'sous_categories.id', '=', 'produits.souscategorie_id')
                ->join('images', 'images.produit_id', '=', 'produits.id')
                ->where('categories.id', $s_cat_id)
                ->where('produits.name', 'like', "%$search%")
                ->get();
                // dd($products);
            }
            
            // dd($search);
            return view('users/pages/shop', compact(
                'user',
                'products',
                'categories',
                'products_all',
                'sub_categorys',
                'id_category',
                'search'
            ));
        }
        // else
        // {
        //     return back();
        // }
        // dd('Il nexiste pas');
        return view('users/pages/shop', compact(
            'user',
            'categories',
            'products_all',
            'sub_categorys',
            'id_category',
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
        $categories = Categorie::all();
        $products_all= Produit::all();
        $sub_categorys = SousCategorie::all();
        $produit = Produit::findOrFail($request->get('produit_id'));
        $items = \Cart::getContent();
        // foreach($items as $item){
        //     var_dump($item->associatedModel);
        // }
        // dd($items);
        
        //dd($produit);
        // dd($request->get('produit_id'));
        return view('users/pages/product-detail',compact(
            'user',
            'categories',
            'sub_categorys',
            'products_all',
            'produit',
        ));
    }
    /**
     * 
     */
    public function searchProduct(Request $request)
    {
        $user = Auth::user();
        $categories = Categorie::all();;
        $products_all= Produit::all();
        $sub_categorys = SousCategorie::all();
        $id_category = $request->get('id_category');

        // Récupération du mot saisi par l'utilisateur
        $search = $request->input('s');
        // dd('$search');
        if(isset($_GET['cat'])){

            $s_cat_id = $_GET['cat'];
        }

        if (isset($s_cat_id) and !empty($search) )
        {
            if ($s_cat_id == 'all') {
                // $products = Product::where('name','like', "%$search%")->get();
                $products = DB::table('categories')
                            ->select('categories.name as c_name', 'produits.id as p_id', 'produits.name as p_name', 'produits.price as p_price', 'produits.description as p_desc', 'images.name as img_name')
                            ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
                            ->join('produits', 'sous_categories.id', '=', 'produits.souscategorie_id')
                            ->join('images', 'images.produit_id', '=', 'produits.id')
                            ->where('produits.name', 'like', "%$search%")
                            ->get();
            }
            else {
                // $category = Categories::where('name', $category_name)->get();
                
                $products = DB::table('categories')
                ->select('categories.name as c_name', 'produits.id as p_id', 'produits.name as p_name', 'produits.price as p_price', 'produits.description as p_desc', 'images.name as img_name')
                ->join('sous_categories', 'categories.id', '=', 'sous_categories.categorie_id')
                ->join('produits', 'sous_categories.id', '=', 'produits.souscategorie_id')
                ->join('images', 'images.produit_id', '=', 'produits.id')
                ->where('categories.id', $s_cat_id)
                ->where('produits.name', 'like', "%$search%")
                ->get();
                // dd($products);
            }
            
            // dd($category_id);
        }
        else
        {
            return back();
        }
        return view('shop', compact(
            'user',
            'products',
            'categories',
            'products_all',
            'sub_categorys',
            'id_category',
            'search'
        ));
    }
}
