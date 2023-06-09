<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
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
        $products = Product::with(['categories','images'])->get();
        return response()->json([
            'products' => $products
        ]);
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
    public function store(ProductRequest $request)
    {
        $params = $request->validated();
        if ($product = Product::create($params)) {
            $product->categories()->sync($params['category_ids']);
            $product->images()->sync($params['image_ids']);

            return response()->json([
                'status' => true,
                'message' => "Produk baru berhasil di tambahkan",
                'product' => $product
            ], 200);        
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::with(['categories','images'])->get()->find($id);
        return response()->json([
            'products' => $products
        ]);
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
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $params = $request->validated();

        if ($product->update($params)) {
            $product->categories()->sync($params['category_ids']);
            $product->images()->sync($params['image_ids']);

            return response()->json([
                'status' => true,
                'message' => "Produk berhasil diubah",
                'product' => $product
            ], 200);        
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->categories()->detach();
        $product->images()->detach();

        if ($product->delete()) {
            return response()->json([
                'status' => true,
                'message' => "Produk berhasil dihapus",
            ], 200);        
        }
    }
}
