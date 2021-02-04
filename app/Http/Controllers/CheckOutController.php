<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Produit;
use App\Models\Categorie;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\SousCategorie;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        // dd($user->name);
        $categories = Categorie::all();;
        $products_all= Produit::all();
        $sub_categorys = SousCategorie::all();
        return view('users.pages.checkout', compact(
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

        $order = Order::create([
            'number' => $request->numero_exp,
            'status' => 0,
            'user_id' => Auth::user()->id,
            'shipping_address' => $request->adresse_exp,
            'notes' => $request->notes,
        ]);

        // $orderId = Order::last();
        
        foreach(\Cart::getContent() as $produit)
        {
            OrderItem::create([
                'order_id' => $order->id,
                'produit_id' => $produit->id,
                'name' => $produit->name,
                'quantity' => $produit->quantity,
                'price' => $produit->price,
            ]);
        }

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
