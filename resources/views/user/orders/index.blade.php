@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-blue-500 text-white text-center p-3">
                        <h4>My Orders</h4>
                    </div>
                    <div class="card-body">
                        <div class="overflow-x-auto">
                            <table class="table w-full border-collapse">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 text-left font-medium text-gray-600 uppercase tracking-wider bg-gray-100">Tracking number</th>
                                        <th class="px-6 py-3 text-left font-medium text-gray-600 uppercase tracking-wider bg-gray-100">Total price</th>
                                        <th class="px-6 py-3 text-left font-medium text-gray-600 uppercase tracking-wider bg-gray-100">Status</th>
                                        <th class="px-6 py-3 text-left font-medium text-gray-600 uppercase tracking-wider bg-gray-100">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr class="border-t">
                                        <td class="px-6 py-4">{{$order->tracking_no}}</td>
                                        <td class="px-6 py-4">{{$order->total_price}}</td>
                                        <td class="px-6 py-4">
                                            @if($order->status == '0')
                                                <span class="inline-block px-3 py-1 text-sm font-semibold text-red-700 bg-red-100 rounded">pending</span>
                                            @else
                                                <span class="inline-block px-3 py-1 text-sm font-semibold text-green-700 bg-green-100 rounded">completed</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{url('/my-orders/'.$order->id)}}" class="px-4 py-2 text-white bg-gray-900 rounded">view</a>
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
    </div>
@endsection
