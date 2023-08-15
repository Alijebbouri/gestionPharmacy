{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center display-6 mt-1">Liste Des Medicaments</h1>
        @if(session()->has("success"))
        <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('success') }}</strong>
            <button type="button" data-dismiss="alert" aria-label="close" class="close"><span>&times;</span></button>
        </div>
        @endif
        <div class="col-12 d-flex flex-wrap justify-content-between">
            @foreach ($produits as $produit)
            <div class="card m-2" style="width: 27%;">
                <img src="{{ asset('images/' . $produit->image) }}" alt="{{ $produit->image }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Nom Produit: {{ $produit->nom_produit }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Dosage: {{ $produit->dosage }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Date de Peremption: {{ $produit->date_peremption }}</h6>
                    <p class="card-text">Prix unitaire: {{ $produit->prix_unitaire }} Dhs</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ url('add_to_cart', $produit->id) }}" class="btn btn-outline-primary"><i class="fa-solid fa-cart-shopping"></i> Add To Cart</a>
                    <form method="POST" action="{{ route('favorite.add', $produit->id) }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary"><i class="fa-solid fa-heart"></i> Wishlist</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{ $produits->links() }}
</div>
@endsection --}}
@extends('layouts.app')
@section('content')
<div class="container px-12 py-8 mx-auto">
    <h3 class="text-2xl font-bold text-gray-900">Latest Products</h3>
    <div class="h-1 bg-gray-800 w-48"></div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($produits as $product)
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->image }}" class="w-full max-h-60">
            <div class="p-4">
                <h5 class="text-lg font-semibold text-gray-900">{{ $product->nom_produit }}</h5>
                <h6 class="text-sm text-gray-500 mb-2">Dosage: {{ $product->dosage }}</h6>
                <h6 class="text-sm text-gray-500 mb-2">Date de Peremption: {{ $product->date_peremption }}</h6>
                <p class="text-sm text-gray-600 mb-4">Prix unitaire: {{ $product->prix_unitaire }} Dhs</p>
                <p class="text-sm text-gray-600 mb-4">Quantity:
                    @if ($product->quantite_en_stock <= 0)
                        <span class='badge bg-red-500 text-white px-2 py-1'>Out of Stock</span>
                    @else
                        <span class='badge bg-green-500 text-white px-2 py-1'>In Stock</span>
                    @endif
                </p>
                <div class="flex justify-between items-center">
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->nom_produit }}" name="name">
                        <input type="hidden" value="{{ $product->prix_unitaire }}" name="price">
                        <input type="hidden" value="{{ $product->image }}" name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-2 text-white text-sm bg-gray-900 rounded"><i class="fa-solid fa-cart-shopping"></i> Add To Cart</button>
                    </form>
                    <form method="POST" action="{{ route('favorite.add', $product->id) }}">
                        @csrf
                        <button type="submit" class="px-4 py-2 text-white text-sm bg-gray-900 rounded"><i class="fas fa-heart"></i> Wishlist</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        <div class="mt-3">
            {{$produits->links()}}
        </div>
    </div>
</div>
@endsection




