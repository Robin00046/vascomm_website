<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get produts take 10 from last created
        $products = Products::latest()->take(15)->get();

        return view('products.index', compact('products'));
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
    public function store(StoreProductsRequest $request)
    {
        // create new product
        $imagename = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('images'), $imagename);

        // dd($request->all());
        Products::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'gambar' => $imagename,
            'status' => $request->status,
            'stok' => $request->stok,
        ]);
        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        // get product by id

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, $id)
    {
        $products = Products::find($id);
        // dd($request->all());
        // update product by id and image 
        if ($request->gambar) {
            $imagename = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imagename);
            $products->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'gambar' => $imagename,
                'status' => $request->status,
                'stok' => $request->stok,
            ]);
        } else {
            $products->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'status' => $request->status,
            ]);
        }

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // delete product by id and image
        // dd($id);
        $products = Products::find($id);
        $products->delete();
        // $products->gambar->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
