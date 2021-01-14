<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Wishlist;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\SousCategorie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $userId = Auth::user()->id;
        // $products = Produit::where('user_id', $userId);
        $categories = Categorie::all();
        $products_all= Produit::all();
        $sub_categorys = SousCategorie::all();
        $products = DB::table('wishlists')
                        ->leftJoin('produits', 'wishlists.product_id', '=', 'produits.id')
                        ->where('wishlists.user_id', $userId)
                        ->get();
        return view('users.pages.wishlist', compact(
            'user',
            'categories',
            'products_all',
            'sub_categorys',
            'products'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = 'Produit';
        $categories = Categorie::all();
        $wishlist = new Wishlist();
        $wishlist->user_id = Auth::user()->id;
        $wishlist->product_id = $request->product_id;
        $wishlist->save();
        
        
        // $wishlistProd = DB::table('produits')->where('id', $request->product_id);
        // return view('product', compact('wishlistProd', 'title', 'categories'));
        // return view('wishlist');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
