{{-- @extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3>Basic Details</h3>
                    <hr>
                    <form action="{{route('placeorder')}}" method="post">
                        @csrf
                        <div class="checkout-form d-flex flex-wrap gap-2">
                            <div class="form-group flex-grow-1">
                            <label for="fname">fname</label>
                            <input type="text" class="form-control" name="fname" placeholder="First name">
                            @error('fname')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label for="lname">lname</label>
                            <input type="text" class="form-control" name="lname" placeholder="last name">
                            @error('lname')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Votre Email">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control" name="phone" placeholder="Enter Votre Phone">
                            @error('phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label for="adresse1">Adresse 1</label>
                            <input type="text" class="form-control" name="adresse1" placeholder="Enter Votre Adresse">
                            @error('address1')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label for="adresse2">Adresse 2</label>
                            <input type="text" class="form-control" name="adresse2" placeholder="Enter Votre Adresse">
                            @error('address2')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label for="city">Ville</label>
                            <input type="text" class="form-control" name="city" placeholder="Enter Votre Ville">
                            @error('city')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label for="region">Region</label>
                            <input type="text" class="form-control" name="region" placeholder="Enter Votre Region">
                            @error('region')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label for="pays">Pays</label>
                            <input type="text" class="form-control" name="pays" placeholder="Enter Votre Pays">
                            @error('pays')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label for="code_postal">Code Postal</label>
                            <input type="text" class="form-control" name="code_postal" placeholder="Enter Votre Code Postal">
                            @error('code_postal')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h3>Order details</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name Produit</th>
                                    <th>quantity</th>
                                    <th>Prix totale</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $cart)
                                <tr>
                                    <td>{{ $cart->name }}</td>
                                    <td>{{ $cart->quantity }}</td>
                                    <td>{{ $cart->price * $cart->quantity }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">Total:</td>
                                    <td>{{ Cart::getTotal() }} Dhs</td>
                                </tr>
                            </tfoot>
                        </table>
                        <button type="submit" class="btn btn-outline-primary">Commander </button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-lg font-medium mb-4">Basic Details</h3>
                <hr class="my-2 border-gray-200">
                <form action="{{ route('placeorder') }}" method="post">
                    @csrf
                    <div class="checkout-form grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="form-group flex-grow">
                            <label for="fname" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                            <input type="text" name="fname" id="fname" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="First name">
                            @error('fname')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow">
                            <label for="lname" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Last name">
                            @error('lname')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" id="email" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter your email">
                            @error('email')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow">
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                            <input type="tel" name="phone" id="phone" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter your phone">
                            @error('phone')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow">
                            <label for="adresse1" class="block text-sm font-medium text-gray-700 mb-2">Address 1</label>
                            <input type="text" name="adresse1" id="adresse1" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter your address">
                            {{-- @error('address1')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror --}}
                        </div>
                        <div class="form-group flex-grow">
                            <label for="adresse2" class="block text-sm font-medium text-gray-700 mb-2">Address 2</label>
                            <input type="text" name="adresse2" id="adresse2" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter your address">
                            {{-- @error('address2')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror --}}
                        </div>
                        <div class="form-group flex-grow">
                            <label for="city" class="block text-sm font-medium text-gray-700 mb-2">City</label>
                            <input type="text" name="city" id="city" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter your city">
                            @error('city')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow">
                            <label for="region" class="block text-sm font-medium text-gray-700 mb-2">Region</label>
                            <input type="text" name="region" id="region" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter your region">
                            @error('region')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow">
                            <label for="pays" class="block text-sm font-medium text-gray-700 mb-2">Country</label>
                            <input type="text" name="pays" id="pays" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter your country">
                            @error('pays')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow">
                            <label for="code_postal" class="block text-sm font-medium text-gray-700 mb-2">Postal Code</label>
                            <input type="text" name="code_postal" id="code_postal" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter your postal code">
                            @error('code_postal')
                                <span class="text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-lg font-medium mb-4">Order Details</h3>
                <div class="table-responsive">
                    <table class="table-auto w-full">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="px-4 py-2 text-left">Name Product</th>
                                <th class="px-4 py-2 text-left">Quantity</th>
                                <th class="px-4 py-2 text-left">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                                <tr class="border-b">
                                    <td class="px-4 py-2">{{ $cart->name }}</td>
                                    <td class="px-4 py-2">{{ $cart->quantity }}</td>
                                    <td class="px-4 py-2">{{ $cart->price * $cart->quantity }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="bg-gray-100">
                                <td class="px-4 py-2 font-bold" colspan="2">Total:</td>
                                <td class="px-4 py-2 font-bold">{{ Cart::getTotal() }} Dhs</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <button type="submit" class="btn btn-outline-primary mt-4">Commander</button>
            </form>
            </div>
        </div>
    </div>
@endsection
