<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $users = User::paginate(5);
        return view('admin.users.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email', // Corrected the 'unique' rule here
            'role' => 'required',
            'password' => 'required'
        ]);
        $user = New User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('users.index')->with([
            'success'=>"L\'utilisateur à bien été créé!"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        $user = User::find($id);
        return view('admin.users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required|string|max:50',
            'email'=>'required|email',
            'role'=>'required',
            'password'=>'required'
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('users.index')->with([
            'success'=>"L\'utilisateur à bien été modifier!"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with([
            'success'=>"L\'utilisateur à bien été supprimer!"
        ]);
    }
}
