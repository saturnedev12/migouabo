<?php

namespace App\Http\Controllers;

use App\Product;
use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchProductController extends Controller
{
    public function searchProduct(Request $request) {
        // Réquête pour récuperer toutes catégories dans la BD
        $categories = Categories::all();
        // Récupération du mot saisi par l'utilisateur
        $search = $request->input('s');
        // dd('$search');
        $category_name = $_GET['cate_search'];

        if (isset($category_name) and !empty($search) ) {
            if ($category_name == 'all') {
                // $products = Product::where('name','like', "%$search%")->get();
                $products = DB::table('categories')
                            ->select('categories.name as c_name', 'products.id as p_id', 'products.name as p_name', 'products.photo as p_photo', 'products.prix as p_prix', 'products.description as p_desc')
                            ->join('sub_categories', 'categories.id', '=', 'sub_categories.id_category')
                            ->join('products', 'sub_categories.id', '=', 'products.id_sub_category')
                            ->where('products.name', 'like', "%$search%")
                            ->get();
            }
            else {
                // $category = Categories::where('name', $category_name)->get();
                
                $products = DB::table('categories')
                ->select('categories.name as c_name', 'products.id as p_id', 'products.name as p_name', 'products.photo as p_photo', 'products.prix as p_prix', 'products.description as p_desc')
                ->join('sub_categories', 'categories.id', '=', 'sub_categories.id_category')
                ->join('products', 'sub_categories.id', '=', 'products.id_sub_category')
                ->where('categories.name', $category_name)
                ->where('products.name', 'like', "%$search%")
                ->get();
                // dd($products);
            }
            
            // dd($category_id);
        }
        else{
            return back();
        }
        return view('search', compact('products', 'categories'));
    }
}
