@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4> Total Orders</h4>
                            <a href="{{url('order-history')}}" class="btn btn-warning">Histrory</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Order Date</th>
                                    <th class="px-4 py-2">Tracking number</th>
                                    <th class="px-4 py-2">Total price</th>
                                    <th class="px-4 py-2">Status</th>
                                    <th class="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td class="border px-4 py-2">{{date('d-m-Y', strtotime($order->created_at))}}</td>
                                    <td class="border px-4 py-2">{{$order->tracking_no}}</td>
                                    <td class="border px-4 py-2">{{$order->total_price}}</td>
                                    <td class="border px-4 py-2">
                                        @if($order->status == '0')
                                            <span class="badge bg-red-500 text-white px-2 py-1">pending</span>
                                        @else
                                            <span class="badge bg-green-500 text-white px-2 py-1">completed</span>
                                        @endif
                                    </td>
                                    <td class="border px-4 py-2">
                                        <a href="{{url('admin/view-orders/'.$order->id)}}" class="btn btn-primary">view</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
