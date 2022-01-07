<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $user = auth()->user()->id_user;
        $product = $input['id_product'];

        $cart = new Cart();
        $cart->id_user = $user;
        $cart->id_product = $product;
        $cart->save();

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
    public function destroy($id)
    {
        //
    }

    public function cartCount()
    {
        if (Auth::check()) {

            $cartCount = Cart::where('id_user', auth()->user()->id_user)->where('is_deleted', false)->count();
            return $cartCount;
        } else {
            return 0;
        }
    }

    public function cartUser()
    {
        $products = [];
        $carts = Cart::where('id_user', auth()->user()->id_user)->where('is_deleted', false)->get();

        if (isset($carts) && !empty($carts)) {

            foreach ($carts as $cart) {
                $products[] = Product::where('id_product', $cart['id_product'])->first();
            }
        }

        return response()->json($products);
    }

    public function delete(Request $request)
    {
        $input = $request->all();
        $cart = Cart::where('id_user', auth()->user()->id_user)
            ->where('id_product', $input['id_product'])->first();


        if (isset($cart) && !empty($cart)) {
            $cart->is_deleted = true;
            $cart->save();
        }

        return $cart;
    }
}
