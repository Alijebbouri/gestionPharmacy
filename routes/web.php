<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::prefix('pages')->group(function(){
    Route::get('contact',[ContactController::class,'contact']);
    Route::post('contact',[ContactController::class,'store'])->name('pages.contact.store');
    Route::get('/about', function () {
        return view('user.pages.about');
    });
});
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function(){
    Route::get('/redirect',[App\Http\Controllers\HomeController::class,'index']);
});
Route::middleware(['auth','isUser'])->group(function () {
    //wishlist route :
    Route::get('wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');
    Route::post('favorite-add/{id}', [WishlistController::class, 'favoriteAdd'])->name('favorite.add');
    Route::delete('favorite-remove/{id}', [WishlistController::class, 'favoriteRemove'])->name('favorite.remove');
    //cart routes :
    Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
    Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
    Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
    Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
    //checkout routes :
    Route::get('checkout', [CheckoutController::class, 'showCheckout'])->name('checkout');
    Route::post('placeorder', [CheckoutController::class, 'placeorder'])->name('placeorder');
    //orders-routes :
    Route::get('/userorders',[App\Http\Controllers\HomeController::class,'orders']);
    Route::get('/my-orders/{id}',[App\Http\Controllers\HomeController::class,'view']);
    route::view('/success','user.orders.success')->name('success');
    Route::post('user-search',[App\Http\Controllers\HomeController::class,'searchuser']);
});
Route::middleware(['auth','isAdmin'])->group(function(){
    //Produit routes :
    Route::resource('/produits','App\Http\Controllers\ProduitController');
    //users routes :
    Route::resource('/users','App\Http\Controllers\UserController');
    //orders routes :
    Route::get('orders',[OrderController::class,'index'])->name('orders');
    Route::get('admin/view-orders/{id}',[OrderController::class,'view'])->name('admin.view-orders');
    Route::put('update-order/{id}',[OrderController::class,'updateorder']);
    Route::get('orders-history',[OrderController::class,'orderhistory']);
    Route::get('contact-view',[App\Http\Controllers\HomeController::class,'viewcontact']);
    Route::post('admin-search',[App\Http\Controllers\HomeController::class,'searchadmin']);
});
require __DIR__.'/auth.php';
