<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function read(Book $book)
    {
        return view('books.read', ['book' => $book]);
    }

    public function create()
    {
        $authors = Author::all();
        return view('books.create', ['authors' => $authors]);
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $authors = Author::all();
        return view('books.edit', ['book' => $book, 'authors' => $authors]);

    }
    public function index(Request $request)
    {
        $books = Book::query();
    
        $search = $request->input('search');
    
        if (!empty($search)) {
            $books->where('title', 'like', "%$search%")
                  ->orWhere('description', 'like', "%$search%")
                  ->orWhereHas('author', function($query) use ($search) {
                      $query->where('name', 'like', "%$search%");
                  });
        }
    
        $books = $books->get();
    
        return view('books.index', ['books' => $books]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'cover_image' => 'required',
            'author_id' => 'required|exists:authors,id',
        ]);

        Book::create([
            'title'      => $request->title,
            'description'         => $request->description,
            'content' => $request->content,
            'cover_image' => $request->cover_image,
            'author_id'     => $request->author_id
        ]);


        return redirect('/books')->with('message', 'Book created successfully!');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', ['book' => $book]);
    }
    public function update(Book $book, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'author_id' => 'required|exists:authors,id',
        ]);

        $book->update($request->all());
        return redirect('/books')->with('message', 'Book has been updated');

    }
    

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('/books')->with('message', 'Book deleted successfully!');
    }
}