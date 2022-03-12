<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //selection  des 5 premier profuits de  liste
        $products = Product::latest()->paginate(5);

        //affichage des produits
        return view('products.index', compact('products'))->with(request()->input('page') ) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //valider les champs 
        $request->validate([
            'name'=>'required',
            'detail'=> 'required'
        ]);

        //creer un nouveeau produits 
        Product::create($request->all());

        //rediriger le client
        return redirect()->route('products.index')->with('success', 'article créer , bien joué');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // on affiche la page avec l'article choisit avec
        //  son id=$product ce qui permet l'affichage de $product-name
        //   dans le fichier show.blade.php
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product) // affiche le formulaire 
    {
        //
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
         //valider les champs 
         $request->validate([
            'name'=>'required',
            'detail'=> 'required'
        ]);

        //creer un nouveeau produits 
        $product->update($request->all());

        //rediriger le client
        return redirect()->route('products.index')->with('success', 'article MODIFIé , bien joué');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //effacer article
        $product->delete();
    
        //rediriger vers la page de success
        return redirect()->route('products.index')->with('success', 'article '. $product->name.' SOUPRIMé , bien jouhé');

    }
}
