<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct2Request;
use App\Http\Requests\UpdateProduct2Request;
use App\Models\Product;
use App\Models\Product2;
use Illuminate\Http\Request;

class Product2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product2s = Product2::paginate(5);
        return view('company_control.product.index' , ['product2s' => $product2s]);
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company_control.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required|max:10',
            'name'=>'required|max:255',
            'price'=>'required|max:100',
            'quantity'=>'required|max:10',  
        ]);
        $product = new Product2();
        $product->user_id = $request->user_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();
        return redirect('/product2');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product2::findOrFail($id);
        return view('company_control.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product2::findOrFail($id);
        return view('company_control.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);
    
        $product = Product2::findOrFail($id);
        $product->update($request->all());
    
        return redirect()->route('company_control.product.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product2::findOrFail($id);
        $product->delete();
    
        return redirect()->route('product2.index')->with('success', 'Product deleted successfully.');
    }
}
