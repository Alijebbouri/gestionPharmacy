<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::where('status','0')->get();
        return view('admin.orders.index',compact('orders'));
    }
    public function view($id){
        $orders = Order::where('id',$id)->first();
        return view('admin.orders.view',compact('orders'));
    }
    public function updateorder(Request $request,$id){
        $orders = Order::find($id);
        $orders->status = $request->order_status;
        $orders->update();
        return redirect('orders')->with('status','Order Updated successfully');
    }
    public function orderhistory(){
        $orders = Order::where('status','1')->get();
        return view('admin.orders.history',compact('orders'));
    }
}
