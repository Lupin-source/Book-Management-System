<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // List all books
    public function index()
    {
        return Book::all();
    }

    // Show a specific book
    public function show($id)
    {
        return Book::findOrFail($id);
    }

    // Create a new book
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|integer',
            'genre' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        return Book::create($request->all());
    }

    // Update an existing book
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'author' => 'sometimes|required|string|max:255',
            'published_year' => 'sometimes|required|integer',
            'genre' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|nullable|string',
        ]);

        $book->update($request->all());
        return $book;
    }

    // Delete a book
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return response()->json(null, 204);
    }
}
