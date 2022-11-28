<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        return view('books.index', [
            'books' => Book::all()
        ]);
    }

    public function show(Book $book)
    {
        $publisherName = DB::table('publishers')->where('id', $book->publisher_id)->first();
        return view('books.show', [
            'book' => $book,
            'publisher' => $publisherName
        ]);
    }
}
