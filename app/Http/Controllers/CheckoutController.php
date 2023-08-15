<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Produit;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Auth;
class CheckoutController extends Controller{
    // public function index(){
    // $old_cartitems = Cart::getContent()->where("id_user", Auth::id());
    // foreach ($old_cartitems as $item) {
    //     if (!Produit::where("id", $item->id_produit)->where("quantite_en_stock", ">=", $item->quantity)->exists()) {
    //         Cart::remove($item->id);
    //     }
    // }
    // $carts = Cart::getContent()->where("id_user", Auth::id());
    // return view('user.produits.checkout', compact("carts"));
     // Make sure to import the Cart facade or helper function if not already imported

    public function showCheckout()
    {
        $carts = Cart::getContent(); // Fetch the cart items
        return view('user.produits.checkout', compact('carts'));
    }
//     public function placeorder(Request $request)
// {
//     $request->validate([
//         'fname' => 'required',
//         'lname' => 'required',
//         'email' => 'required',
//         'phone' => 'required',
//         'city' => 'required',
//         'region' => 'required',
//         'pays' => 'required',
//         'code_postal' => 'required',
//     ]);

//     $order = new Order();
//     $order->id_user = Auth::id();
//     $order->fname = $request->fname;
//     $order->lname = $request->lname;
//     $order->email = $request->email;
//     $order->phone = $request->phone;
//     $order->address1 = $request->adresse1;
//     $order->address2 = $request->adresse2;
//     $order->city = $request->city;
//     $order->region = $request->region;
//     $order->pays = $request->pays;
//     $order->code_postal = $request->code_postal;
//     $order->total_price = Cart::getTotal();
//     $order->tracking_no = 'ali' . rand(1111, 9999);
//     $order->save();

//     $cartItems = Cart::getContent();

//     foreach ($cartItems as $item) {
//         $orderItem = new OrderItem();
//         $orderItem->id_order = $order->id;
//         $orderItem->id_produit = $item->id;
//         $orderItem->prix = $item->price;
//         $orderItem->quantity = $item->quantity;
//         $orderItem->save();

//         // Update the stock quantity of the related product
//         $prod = Produit::find($item->id);
//         $prod->quantite_en_stock -= $item->quantity;
//         $prod->save();
//     }

//     Cart::session(Auth::id())->clear();
//     return Redirect::route('success')->with('success', 'Successfully redirected!');
// }
public function placeOrder(Request $request)
{
    $request->validate([
        'fname'=>'required',
        'lname'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'city'=>'required',
        'region'=>'required',
        'pays'=>'required',
        'code_postal'=>'required',
    ]);
    $user = Auth::user();
    $order = new Order();
    $order->id_user = $user->id;
    $order->fname = $request->fname;
    $order->lname = $request->lname;
    $order->email = $request->email;
    $order->phone = $request->phone;
    $order->address1 = $request->adresse1;
    $order->address2 = $request->adresse2;
    $order->city = $request->city;
    $order->region = $request->region;
    $order->pays = $request->pays;
    $order->code_postal = $request->code_postal;
    $order->total_price = Cart::getTotal();
    $order->tracking_no = 'ali' . rand(1111, 9999);
    // $order->status = 'pending';
    $order->save();
    $cartItems = Cart::getContent();
    foreach ($cartItems as $item) {
        $orderItem = new OrderItem();
        $orderItem->id_order = $order->id;
        $orderItem->id_produit = $item->id;
        $orderItem->prix = $item->price;
        $orderItem->quantity = $item->quantity;
        $orderItem->save();
        $prod = Produit::find($item->id);
        $prod->quantite_en_stock -= $item->quantity;
        $prod->save();
    }
    Cart::clear();
    session()->flash('success', 'Commande passée avec succès !');
    return redirect()->route('success');
}

}



