<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::orderBy('id')->get();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        $users = User::all();
        return view('authors.create', ['users' => $users]);
    }
    
    public function store(Request $request)
{
    $request->validate([
        'name'    => 'required',
        'user_id' => 'required|exists:users,id',
        'bio'     => 'nullable',
    ]);

    Author::create($request->all());

    return redirect('/authors')->with('message', 'Author created successfully!');
}


    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    public function edit(Author $author)
    {
        $users = User::all();
        return view('authors.edit', compact('author', 'users'));
    }

    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name'    => 'required',
            'user_id' => 'required|exists:users,id',
            'bio'     => 'nullable',
        ]);

        $author->update($request->all());

        return redirect('/authors')->with('message', 'Author has been updated');
    }

    public function destroy(Author $author)
    {
        $author->delete();

        return redirect('/authors')->with('message', 'Author deleted successfully!');
    }
}