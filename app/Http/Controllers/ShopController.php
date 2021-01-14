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
        // $wishlist_count = Wishlist::where('user_id', $user->id)->count();
        // dd($wishlist_count);

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
        return view('users/pages/product-detail',compact(
            'user',
            'categories',
            'sub_categorys',
            'products_all',
            'produit',
        ));
    }
}
