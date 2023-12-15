<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function index()
    {
        $chapters = Chapter::orderBy('id')->get();
        return view('chapters.index', compact('chapters'));
    }

    public function create()
    {
        $books = Book::all();

        return view('chapters.create', ['books' => $books]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'title'   => 'required',
            'content' => 'required',
        ]);
    
        Chapter::create($request->all());
    
        return redirect('/chapters')->with('message', 'Chapter created successfully!');
    }
    
    public function edit(Chapter $chapter)
    {
        return view('chapters.edit', compact('chapter'));
    }

    public function update(Chapter $chapter, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $chapter->update($request->all());

        return redirect('/chapters')->with('message', 'Chapter has been updated');
    }
    public function show($id)
    {
        $chapter = Chapter::findOrFail($id);
        return view('chapters.show', ['chapter' => $chapter]);
    }
    public function destroy($id)
    {
        $chapter = Chapter::findOrFail($id);
        $chapter->delete();

        return redirect('/chapters')->with('message', 'Chapter deleted successfully!');
    }
}