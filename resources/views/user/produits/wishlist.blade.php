@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col">
            @if(count($wishlist) > 0)
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Product Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Image
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    User Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($wishlist as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->produit->nom_produit }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <img src="{{ asset('images/' . $item->produit->image) }}" alt="{{ $item->produit->image }}" class="w-12 h-12 object-cover rounded">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->produit->prix_unitaire }} DH</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->user->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <form action="{{ route('favorite.remove', $item->id) }}" method="POST" onsubmit="return confirm('{{ trans('are You Sure ? ') }}');" class="inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="px-4 py-2 text-white bg-gray-900 rounded">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="{{ url('/redirect') }}" class="px-4 py-2 mt-4 inline-block text-white bg-blue-500 rounded hover:bg-blue-600">Go back</a>
            @else
                <div class="bg-blue-100 text-blue-600 px-4 py-3 rounded-lg shadow-md">
                    Your Wishlist is empty.
                </div>
                <a href="{{ url('/redirect') }}" class="px-4 py-2 mt-4 inline-block text-white bg-blue-500 rounded hover:bg-blue-600">Go back</a>
            @endif
        </div>
    </div>
</div>
@endsection
