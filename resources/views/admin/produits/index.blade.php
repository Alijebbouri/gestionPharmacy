@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card m-5">
                <div class="card-header text-bg-primary text-center text-dark p-3">
                    {{-- <i class="fa-solid fa-list"></i> Liste des produits --}}Liste des produits
                </div>
                <div class="card-body">
                    <a href="{{route('produits.create')}}" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i> Ajouter Produits</a>
                    <div class="card-title">
                        @if(session()->has("success"))
                            <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session()->get('success') }}</strong>
                                <button type="button" data-dismiss="alert" aria-label="close" class="close"><span>&times;</span></button>
                            </div>
                        @endif
                    </div>
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nom Produit</th>
                                <th scope="col">Image</th>
                                <th scope="col">Date Peremption</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Quantite En Stock</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produits as $produit)
                            <tr>
                                <td>{{ $produit->id }}</td>
                                <td>{{ $produit->nom_produit }}</td>
                                <td>
                                    <img src="{{ asset('images/' . $produit->image) }}" alt="{{ $produit->image }}" width="50">
                                </td>
                                <td>{{ $produit->date_peremption }}</td>
                                <td>{{ $produit->prix_unitaire }}</td>
                                <td>{{ $produit->quantite_en_stock }}</td>
                                <td class="d-flex justify-content-center align-items-center p-3">
                                    <a href="{{ route('produits.show', $produit->id) }}" class="btn btn-outline-info"><i class="fa-solid fa-circle-info"></i> details</a>
                                    <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                    <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce produit?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i> Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{$produits->links()}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

