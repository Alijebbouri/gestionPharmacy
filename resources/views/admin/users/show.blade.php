@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center text-dark">Details User</h1>
            <div class="card m-auto mt-2">
                <div class="card-body">
                  <h5 class="card-title">Nom : {{$user->name}}</h5>
                  <p class="card-text">Email : {{$user->email}}</p>
                  <p class="card-text">Role : {{$user->role == '1' ? 'admin' : 'user'}}</p>
                  {{-- <p class="card-text">password : {{$user->password}}</p> --}}
                  <p class="card-text">email_verified : {{$user->email_verified_at}}</p>
                  <p class="card-text">Remember_token : {{$user->remember_token}}</p>
                  <p class="card-text">created_at : {{date('d-m-Y', strtotime($user->created_at))}}</p>
                  <p class="card-text">updated_at : {{date('d-m-Y', strtotime($user->updated_at))}}</p>
                  <a href="{{route('users.index')}}" class="btn btn-outline-info">Back </a>
                </div>
              </div>
        </div>
    </div>

</div>
@endsection
