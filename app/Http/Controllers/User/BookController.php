<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Di BookController.php
    public function index(Request $request)
    {
        $query = Book::query();

        // Search
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('author', 'like', '%' . $request->search . '%');
            });
        }

        // Filter Category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Sorting
        switch ($request->get('sort', 'newest')) {
            case 'newest':
                $query->latest();
                break;
            case 'oldest':
                $query->oldest();
                break;
            case 'title_asc':
                $query->orderBy('title', 'asc');
                break;
            case 'title_desc':
                $query->orderBy('title', 'desc');
                break;
        }

        $books = $query->paginate(12);

        return view('user.books.index', compact('books'));
    }
}
