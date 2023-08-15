<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Produit;
use App\Models\User;
use App\Models\Order;
use App\Models\Contact;
class HomeController extends Controller
{
    public function index()
{
    if (Auth::check()) {
        $role = Auth::user()->role;
        if ($role == '1') {
            $totalProduits = Produit::count();
            $totalCommandes = Order::count();
            $totalContacts = Contact::count();
            $totalUser = User::count();
            $roleAdmin = User::where('role', '1')->count();
            $roleAsUser = User::where('role', '0')->count();

            $totalProduitsStock = Produit::where('quantite_en_stock', '<=', '0')->count();

            $todayDate = Carbon::now()->timezone('UTC')->format('Y-m-d');
            $thisMonth = Carbon::now()->format('m');
            $thisYear = Carbon::now()->format('Y');

            $todayCommande = Order::whereDate('created_at', $todayDate)->count();
            $thisMonthCommande = Order::whereDate('created_at', $thisMonth)->count();
            $thisYearCommande = Order::whereDate('created_at', $thisYear)->count();

            return view('admin.dashboard', compact('totalProduits', 'totalCommandes', 'totalUser', 'todayCommande', 'thisMonthCommande', 'thisYearCommande', 'roleAdmin', 'roleAsUser','totalContacts','totalProduitsStock'));
        } else {
            $produits  = Produit::latest()->paginate(12);
            return view('user.produits.produit',compact('produits'));
        }
    } else {
        return redirect()->back('/');
    }
    }
    public function orders(){
        $orders = Order::where('id_user',Auth::id())->get();
        return view('user.orders.index',compact('orders'));
    }
    // public function view($id){
    //     $orders = Order::where('id',$id)->where(Auth::id())->first();
    //     return view('user.orders.view',compact('orders'));
    // }
    public function view($id){
    $orders = Order::where('id', $id)->where('id_user', Auth::id())->first();
    return view('user.orders.view', compact('orders'));
    }
    public function viewcontact(){
        $contacts = Contact::paginate(5);
        return view('admin.contacts.index',compact('contacts'));
    }
    public function searchadmin(Request $request){
        $searchTerm = $request->input('search');
        $results = Produit::where('nom_produit', 'like', '%' . $searchTerm . '%')
                      ->orWhere('prix_unitaire', 'like', '%' . $searchTerm . '%')
                      ->where('quantite_en_stock', '>=', 0)
                      ->get();
        return view('admin.search', compact('results'));
    }
    public function searchuser(Request $request){
        $searchTerm = $request->input('search');
        $results = Produit::where('nom_produit', 'like', '%' . $searchTerm . '%')
                      ->orWhere('prix_unitaire', 'like', '%' . $searchTerm . '%')
                      ->where('quantite_en_stock', '>=', 0)
                      ->get();
        return view('user.produits.search', compact('results'));
    }
}

