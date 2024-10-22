<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = ProductCategory::latest()->paginate(10);
        return view('category.create', compact('categories'));
    }


    public function create()
    {
        return view('category.create');
    }


    public function store(Request $request)
    {

        $request -> validate([
            "name"=> "required",
            "photo"=> "required",
        ]);
        $image=null;
        if($request->file('photo')){
            $image=$request->photo->store('public/category/images') ?? '';
        }
       ProductCategory::create([
            'name'=>$request->name,
            'photo'=>$image,
        ]);
        return redirect()->route('category.index')
            ->with('success','category added successflly');    }


    public function show(string $id)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('product.edit', compact('product'));

    }



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


    public function destroy(string  $product)
    {
        $product->delete();
        return redirect()->route('product.index')
            ->with('success','product deleted successflly');
    }
}
