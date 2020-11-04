<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\SousCategorie;
use Illuminate\Http\Request;

class SousCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $souscategories = SousCategorie::all();
        return view('admin.components.souscategories.index', compact('souscategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('admin.components.souscategories.create', compact('categories'));
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
            'categorie_id' => 'required|integer',
            'description' => 'required',
        ]);

        // dd($request);

        SousCategorie::create([
            'name' => $request->name,
            'photo' => 'conserver-viande-main-12348878.jpg',
            'icon' => 'fas fa-drumstick-bite',
            'description' => $request->description,
            'categorie_id' => $request->categorie_id,
            'user_id' => 9
        ]);

        return redirect()->route('souscategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $souscategorie = SousCategorie::findOrFail($id);
        // dd($categorie);
        return view('admin.components.souscategories.show', compact('souscategorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $souscategorie = SousCategorie::findOrFail($id);
        $categories = Categorie::all();
        // dd($categorie);
        return view('admin.components.souscategories.edit', compact('souscategorie', 'categories'));
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
            'categorie_id' => 'required|integer',
            'description' => 'required',
        ]);

        $souscategorie = SousCategorie::findOrFail($id);
        $souscategorie->update([
            'name' => $request->name,
            'photo' => 'conserver-viande-main-12348878.jpg',
            'icon' => 'fas fa-drumstick-bite',
            'description' => $request->description,
            'categorie_id' => $request->categorie_id,
            'user_id' => 6
        ]);
        return redirect()->route('souscategories.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SousCategorie::destroy($id);
        return redirect()->route('souscategories.index');
    }
}
