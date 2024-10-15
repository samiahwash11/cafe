<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request -> validate([
            "name"=> "required",
            "price"=> "required",
            "detail"=> "required",
        ]);
        $product = Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'detail'=>$request->detail
        ]);
        return redirect()->route('product.index')
            ->with('success','product added successflly');    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('product.edit', compact('product'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        public function update(Request $request, product $product)
    {
        $request->validate([
            "name"=> "required",
            "price"=> "required",
            "photo"=> "required",
        ]);
        $product->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'photo'=>$request->photo
        ]);
        return redirect()->route('product.index')
            ->with('success','product updated successflly');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product->delete();
        return redirect()->route('product.index')
            ->with('success','product deleted successflly');
    }
}
