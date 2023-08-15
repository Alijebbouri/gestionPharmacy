<?php

namespace App\Http\Controllers;
use App\Models\Wishlist;
use App\Models\Produit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function wishlist()
    {
        $user = auth()->user();
        $wishlist = $user->wishlistes;
        return view('user.produits.wishlist', compact('wishlist'));
    }
    public function favoriteAdd($id){
        $user = Auth::user();
        $produit = Produit::findOrFail($id);
        $wishlist = new Wishlist();
        $wishlist->id_user = $user->id;
        $wishlist->id_produit = $produit->id;
        $wishlist->save();
        return redirect()->back()->with('success', 'Product added to wishlist successfully!');
    }
    public function favoriteRemove($id){
        $wishlist = Wishlist::findOrFail($id);
        $wishlist->delete();
        return redirect()->route('wishlist')->with('flash_message','Item successfully deleted');
    }
}
