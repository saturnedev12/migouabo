<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
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
        return view('users/pages/contact',compact(
            'user',
            'categories',
            'sub_categorys',
            'products_all',
            'products'
        ));
    }
}
