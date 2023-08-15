@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                 <h1 class="text-center text-primary">Details Produit </h1>
                <div class="card m-auto" style="width:25rem">
                    <img src="{{ asset('images/' . $produit->image) }}" class="card-img-top rounded-2 m-auto w-50 "  alt="{{$produit->image}}">
                <div class="card-body">
                  <h5 class="card-title">Id : {{$produit->id}}</h5>
                  <h5 class="card-title">Nom : {{$produit->nom_produit}}</h5>
                  <p class="card-text">Date : {{$produit->date_peremption}}</p>
                  <p class="card-text">Prix : {{$produit->prix_unitaire}}</p>
                  <p class="card-text">Quantite : {{$produit->quantite_en_stock}}</p>
                  <p class="card-text">Date : {{$produit->date_peremption}}</p>
                  <a href="{{route('produits.index')}}" class="btn btn-primary">Go Back</a>
                </div>
              </div>
        </div>
        </div>
    </div>
@endsection
