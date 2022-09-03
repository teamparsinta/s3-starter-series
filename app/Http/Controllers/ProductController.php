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
        return view('products.index', [
            'products' => Product::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
        ]);

        $slug = str($request->name)->slug();
        $file = $request->file('picture');
        Product::create([
            'picture' => $request->hasFile('picture') ? $file->storeAs('images/products', "{$slug}.{$file->extension()}") : null,
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
        ]);

        $file = $request->file('picture');
        $product->update([
            'picture' => $request->hasFile('picture') ? $file->storeAs('images/products', "{$product->slug}.{$file->extension()}") : null,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    }
}
