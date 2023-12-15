<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::query();
    
        $search = $request->input('search');
    
        if (!empty($search)) {
            $users->where('name', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%");
        }
    
        $users = $users->get();
    
        return view('users.index', ['users' => $users]);
    }
    public function create()
    {
        return view('users.create');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user' => $user]);
    } 
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create($request->all());

        return redirect('/users')->with('message', 'User created successfully!');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', ['user' => $user]);
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update($request->all());
        return redirect('/users')->with('message', 'User has been updated');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users')->with('message', 'User deleted successfully!');
    }
}