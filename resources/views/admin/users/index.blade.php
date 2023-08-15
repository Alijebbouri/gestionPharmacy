@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card m-5">
                <div class="card-header text-bg-primary text-center p-3">
                    <h3>Liste des utilisateurs</h3>
                </div>
                <div class="card-body">
                    <a href="{{route('users.create')}}" class="btn btn-outline-primary">Ajouter Users</a>
                    <div class="card-title">
                        @if(session()->has("success"))
                            <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session()->get('success') }}</strong>
                                {{-- <button type="button" data-dismiss="alert" aria-label="close" class="close"><span>&times;</span></button> --}}
                            </div>
                        @endif
                    </div>
                    <div class="table-responsive"> <!-- Add this div with the class table-responsive -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">role</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td class="d-flex justify-content-center align-items-center p-3">
                                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-info"><i class="fa-solid fa-circle-info"></i> details</a>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cette utilisateur?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i> Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
