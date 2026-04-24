<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with('category', 'transactions')->get();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'isbn' => 'required|unique:books',
            'title' => 'required',
            'author' => 'required',
            'category_id' => 'required',
            'publisher' => 'required',
            'year' => 'required|numeric',
            'stock' => 'required|integer|min:0'
        ]);

        Book::create($request->all());

        return redirect()->back()->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'isbn' => 'required|unique:books,isbn,' . $book->id,
            'title' => 'required',
            'author' => 'required',
            'category_id' => 'required',
            'publisher' => 'required',
            'year' => 'required|numeric',
            'stock' => 'required|integer|min:0'
        ]);

        $book->update($request->all());

        return back()->with('success', 'Buku berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        if ($book->transactions()->exists()) {
            return back()->with('error', 'Buku sedang dipakai');
        }

        $book->delete();

        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus');
    }
}
