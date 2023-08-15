@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('produits.index')}}" class="btn btn-outline-info"><i class="fa-solid fa-list"></i> Liste Produits</a>
                </div>
                <div class="card-body">
                    <form action="{{route('produits.update',$produit->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nomProduit" class="form-label">Nom Produit</label>
                                <input type="text" class="form-control" id="nomProduit" value="{{$produit->nom_produit}}" name="nom_produit">
                                @error('nom_produit')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="dosage" class="form-label">Dosage</label>
                                <input type="text" class="form-control" value="{{$produit->dosage}}" id="dosage" name="dosage">
                                @error('dosage')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="prixUnitaire" class="form-label">Prix Unitaire</label>
                                <input type="number" class="form-control" value="{{$produit->prix_unitaire}}" id="prixUnitaire" name="prix_unitaire" step="0.01">
                                @error('prix_unitaire')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="datePeremption" class="form-label">Date de Peremption</label>
                                <input type="date" class="form-control" value="{{$produit->date_peremption}}" id="datePeremption" name="date_peremption">
                                @error('date_peremption')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" value="{{$produit->image}}" id="formFile" name="image">
                            <img src="{{ asset('images/' . $produit->image) }}" alt="{{ $produit->image }}" width="50">
                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="quantiteEnStock" class="form-label">Quantite en Stock</label>
                            <input type="number" class="form-control" id="quantiteEnStock" value="{{$produit->quantite_en_stock}}" name="quantite_en_stock">
                            @error('quantite_en_stock')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-success">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary">Reset</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


