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
        return view('pages/contact',compact(
            'user',
            'categories',
            'products'
        ));
    }
}
