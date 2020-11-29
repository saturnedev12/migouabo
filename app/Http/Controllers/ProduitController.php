<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Produit;
use App\Models\SousCategorie;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();
        // dd($produits[0]->images->first()->name);
        return view('admin.components.produits.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $souscategories = SousCategorie::all();
        return view('admin.components.produits.create', compact('souscategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|integer',
            'souscategorie_id' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('users/assets/images/products_images'), $imageName);

        $produit = Produit::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'souscategorie_id' => $request->souscategorie_id,
            'user_id' => 9,
        ]);

        Image::create([
            'name' => $imageName,
            'produit_id' => $produit->id,
            'user_id' => 10,
        ]);

        return redirect()->route('produits.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Produit::findOrFail($id);
        return view('admin.components.produits.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produit::findOrFail($id);
        $souscategories = SousCategorie::all();
        return view('admin.components.produits.edit', compact('produit', 'souscategories'));
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
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|integer',
            'souscategorie_id' => 'required|integer',
        ]);

        $produit = Produit::findOrFail($id);
        $produit->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'souscategorie_id' => $request->souscategorie_id,
            'user_id' => 9,
        ]);

        return redirect()->route('produits.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produit::destroy($id);
        return redirect()->route('produits.index');
    }
}
