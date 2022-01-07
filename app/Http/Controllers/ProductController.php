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
        $products = Product::where('is_deleted', false)->get();
        return response()->json($products);
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
        $input = $request->all();

        $file = $request->file('img');
        $filename = $file->hashName();

        $path = $file->storeAs('', $filename, 'public');

        $product = new Product();
        $product->name = $input['name'];
        $product->description = $input['description'];
        $product->collection = $input['collection'];
        $product->gender = $input['gender'];
        $product->price = $input['price'];
        $product->color = $input['color'];
        $product->discount = $input['discount'];
        $product->img = $path;
        $product->save();

        return back();
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
    public function destroy(Request $request)
    {

        $input = $request->all();
        $product = Product::where($input['id_product'])->first();
        dd($product);
        $product->is_deleted = true;
        $product->save();

        return true;
    }

    public function delete(Request $request)
    {

        $input = $request->all();
        $product = Product::where('id_product', $input['id_product'])->first();
        if (isset($product) && !empty($product)) {
            $product->is_deleted = true;
            $product->save();
        }
    }

    public function customUpdate(Request $request)
    {
        $input = $request->all();
        $product = Product::where('id_product', $input['id_product'])->first();
        if (isset($product) && !empty($product)) {
            $product->name = $input['name'];
            $product->collection = $input['collection'];
            $product->price = $input['price'];
            $product->color = $input['color'];
            $product->discount = $input['discount'];
            $product->gender = $input['gender'];
            $product->description = $input['description'];
            $product->save();
        }
    }
}
