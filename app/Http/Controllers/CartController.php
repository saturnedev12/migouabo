<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Models\SousCategorie;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //capture de l'auth 
        $user = Auth::user();
        $categories = Categorie::all();;
        $products_all= Produit::all();
        $sub_categorys = SousCategorie::all();
        
        // foreach(\Cart::getContent() as $prod){
        //     dd($prod);
        // }
        return view('users.pages.cart', compact(
            'user',
            'categories',
            'products_all',
            'sub_categorys'
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
        // dd($request->id, $request->name, $request->price, $request->qtybutton);
        $userId = Auth::user()->id;
        // dd($userId);
        $id = $request->id;
        // dd($id);
        $qty = $request->qty;
        $product = Produit::find($id);
        // dd($product);
        $img_name = $product->images->first()->name;
        // \Cart::session($userId);
        \Cart::add(array(
            'id' => $id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $qty,
            'attributes' => array('image' => $img_name),
            'associateModel' => 'Produit'
        ));
        
        return redirect()->back()->with('success', 'Le produit a été ajouté !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        dd('modifer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \Cart::remove($id);
        return redirect()->back();
    }
    public function destroyAll()
    {
        $items = \Cart::getContent();
        foreach($items as $item){

            \Cart::remove($item->id);
        }
        return redirect()->back();
    }
}
