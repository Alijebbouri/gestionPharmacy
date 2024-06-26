<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Darryldecode\Cart\Facades\CartFacade::class::getContent();
        return view('user.produits.cart', compact('cartItems'));
    }
    public function addToCart(Request $request)
    {
        \Darryldecode\Cart\Facades\CartFacade::class::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');
        return redirect()->route('cart.list');
    }
    public function updateCart(Request $request)
    {
        \Darryldecode\Cart\Facades\CartFacade::class::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );
        session()->flash('success', 'Item Cart is Updated Successfully !');
        return redirect()->route('cart.list');
    }
    public function removeCart(Request $request)
    {
        \Darryldecode\Cart\Facades\CartFacade::class::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');
        return redirect()->route('cart.list');
    }
    public function clearAllCart()
    {
        \Darryldecode\Cart\Facades\CartFacade::class::clear();
        session()->flash('success', 'All Item Cart Clear Successfully !');
        return redirect()->route('cart.list');
    }
}
