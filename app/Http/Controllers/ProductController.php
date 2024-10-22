<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\ProductCategory;
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
        $product_categories=ProductCategory::get();
        $products=Product::get();
        return view('product.create',compact('product_categories','products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            "name"=> "required",
            "price"=> "required",
            "photo"=> "required",

        ]);
        $image=null;
        if($request->file('photo')){
            $image=$request->photo->store('public/category/images') ?? '';
        }
        Product::create([
            'category_id'=>$request->category_id,//التثصنيف الرئيسي(Category)
            'name'=>$request->name,
            'price'=>$request->price,
            'photo'=>$image,

        ]);
        return redirect()->route('product.create')
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



    public function destroy(string  $product)
    {
        $product->delete();
        return redirect()->route('product.index')
            ->with('success','product deleted successflly');
    }
}
