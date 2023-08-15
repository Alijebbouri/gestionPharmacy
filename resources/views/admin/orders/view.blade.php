@extends('layouts.admin')

@section('content')
    <div class="container mt-10">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Order view </h4>
                            <a href="{{route('orders')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">First Name : </label>
                                <div class="border p-2">{{$orders->fname}}</div>
                                <label for="">last Name : </label>
                                <div class="border p-2">{{$orders->lname}}</div>
                                <label for="">Email : </label>
                                <div class="border p-2">{{$orders->email}}</div>
                                <label for="">Phone : </label>
                                <div class="border p-2">{{$orders->phone}}</div>
                                <label for="">Shipping address : </label>
                                <div class="border p-2">{{$orders->address1}} {{$orders->address2}} {{$orders->city}} {{$orders->region}} {{$orders->pays}}</div>
                                <label for="">Zip Code : </label>
                                <div class="border p-2">{{$orders->code_postal}}</div>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $totalPrice = 0; // Initialize the total price variable
                                        @endphp
                                        @foreach($orders->orderitems as $orderItem)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('images/' . $orderItem->produits->image) }}" alt="{{ $orderItem->produits->image }}" width="50">
                                                </td>
                                                <td>{{$orderItem->produits->nom_produit}}</td>
                                                <td>{{$orderItem->quantity}}</td>
                                                <td>{{$orderItem->prix * $orderItem->quantity}}</td>
                                            </tr>
                                            @php
                                                // Accumulate the total price
                                                $totalPrice += $orderItem->prix * $orderItem->quantity;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3">Total:</th>
                                            <td>{{ $totalPrice }} Dhs</td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="mt-4">
                                    <label for="">Order Status</label>
                                    <form action="{{url('update-order/'.$orders->id)}}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <select class="form-select mb-2" name="order_status">
                                            <option selected>Open this select Status</option>
                                            <option {{$orders->status == '0' ? 'selected' : ''}} value="0">Pending</option>
                                            <option {{$orders->status == '1' ? 'selected' : ''}} value="1">Completed</option>
                                        </select>
                                        <button class="btn btn-primary float-end mt-1">Update</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
