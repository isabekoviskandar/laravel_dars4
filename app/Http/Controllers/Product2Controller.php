<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct2Request;
use App\Http\Requests\UpdateProduct2Request;
use App\Models\Product;
use App\Models\Product2;

class Product2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('company_control.product.index' , ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProduct2Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product2 $product2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product2 $product2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProduct2Request $request, Product2 $product2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product2 $product2)
    {
        //
    }
}
