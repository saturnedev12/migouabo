<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName1 = time().'.'.$request->image1->extension();
        $request->image1->move(public_path('users/assets/images/products_images'), $imageName1);
        Image::create([
            'name' => $imageName1,
            'produit_id' => $request->produit_id,
            'user_id' => 9,
        ]);

        if ($request->image2) {
            $imageName2 = time().'.'.$request->image2->extension();
            $request->image2->move(public_path('users/assets/images/products_images'), $imageName2);
            Image::create([
                'name' => $imageName2,
                'produit_id' => $request->produit_id,
                'user_id' => 9,
            ]);
        }

        if ($request->image3) {
            $imageName3 = time().'.'.$request->image3->extension();
            $request->image3->move(public_path('users/assets/images/products_images'), $imageName3);
            Image::create([
                'name' => $imageName3,
                'produit_id' => $request->produit_id,
                'user_id' => 9,
            ]);
        }  
        
        return redirect()->route('produits.show', $request->produit_id);
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
