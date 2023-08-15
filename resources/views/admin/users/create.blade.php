@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Ajouter Utilisateur</h3>
                        <a href="{{route('users.index')}}" class="btn btn-outline-info"><i class="fa-solid fa-list"></i> Liste Users</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('users.store')}}" method="POST">
                        @csrf
                            <div class="mb-3">
                                <label for="nom" class="form-label">Name : </label>
                                <input type="text" class="form-control" id="name" name="name">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="dosage" class="form-label">Email : </label>
                                <input type="email" class="form-control" id="email" name="email">
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Role : </label>
                                <input class="form-control" type="text" id="role" name="role">
                                @error('role')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="datePeremption" class="form-label">Password : </label>
                                <input type="password" class="form-control" id="password" name="password">
                                @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-outline-success">Submit</button>
                            </form>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
